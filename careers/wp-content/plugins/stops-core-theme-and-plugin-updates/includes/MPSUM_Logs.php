<?php
/**
 * Easy Updates Manager log controller
 *
 * Initializes the log table and sets up actions/events
 *
 * @package WordPress
 * @since 6.0.0
 */
class MPSUM_Logs {
	
	/**
     * Holds the class instance.
     *
     * @since 6.0.0
     * @access static
     * @var MPSUM_Logs $instance
     */
	public static $instance = null;

	/**
	 * Holds log messages
	 *
	 * @var array An array of log messages
	 */
	protected $log_messages = array();

	/**
	 * Holds update method information
	 *
	 * @var bool Determines whether auto update or manual
	 */
	protected $auto_update = false;
	
	/**
     * Holds version number of the table
     *
     * @since 6.0.0
     * @access private
     * @var string $slug
     */
	private $version = '1.1.3';

	/**
	 * Holds a variable for checkin the logs table
	 *
	 * @since 8.0.1
	 * @access private
	 * @var bool $log_table_exists
	 */
	private static $log_table_exists = false;
	
	/**
     * Set a class instance.
     *
     * Set a class instance.
     *
     * @since 5.0.0 
     * @access static
     */
	public static function run() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	} //end get_instance	
	
	/**
     * Class constructor.
     *
     * Initialize the class
     *
     * @since 6.0.0
     * @access private
     */
	protected function __construct() {
		$table_version = get_site_option('mpsum_log_table_version', '0');
		if (version_compare($table_version, $this->version) < 0) {
			if (!$this->log_table_exists()) {
				$this->build_table();
				MPSUM_Updates_Manager::update_option('mpsum_log_table_version', $this->version);
			}
		}

		// Clear transient on updates screen
		global $pagenow;
		if ('update-core.php' == $pagenow) {
			delete_site_transient('mpsum_version_numbers');
		}

		// Clear transient when doing Ajax
		if (defined('DOING_AJAX') && true == DOING_AJAX && isset($_REQUEST['subaction']) && 'force_updates' == $_REQUEST['subaction'] ) {
			delete_site_transient('mpsum_version_numbers'); 
		}

		add_action('admin_init', array($this, 'cache_version_numbers'));
		add_action('pre_auto_update', array($this, 'pre_auto_update'));
		add_action('automatic_updates_complete', array($this, 'automatic_updates'));
		add_action('upgrader_process_complete', array($this, 'manual_updates'), 10, 2);
		add_filter('eum_i18n', array($this, 'logs_i18n'));

	} //end constructor

	/**
	 * Add webhook i18n
	 * 
	 * @param array $i18n Array of internationalized strings
	 * 
	 * @return array Updated array of internationalized strings
	 */
	public function logs_i18n($i18n) {
		$i18n['logs_no_items'] = __('No items found.', 'stops-core-theme-and-plugin-updates');
		return $i18n;
	}
	
	/**
	 * Cache core, plugins and themes versions to use in log messages.
	 * 
	 * @return array Cached version information
	 */
	public function cache_version_numbers() {
		
		// Transient expires in 360 minutes - If false or not array, cache continues
		$continue_cache = false;
		$this->log_messages = get_site_transient('mpsum_version_numbers');
		if (empty($this->log_messages) || !is_array($this->log_messages)) {
			$this->log_messages = array();
			$continue_cache = true;
		}

		// Return non-empty log messages if WP_DEBUG is false and transient is populated
		if (defined('WP_DEBUG') && !WP_DEBUG && false === $continue_cache && !empty($this->log_messages)) {
			return $this->log_messages;
		}

		// Set error log and begin cache if WP_DEBUG is on
		if (defined('WP_DEBUG') && WP_DEBUG) {
			error_log('MPSUM_Logs::cache_version_numbers() runs (as WP_DEBUG is on)');
		}

		// Force transient refresh and get updates
		wp_version_check( array(), true );
		wp_update_plugins();
		wp_update_themes();
		$upgrade_plugins = get_plugin_updates();
		$upgrade_themes = get_theme_updates();
		$upgrade_wp = get_core_updates();
		$update_translations = wp_get_translation_updates();
		if (false !== $upgrade_wp) {

			foreach ($upgrade_wp as $item) {
				if (!empty($item->partial_version)) {
					$this->log_messages['core']['version'] =  $item->partial_version;
				} else {
					$this->log_messages['core']['version'] =  $item->current;
					$this->log_messages['core']['reinstall'] = true;
				}
				$this->log_messages['core']['new_version'] = $item->version;
				if ($item->version === $item->current) {
					include ABSPATH.WPINC.'/version.php';
					$this->log_messages['core']['version'] = $wp_version;
				}
			}
		}
		foreach ( $upgrade_plugins as $plugin => $plugin_data ) {
			if (empty($this->log_messages['plugin'][$plugin])) {
				$this->log_messages['plugin'][$plugin]['name']        = $plugin_data->Name;
				$this->log_messages['plugin'][$plugin]['version']     = $plugin_data->Version;
				$this->log_messages['plugin'][$plugin]['new_version'] = $plugin_data->update->new_version;
			}
		}
		foreach ( $upgrade_themes as $stylesheet => $theme ) {
			if (empty($this->log_messages['theme'][$stylesheet])) {
				$this->log_messages['theme'][$stylesheet]['name']        = $theme->display('Name');
				$this->log_messages['theme'][$stylesheet]['version']     = $theme->display('Version');
				$this->log_messages['theme'][$stylesheet]['new_version'] = $theme->update['new_version'];
			}
		}
		foreach ($update_translations as $translation) {
			$this->log_messages['translations'][] = $this->get_update_name($translation);
		}
		if (!empty($this->log_messages['translations'])) {
			$this->log_messages['translations'] = array_unique($this->log_messages['translations'], SORT_REGULAR);

		}
		set_site_transient('mpsum_version_numbers', $this->log_messages, 6 * 60 * 60);
		return $this->log_messages;
	}

	/**
	 * Get cached version informmation for updates
	 * 
	 * @return array Cached version information
	 */
	public function get_cached_version_information() {

		// Make sure log_messages is set. If it is, return itself.
		if (!empty($this->log_messages) && is_array($this->log_messages)) {
			return $this->log_messages;
		}

		// Log messages is empty, attempt to get transient
		$cached_updates = get_site_transient('mpsum_version_numbers');
		if (empty($cached_updates) || !is_array($cached_updates)) {
			$cached_updates = $this->cache_version_numbers();
		}		
		return $cached_updates;
	}

	/**
	 * Set update method as automatic
	 */
	public function pre_auto_update() {
		$this->auto_update = true;
	}

	/**
	 * Finds and returns name of give update object
	 *
	 * @param object $translation Translation object
	 *
	 * @return array An array of name and version of updates
	 */
	public function get_update_name($translation) {
		$translation = (object)$translation;
		$type = $translation->type;
		$result = array();
		switch ($type) {
			case 'core':
				$result[$type]['name'] = 'WordPress';
				break;
			case 'theme':
				$theme = wp_get_theme($translation->slug);
				if ($theme->exists())
					$result[$type]['name'] = $theme->get('Name') . ' (' . $translation->language . ')';
					$result[$type]['new_version'] = $theme->get('Version');
				break;
			case 'plugin':
				if ( ! function_exists( 'get_plugins' ) ) {
					require_once ABSPATH . 'wp-admin/includes/plugin.php';
				}
				$plugin = get_plugins( '/' . $translation->slug );
				$plugin = reset( $plugin );
				if ($plugin)
					$result[$type]['name'] = $plugin['Name'] . ' (' . $translation->language . ')';
					$result[$type]['new_version'] = $plugin['Version'];
				break;
		}
		$result[$type]['version'] = $translation->version;
		return $result;
	}

	/**
	 * Log automatic updates
	 *
	 * @since 6.0.0
	 * @access public
	 * @param array $update_results Update results
	 * @return void
	 */
	public function automatic_updates( $update_results ) {
		if ( empty( $update_results ) ) return;
		$this->log_messages = $this->get_cached_version_information();
		foreach($update_results as $type => $results) {
			switch( $type ) {
				case 'core':
					$core = $results[0];
					$name = $core->name;
					$status = 0;
					$version_from = $this->log_messages['core']['version'];
					$version = $this->log_messages['core']['new_version'];
					list($version, $status) = $this->set_status_and_version($core->result, $version_from, $version, $status);
					$this->insert_log($name, $type, $version_from, $version, 'automatic', $status);
					break;
				case 'plugin':
					foreach( $results as $plugin ) {
						if( !isset($plugin->item->plugin)) continue;
						$name = ( isset( $plugin->name ) && ! empty( $plugin->name ) ) ? $plugin->name : $plugin->item->slug;
						$status  = 0;
						$version = isset( $plugin->item->new_version ) ? $plugin->item->new_version : '0.00';
						$version_from = $this->log_messages[ $type ][ $plugin->item->plugin ]['version'];
						list($version, $status) = $this->set_status_and_version($plugin->result, $version_from, $version, $status);
						$this->insert_log( $name, $type, $version_from, $version, 'automatic', $status );
					}
					break;
				case 'theme':
					foreach( $results as $theme ) {
						if( !isset($theme->item->theme)) continue;
						$name = $theme->name;
						$status = 0;
						$version = $theme->item->new_version;
				 		$version_from = $this->log_messages[$type][$theme->item->theme]['version'];
				 		list($version, $status) = $this->set_status_and_version($theme->result, $version_from, $version, $status);
						$this->insert_log($name, $type, $version_from, $version, 'automatic', $status);
					 }
					break;
				case 'translation':
					foreach( $results as $translation ) {
						$status = is_wp_error( $translation->result ) ? 0: 1;
						$version_from = $translation->item->version;
						$version = ( 1 == $status ) ? $translation->item->version : '';
						$name = $this->get_name_for_update($translation->item->type, $translation->item->slug);
						$name = $name . ' (' . $translation->item->language . ')';
						$this->insert_log($name, $type, $version_from, $version, 'automatic', $status);
					 }
					break;
			}
		}
	}

	/**
	 * Sets version number and upgrade status
	 *
	 * @param object  $result       Result of update object
	 * @param string  $version_from Version to upgrade from
	 * @param string  $version      Version to upgrade to
	 * @param integer $status       Status of upgrade process
	 *
	 * @return array An array of version number and upgrade status
	 */
	protected function set_status_and_version($result, $version_from, $version, $status) {
		if (!is_wp_error($result)) {
			if ($version_from == $version || NULL === $result) {
				$version = $version_from;
				$status = 0;
			} else {
				$status = 1;
			}
		}
		return array($version, $status);
	}

	/**
	 * Inserts result of upgrade process message to log table
	 *
	 * @param string $name         Upgrade name
	 * @param string $type         Type of upgrade
	 * @param string $version_from Upgrade from version number
	 * @param string $version      Upgrade to version number
	 * @param string $action       Action type, manual or automatic
	 * @param int    $status       Status of upgrade
	 * @param int    $user_id      User responsible for the upgrade
	 */
	private function insert_log($name, $type, $version_from, $version, $action, $status, $user_id = 0) {
		global $wpdb;
		$table_name = $wpdb->base_prefix . 'eum_logs';
		$wpdb->insert(
			$table_name,
			array(
				'user_id'  => $user_id,
				'name'	   => $name,
				'type'	   => $type,
				'version_from' => $version_from,
				'version' => $version,
				'action'  => $action,
				'status'  => $status,
				'date'	   => current_time('mysql'),
			),
			array(
				'%d',
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
			)
		);
	}
	
	/**
	 * Get the name of an translation item being updated.
	 *
	 * @since 6.0.3
	 * @access private
	 * @param	string $type type of translation update
	 * @param	string $slug Slug of item
	 * @return string The name of the item being updated.
	 */
	protected function get_name_for_update( $type, $slug ) {
		if ( ! function_exists( 'get_plugins' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}
		switch ( $type ) {
			case 'core':
				return 'WordPress'; // Not translated

			case 'theme':
				$theme = wp_get_theme( $slug );
				if ( $theme->exists() )
					return $theme->Get( 'Name' );
				break;
			case 'plugin':
				$plugin_data = get_plugins( '/' . $slug );
				$plugin_data = reset( $plugin_data );
				if ( $plugin_data )
					return $plugin_data['Name'];
				break;
		}
		return '';
	}
	

	/**
	 * Manual updates
	 *
	 * @param array $upgrader_object Upgrade Object(s)
	 * @param array $options 		 Update options
	 * @return void
	 */
	public function manual_updates( $upgrader_object, $options ) {
		if ( !isset( $options[ 'action' ] ) || 'update' !== $options[ 'action' ] ) return;
		$this->log_messages = $this->get_cached_version_information();
		$user_id = get_current_user_id();
		if ( 0 == $user_id ) return; // If there is no user, this is not a manual update
		if (true === $this->auto_update) return;
		switch( $options[ 'type' ] ) {
			case 'core':
				$version_from = $this->log_messages['core']['version'];
				$version = $this->log_messages['core']['new_version'];
				if (!empty($this->log_messages['core']['reinstall'])) {
					$status = 1;
				} else {
					$status = $version_from !== $version ? 1 : 0;
				}
				$name = 'WordPress ' . $version;
				$this->insert_log($name, $options['type'], $version_from, $version, 'manual', $status, $user_id);
				break;
			case 'plugin':
				if ( ! empty( $this->log_messages['plugin'] ) && isset( $options[ 'plugins' ] ) && !empty( $options[ 'plugins' ] ) ) {
					foreach( $options[ 'plugins' ] as $plugin ) {
						if ( isset( $this->log_messages['plugin'][ $plugin ] ) ) {
							$version_from = $this->log_messages['plugin'][ $plugin ][ 'version' ];
							$version = $this->log_messages['plugin'][$plugin]['new_version'];
							$status = ($version_from == $version) ? 0 : 1;
							$name = $this->log_messages['plugin'][$plugin]['name'];
							$this->insert_log($name, $options['type'], $version_from, $version, 'manual', $status, $user_id);
						}
					}
				}
				break;
			case 'theme':
				if ( isset( $options[ 'themes' ] ) && !empty( $options[ 'themes' ] ) ) {
					foreach( $options[ 'themes' ] as $theme ) {
						$theme_data = wp_get_theme( $theme );
						if ( $theme_data->exists() ) {
							if (!empty($this->log_messages['theme'][$theme])) {
								$version_from = $this->log_messages['theme'][$theme]['version'];
								$version = $theme_data->get('Version');
								$status = ($version_from == $version) ? 0 : 1;
								$name = $theme_data->get('Name');
								$this->insert_log($name, $options['type'], $version_from, $version, 'manual', $status, $user_id);
							}
						}
					}
				}
				break;
			case 'translation':
				foreach( $options[ 'translations' ] as $translation ) {
					$status = 1;
					$version = $translation[ 'version' ];
					$version_from = $version;
					$slug = $translation[ 'slug' ];
					$name = $this->get_name_for_update( $translation[ 'type' ], $slug );
					$name = $name . ' (' . $translation[ 'language' ] . ')';
					$this->insert_log($name, $translation['type'], $version_from, $version, 'manual', $status, $user_id);
				 }
				break;
		}
	}

	/**
	 * Log when a plugin (themes are hopefully coming soon) fails to update via safemode.
	 * 
	 * @since 7.0.1
	 * @access private
	 * @param object $item The plugin item that will be logged.
	 */
	public static function log_safe_mode($item) {

		global $wpdb;
		$plugin_data = get_plugin_data(WP_PLUGIN_DIR.'/'.$item->plugin);
		$tablename = $wpdb->base_prefix . 'eum_logs';

		// Version numbers will be the same since the plugin didn't update
		$wpdb->insert( 
			$tablename,
			array(
				'name'	        => $plugin_data['Name'],
				'type'	        => 'plugin',
				'version_from'  => $plugin_data['Version'],
				'version'       => $plugin_data['Version'],
				'action'        => 'automatic',
				'status'        => 2,
				'date'	        => current_time('mysql'),
			),
			array(
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
				'%s',
			)
		);
	}
	
	/**
     * Creates the log table
     *
     * Creates the log table
     *
     * @since 6.0.0
     * @access private
     */
	private function build_table() {
		global $wpdb;
		$tablename = $wpdb->base_prefix . 'eum_logs';
		
		// Get collation - From /wp-admin/includes/schema.php
		$charset_collate = '';
		if ( ! empty($wpdb->charset) )
			$charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
		if ( ! empty($wpdb->collate) )
			$charset_collate .= " COLLATE $wpdb->collate";

		$sql = "CREATE TABLE {$tablename} (
						log_id BIGINT(20) NOT NULL AUTO_INCREMENT,
						user_id BIGINT(20) NOT NULL DEFAULT 0,
						name VARCHAR(255) NOT NULL,
						type VARCHAR(255) NOT NULL,
						version_from VARCHAR(255) NOT NULL,
						version VARCHAR(255) NOT NULL,
						action VARCHAR(255) NOT NULL,
						status VARCHAR(255) NOT NULL,
						date DATETIME NOT NULL,
						PRIMARY KEY  (log_id) 
						) {$charset_collate};";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta($sql);
	}

	/**
	 * Checks whether log table exists or not
	 *
	 * @return boolean True if table exists, otherwise false
	 */
	private function log_table_exists() {
		if(true === self::$log_table_exists) {
			return;
		}
		global $wpdb;
		$table_name = $wpdb->prefix.'eum_logs';
		self::$log_table_exists = (bool)$wpdb->get_var("SHOW TABLES LIKE '$table_name'");
		return self::$log_table_exists;
	}
	
	/**
     * Clears the log table
     *
     * Clears the log table
     *
     * @since 6.0.0
     * @access static
     */
	public static function clear() {
		global $wpdb;
		$tablename = $wpdb->base_prefix . 'eum_logs';
		$sql = "delete from $tablename";
		$wpdb->query( $sql );
	}
	
	/**
     * Drops the log table
     *
     * Drops the log table
     *
     * @since 6.0.0
     * @access static
     */
	public static function drop() {
		global $wpdb;
		$tablename = $wpdb->base_prefix . 'eum_logs';
		$sql = "drop table if exists $tablename";
		$wpdb->query( $sql );
		delete_site_option('mpsum_log_table_version');
	}
}
