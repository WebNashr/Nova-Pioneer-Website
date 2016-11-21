<?php


add_action('admin_menu', 'npcr_redirection_submenu_page');
function npcr_redirection_submenu_page()
{

    add_submenu_page(
        "options-general.php",
        "Novapioneer Redirection", 
        "Novapioneer Redirection", 
        "manage_options", 
        "npcr-redirection", 
        "npcr_redirection_submenu_page_render"
    );

    // Activate custom settings
    add_action('admin_init', 'npcr_register_settings');  
}


function npcr_redirection_submenu_page_render(){

    require NPCR_PLUGIN_PATH . "templates/settings.php";

}

function npcr_register_settings()
{
    /** Register Settings **/
    register_setting('npcr-redirection-settings', 'npcr_kenya_redirection', 'sanitize_text_field');
    register_setting('npcr-redirection-settings', 'npcr_sa_redirection', 'sanitize_text_field');

    /** Add Sections **/
    add_settings_section( 
        "npcr-redirection-urls",  // The id of the section
        "Redirection Options",   // The title of the section
        "npcr_redirection_urls_callback",                  // The callback function that fills the section with the dedired content
        "npcr-redirection"          // The page where the section should be displayed
    );

    add_settings_field(
        'npcr-kenya-redirection',                           // The id of the field
        'Kenya',                                            // The title of the field
        'npcr_kenya_redirection_callback',                  // The function that fills the field with desired inputs
        'npcr-redirection',                                 // The page to display the settings field
        'npcr-redirection-urls',                            // The section of the page to display this field
        array( 'label_for' => 'npcr-kenya-redirection' )    // Other args
    );

    add_settings_field(
        'npcr-sa-redirection',                           // The id of the field
        'South Africa',                                  // The title of the field
        'npcr_sa_redirection_callback',                  // The function that fills the field with desired inputs
        'npcr-redirection',                              // The page to display the settings field
        'npcr-redirection-urls',                         // The section of the page to display this field
        array( 'label_for' => 'npcr-sa-redirection' )    // Other args
    );
}


function npcr_redirection_urls_callback()
{
    echo "Customize country redirection urls for: ";
}

function npcr_kenya_redirection_callback($args)
{
    $npcr_kenya_redirection = esc_attr( get_option( 'npcr_kenya_redirection' ) );
    echo "<input type='text' name='npcr_kenya_redirection' placeholder='e.g. kenya' value='".$npcr_kenya_redirection."' /> ";
}

function npcr_sa_redirection_callback($args)
{
    $npcr_sa_redirection = esc_attr( get_option( 'npcr_sa_redirection' ) );
    echo "<input type='text' name='npcr_sa_redirection' placeholder='e.g. south-africa' value='".$npcr_sa_redirection."' /> ";
}