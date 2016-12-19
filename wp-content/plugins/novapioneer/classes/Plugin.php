<?php

namespace Novapioneer;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;
use Novapioneer\Admin\Menu\SubPage;
use Novapioneer\Admin\Fields\NPTextField;

class Plugin
{

    private $pages;

    private $main_page;

    public function __construct()
    {
        register_activation_hook( NOVAP_PLUGIN_FILE, array( $this, 'activate') );
        register_deactivation_hook( NOVAP_PLUGIN_FILE, array( $this, 'deactivate') );

        add_action( 'init', array( $this, 'init' ) );
        add_action('admin_menu', array( $this, 'admin_menu') );

        $this->pages = array();
        $this->main_page = "novap-options";
    }

    public function activate()
    {

    }

    public function deactivate()
    {

    }

    public function init()
    {
        $this->redirect();
    }


    public function admin_menu()
    {
        $main_page = new Page("admin_pages/main_page.php", array(
            "page_title" => "General Settings",
            "menu_title" => "Novapioneer",
            "capability" => "manage_options",
            "menu_slug"  => $this->main_page
        ), array(
            "settings_fields" => "novap-general-settings"
        ));
        $this->add_page($main_page);

        $general_settings = new SubPage('admin_pages/main_page.php', array(
            "parent_slug" => $this->main_page,
            "page_title"  => "General Settings",
            "menu_title"  => "General Settings",
            "capability"  => "manage_options",
            "menu_slug"   => $this->main_page
        ), array(
            "settings_fields" => "novap-general-settings"
        ));
        $this->add_page($general_settings);

        $redirection_settings_page = new SubPage("admin_pages/redirection_settings.php", array(
            "parent_slug" => $this->main_page,
            "page_title" => "Redirection Settings",
            "menu_title" => "Redirection Settings",
            "capability" => "manage_options",
            "menu_slug"  => "novap-options-redirection"
        ), array(
            "settings_fields" => "novap-redirection-settings"
        ));
        $this->add_page($redirection_settings_page);

        add_action('admin_init', array( $this, 'register_settings' )); 

    }

    public function register_settings()
    {
        /** Register Settings **/
        register_setting('novap-general-settings', 'novap_ga_id', 'sanitize_text_field');

        register_setting('novap-redirection-settings', 'novap_kenya_redirection', 'sanitize_text_field');
        register_setting('novap-redirection-settings', 'novap_sa_redirection', 'sanitize_text_field');

        /** Add Sections **/
        $redirection_urls_section = new Section(
            'novap-redirection-urls-section',
            'Redirection Options',
            $this->pages['novap-options-redirection'],
            'Customize country redirection urls for: '
        );

        $google_analytics_section = new Section(
            'novap-ga-section',
            'Google Analytics',
            $this->pages['novap-options'],
            'Add settings for Google analytics: '
        );

        /** Add Fields **/

        $kenya_redirection = new NPTextField(
            'novap_kenya_redirection',
            'Kenya:',
            array(
                'id' => 'novap_kenya_redirection'
            ),
            $this->pages['novap-options-redirection'],
            $redirection_urls_section
        );

        $sa_redirection = new NPTextField(
            'novap_sa_redirection',
            'South Africa:',
            array(
                'id' => 'novap_sa_redirection'
            ),
            $this->pages['novap-options-redirection'],
            $redirection_urls_section
        );

        $ga_id = new NPTextField(
            'novap_ga_id',
            'Tracking ID:',
            array(
                'id' => 'novap_ga_id',
                'class' => 'regular-text'
            ),
            $this->pages['novap-options'],
            $google_analytics_section
        );
    }

    private function redirect()
    {
        $actual_link = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if( !is_admin() && ( $actual_link == site_url('/') ) ):

            $country = $this->get_location()["geoplugin_countryName"];

            $kenya_redirect_url = get_option('novap_kenya_redirection');
            $sa_redirect_url    = get_option('novap_sa_redirection');

            if( !empty($kenya_redirect_url) && !empty($sa_redirect_url) ):

                switch($country){
                    case "Kenya":
                        wp_redirect(site_url("/{$kenya_redirect_url}"), 301);  exit;
                        break;
                    case "South Africa":
                        wp_redirect(site_url("/{$sa_redirect_url}"), 301); exit;
                        break;
                    default:
                        // do nothing
                        break;
                }

            endif;

        endif;

    }

    private function get_location()
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];

        $location_data = unserialize(
            file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address)
        );

        return $location_data;
    }


    private function add_page(Page $page){
        $this->pages[$page->getSlug()] = $page;
    }
}