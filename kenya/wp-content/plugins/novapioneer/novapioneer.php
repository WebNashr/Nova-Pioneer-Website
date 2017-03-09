<?php
/**
 * Plugin Name: Novapioneer
 * Description: Plugin for theme options for the Novapioneer theme.
 * Version:     0.0.1
 * Author:      Circle Digital
 */

/** If this file is called directly, abort. **/
if ( !defined( 'WPINC' ) )
{
	die();
}

/** Define plugin path constant **/
if( !defined( 'NOVAP_PLUGIN_PATH') )
{
    define('NOVAP_PLUGIN_PATH', plugin_dir_path(__FILE__));
}
/** Define plugin file constant **/
if ( !defined('NOVAP_PLUGIN_FILE') )
{
    define('NOVAP_PLUGIN_FILE', __FILE__ );
}

require NOVAP_PLUGIN_PATH . "vendor/autoload.php";

use Novapioneer\Plugin;

$plugin = new Plugin();