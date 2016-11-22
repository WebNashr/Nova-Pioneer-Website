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
    $actual_link = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if( !is_admin() && ( $actual_link == site_url('/')) ):

        $country = _npcr_get_location()["geoplugin_countryName"];

        $kenya_redirect_url = get_option('npcr_kenya_redirection');
        $sa_redirect_url    = get_option('npcr_sa_redirection');

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

function _npcr_get_location()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $location_data = unserialize(
        file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address)
    );

    return $location_data;
}