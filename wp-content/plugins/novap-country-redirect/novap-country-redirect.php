<?php
/**
 * Plugin Name: Novapioneer Country Redirect
 * Description: Redirects users to relevant home pages based on the country from which they are viewing the site.
 * Version:     0.0.1
 * Author:      Circle Digital
 */

/** If this file is called directly, abort. **/
if ( !defined( 'WPINC' ) )
{
	die();
}

/** Define plugin path constant **/
if( !defined( 'NPCR_PLUGIN_PATH') )
{
    define('NPCR_PLUGIN_PATH', plugin_dir_path(__FILE__));
}
/** Define plugin file constant **/
if ( !defined('NPCR_PLUGIN_FILE') )
{
    define('NPCR_PLUGIN_FILE', __FILE__ );
}

require NPCR_PLUGIN_PATH . "admin-settings.php";

add_action('init', 'npcr_init');
function npcr_init()
{
    // Redirect based on client's country.
    _npcr_redirect();
}


function _npcr_redirect()
{

    if( !is_admin() ):

        $country = _npcr_get_location()["geoplugin_countryName"];

        switch($country){
            case "Kenya":
                header("Location:".site_url('/kenya'), true, 301); 
                break;
            case "South Africa":
                header("Location:".site_url('/south-africa'), true, 301);
                break;
            default:
                // do nothing
                break;
        }

    endif;


}

function _npcr_get_location()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $location_data = unserialize(
        file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address)
    );

    return $location_data;
}