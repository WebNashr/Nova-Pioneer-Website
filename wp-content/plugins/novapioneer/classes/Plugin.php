<?php

namespace Novapioneer;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;
use Novapioneer\Admin\Menu\SubPage;
use Novapioneer\Admin\Fields\NPTextField;

class Plugin
{

    private $pages;

    public function __construct()
    {
        register_activation_hook( NOVAP_PLUGIN_FILE, array( $this, 'activate') );
        register_deactivation_hook( NOVAP_PLUGIN_FILE, array( $this, 'deactivate') );

        add_action( 'init', array( $this, 'init' ) );
        add_action('admin_menu', array( $this, 'admin_menu') );

        $this->pages = array();
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
            "menu_slug"  => "novap-options"
        ));
        $this->pages[$main_page->getSlug()] = $main_page;

        $redirection_settings_page = new SubPage("admin_pages/redirection_settings.php", array(
            "parent_slug" => $main_page->getSlug(),
            "page_title" => "Redirection Settings",
            "menu_title" => "Redirection",
            "capability" => "manage_options",
            "menu_slug"  => "novap-options-redirection"
        ), array(
            "settings_fields" => "novap-redirection-settings",
            "settings_sections" => array(
                "novap-redirection-urls-section"
            )
        ));
        $this->pages[$redirection_settings_page->getSlug()] = $redirection_settings_page;

        add_action('admin_init', array( $this, 'register_settings' )); 

    }

    public function register_settings()
    {
        /** Register Settings **/
        register_setting('novap-redirection-settings', 'novap_kenya_redirection', 'sanitize_text_field');
        register_setting('novap-redirection-settings', 'novap_sa_redirection', 'sanitize_text_field');

        /** Add Sections **/
        $redirection_urls_section = new Section(
            'novap-redirection-urls-section',
            'Redirection Options',
            $this->pages['novap-options-redirection'],
            'Customize country redirection urls for: '
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

    }

    private function redirect()
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

    private function get_location()
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];

        $location_data = unserialize(
            file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address)
        );

        return $location_data;
    }
}