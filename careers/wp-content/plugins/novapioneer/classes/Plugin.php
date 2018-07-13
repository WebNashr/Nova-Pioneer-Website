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

        add_action('admin_init', array( $this, 'register_settings' )); 

    }

    public function register_settings()
    {
        /** Register Settings **/
        register_setting('novap-general-settings', 'novap_ga_id', 'sanitize_text_field');

        /** Add Sections **/
        $google_analytics_section = new Section(
            'novap-ga-section',
            'Google Analytics',
            $this->pages['novap-options'],
            'Add settings for Google analytics: '
        );

        /** Add Fields **/
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

    private function add_page(Page $page){
        $this->pages[$page->getSlug()] = $page;
    }
}