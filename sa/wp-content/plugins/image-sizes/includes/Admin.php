<?php
/**
 * All admin facing functions
 */

namespace WPpeople\Image_Size;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * @package Plugin
 * @subpackage Admin
 * @author Nazmul Ahsan <n.mukto@gmail.com>
 */
class Admin {

    /**
     * Constructor function
     */
    public function __construct( $name, $version ) {
        $this->name = $name;
        $this->version = $version;
    }
    
    /**
     * Enqueue JavaScripts and stylesheets
     */
    public function enqueue_scripts() {
        wp_enqueue_style( $this->name, plugins_url( '/assets/css/admin.min.css', WPPIS ), '', $this->version, 'all' );

        wp_enqueue_script( $this->name, plugins_url( '/assets/js/admin.min.js', WPPIS ), array( 'jquery' ), $this->version, true );
    }

    /**
     * Internationalization
     */
    public function i18n() {
        load_plugin_textdomain( 'image-size', false, dirname( plugin_basename( WPPIS ) ) . '/languages/' );
    }

    /**
     * unset image size(s)
     *
     * @since 1.0
     */
    public function image_sizes( $sizes ){
        $disables = wpp_get_option( 'prevent_image_sizes', 'disables' ) ? : array();
        if( count( $disables ) ) :
        foreach( $disables as $disable ){
            unset( $sizes[ $disable ] );
        }
        endif;
        return $sizes;
    }

    public function send_message() {
        $data = $_POST;
        if( !wp_verify_nonce( $data['_wpp_nonce'], 'need-help' ) ) {
            wp_die( __( 'Unauthorized!', 'image-size' ) );
        }
        
        $to         = 'n.mukto@gmail.com';
        $subject    = $data['subject'] ? : __( 'Need help', 'image-size' );
        $headers    = "Content-Type: text/html\r\n";
        
        $message    = $data['message'] ? : __( 'Message from a plugin user.', 'image-size' );
        $message   .= '<p><i>' . __( 'Site URL:', 'image-size' ) . '</i>' . " {$data['url']}" . '</p>';
        $message   .= '<p><i>' . __( 'Sent From:', 'image-size' ) . '</i>' . " {$data['referer-site']}" . '</p>';

        wp_mail( $to, $subject, $message, $headers );
        wp_die();
    }
}