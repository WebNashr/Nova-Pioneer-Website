<?php

if (!defined('NOVAP_THEME_PATH')) {
    define('NOVAP_THEME_PATH', get_template_directory() . '/');
}

require_once NOVAP_THEME_PATH . 'vendor/autoload.php';

use NovaPioneer\Mailer;
use NovaPioneer\View;

include_once 'forms/forms.php';
function novap_get_baseurl()
{
    if (defined('NOVAP_BASE_URL')) {
        return NOVAP_BASE_URL;
    } else {
        throw new Exception('NOVAP_BASE_URL must be defined!');
    }
}

function novap_setup()
{

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support('post-thumbnails');

    // de-register native image sizes
    // add_action('init', 'remove_plugin_image_sizes');
    // function remove_plugin_image_sizes() {
    //   remove_image_size('large');
    // }

    // add custom image sizes
    add_image_size('16-9-large', 1200, 675, true, array('center', 'center')); // hero-type, gallery-type images
    add_image_size('profile-square', 250, 250, true, array('center', 'center')); // perosn profile images
    add_image_size('square-medium', 480, 480, true, array('center', 'center')); // perosn profile images
    // add_image_size('16-9-big', 1024, 576, true, array('center', 'center')); // inline full-width images
    // add_image_size('16-9-mid', 640, 360, true, array('center', 'center')); // article inline and half-width images
    add_image_size('16-9-small', 480, 270, true, array('center', 'center')); // card images
    add_image_size('4-3-large', 1200, 900, true, array('center', 'center'));
    // add_image_size('4-3-small', 640, 480, true, array('center', 'center'));

    // add_image_size( 'some-size', 270, 140 ); // 270 pixels wide and unlimited height
    // add_image_size( 'another-size', 440, 180, true ); // cropped
    // add_image_size( 'another-size-alt', 440, 180, true, array('center', 'center') ); // cropped and centered

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'image', 'video', 'gallery', 'quote'
    ));

    /**
     * Gravity Forms Enable Hiding Labels on a field by field basis
     */
    add_filter('gform_enable_field_label_visibility_settings', '__return_true');


} // novap_setup
add_action('after_setup_theme', 'novap_setup');


function novap_setup_widgets()
{
    register_sidebar(array(
        'name' => 'Main Footer',
        'id' => 'main-footer'
    ));
}

add_action('widgets_init', 'novap_setup_widgets');

function novap_menus()
{
    // Header Menu
    register_nav_menu('novap-header-menu', 'Header Menu');

    // Footer Menu
    register_nav_menu('novap-footer-menu', 'Footer Menu');
}

add_action('init', 'novap_menus');

function novap_menu_css_classes($classes, $item, $args, $depth)
{
    if ('novap-header-menu' === $args->theme_location) {
        $classes[] = 'menu-item-main';

        if ($item->current == true) {
            $classes[] = 'menu-item-current';
        }

    }


    if ('novap-footer-menu' === $args->theme_location) {
        $classes[] = 'footer-box-item';

        if ($depth == 0):
            $classes[] = 'footer-box-main-item';
        else:
            $classes[] = 'footer-box-menu-item';
        endif;

    }


    return $classes;
}

add_filter('nav_menu_css_class', 'novap_menu_css_classes', 10, 4);


// Replaces the excerpt "Read More" text by a link
function novap_excerpt_more($more)
{
    global $post;
    return '<a class="readmore" href="' . get_permalink($post->ID) . '"> Read more...</a>';
}

add_filter('excerpt_more', 'novap_excerpt_more');


/**
 * Pagination for archive, taxonomy, category, tag and search results pages
 *
 * @global $wp_query http://codex.wordpress.org/Class_Reference/WP_Query
 * @return Prints the HTML for the pagination if a template is $paged
 */
function novap_base_pagination(WP_Query $query = null)
{
    global $wp_query;
    $query = !is_null($query) && !empty($query) ? $query : $wp_query;

    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
        'mid_size' => 5

    ));

    // Display the pagination if more than one page is found
    if ($paginate_links) {
        echo '<footer class="page-pagination"><nav role="navigation">';

        echo $paginate_links;

        echo '</nav></footer><!--// end .pagination -->';
    }
}


function novap_body_class($classes)
{
    $additional_classes = [];

    /** Add non-hero class **/
    $post_types = array(
        'tribe_events',
        'post',
        'articles'
    );

    $page_templates = array(
        'tribe-events.php',
        'fees-structure-page.php',
        'apply-online-page.php'
    );

    if (is_404() || is_search() || is_singular($post_types) || is_page_template($page_templates)) {
        $additional_classes[] = 'non-hero';
    }

    // Remove search-results class from body classes in search page
    if (is_search()) {

        $blacklist = array('search-results');

        $classes = array_diff($classes, $blacklist);
    }

    return array_merge($classes, $additional_classes);
}

add_filter('body_class', 'novap_body_class');


function novap_notify_on_rsvp(array $rsvp, $post)
{
    $rsvp = (object)$rsvp;
    $event_date = get_field('date', $post->ID);
    $admin_email_view = new View("emails/notify_admin_on_rsvp.html");
    $user_email_view = new View("emails/notify_user_on_rsvp.html");

    $admin_mailer = new Mailer();
    $user_mailer = new Mailer();

    // Send user autorespond email first
    $user_subject = "Thank you for your RSVP!";
    $autoresponder_sent = $user_mailer->sendMail($user_subject, $user_email_view->render([
        "title" => $user_subject,
        "rsvp_name" => $rsvp->name,
        "rsvp_email" => $rsvp->email,
        "rsvp_attendance" => $rsvp->attendance,
        "event_name" => $post->post_title,
        "event_date" => $event_date
    ], false), [$rsvp->email => $rsvp->name]);

    // Then send notification to admin
    $admin_subject = "RSVP from " . $rsvp->name . "<" . $rsvp->email . ">";
    $admin_notification_sent = $admin_mailer->sendMail($admin_subject, $admin_email_view->render([
        "title" => $admin_subject,
        "rsvp_name" => $rsvp->name,
        "rsvp_email" => $rsvp->email,
        "rsvp_attendance" => $rsvp->attendance,
        "event_name" => $post->post_title,
        "event_date" => $event_date
    ], false), ["schambach@circle.co.ke" => "Schambach", "maria@circle.co.ke" => "Maria", "joyce@circle.co.ke" => "Joyce"]);

}


function novap_add_event_rsvp()
{
    $data = (object)$_REQUEST;

    if (isset($data->rsvp_name) && isset($data->rsvp_email) && isset($data->rsvp_attendance) && isset($data->rsvp_guests) && isset($data->event_id)) {

        $rsvp = array(
            'name' => sanitize_text_field($data->rsvp_name),
            'email' => sanitize_email($data->rsvp_email),
            'guests' => sanitize_text_field($data->rsvp_guests),
            'attendance' => sanitize_text_field($data->rsvp_attendance)
        );

        $_event_rsvp = add_post_meta(intval($data->event_id), '_novap_event_rsvp', $rsvp);

        if ($_event_rsvp):
            // notify rsvp of receipt by email and notify novapioneer admins of rsvp via email
            novap_notify_on_rsvp($rsvp, $post);
        endif;
    }

    if (wp_get_referer()) {
        wp_safe_redirect(wp_get_referer());
    } else {
        wp_safe_redirect(get_home_uri());
    }

}

add_action('admin_post_event-rsvp', 'novap_add_event_rsvp'); // If the user is logged in
add_action('admin_post_nopriv_event-rsvp', 'novap_add_event_rsvp'); // If the user in not logged in


function novap_render_rsvp_metabox($post)
{

    $rsvps = get_post_meta($post->ID, '_novap_event_rsvp');


    $rsvps_to_render = array();

    foreach ($rsvps as $rsvp):
        $rsvp = (object)$rsvp;
        $delete_nonce = wp_create_nonce('novap_delete_rsvp');
        $urlencoded_rsvp = urlencode(json_encode($rsvp));
        $delete_url = get_admin_url(
            null,
            sprintf("/post.php?post=%s&action=edit&rsvp=%s&_wpnonce=%s", $post->ID, $urlencoded_rsvp, $delete_nonce)
        );
        $rsvp->delete_url = $delete_url;
        $rsvps_to_render[] = $rsvp;
    endforeach;

    $rsvp_metabox_content_view = new View("metaboxes/rsvp/content.html");

    $rsvp_metabox_content_view->render(array(
        "rsvps" => $rsvps_to_render
    ));

}


function novap_add_meta_boxes()
{
    add_meta_box('novap-events-rsvps', 'RSVP\'s', 'novap_render_rsvp_metabox', 'tribe_events', 'normal', 'high');
}

add_action('add_meta_boxes', 'novap_add_meta_boxes');


function novap_delete_rsvp_from_event()
{
    if (is_admin()):

        if (get_current_screen()->id === "tribe_events"):


            if (isset($_REQUEST['post']) && isset($_REQUEST['rsvp']) && isset($_REQUEST['_wpnonce'])):

                $post_id = intval($_REQUEST['post']);

                $nonce = esc_attr($_REQUEST['_wpnonce']);

                $rsvp = (array)json_decode(
                    stripslashes(
                        urldecode($_REQUEST['rsvp'])
                    )
                );

                if (wp_verify_nonce($nonce, 'novap_delete_rsvp')):
                    // delete the rsvp
                    delete_post_meta($post_id, '_novap_event_rsvp', $rsvp);
                endif;

            endif;


        endif;

    endif;
}

add_action('load-post.php', 'novap_delete_rsvp_from_event');


function novap_render_google_map(array $locations, $zoom = 18)
{
    $map_view = new View("map.html");

    if (!empty($locations)):

        $map_view->render(array(
            "locations" => json_encode($locations),
            "zoom" => $zoom
        ));

    endif;
}

function novap_download_file($fullpath)
{
    $fullpath = str_ireplace(home_url() . '/', ABSPATH, $fullpath);
    $fsize = filesize($fullpath);
    $filedata = (object)pathinfo($fullpath);
    $ext = strtolower($filedata->extension);
    header('Content-type: application/$ext');
    header('Content-disposition: attachment; filename="' . $filedata->basename . '"');
    readfile($fullpath); //Read and stream the file
}

function novap_enqueue_assets()
{

    if (!is_admin()) {
        // We have our own jquery so no need of using the default jquery unless we're in the admin dashboard
        wp_deregister_script('jquery');
        wp_register_script('jquery', novap_get_baseurl() . '/bower_components/jquery/dist/jquery.min.js', array(), '1.0.0', false);
        wp_enqueue_script('jquery');
    }
    /** STYLES **/
    wp_register_style('novapioneer_styles', novap_get_baseurl() . '/assets/css/main.min.css', '1.0.0', 'all');
    wp_enqueue_style('novapioneer_styles');

    /** SCRIPTS **/
    wp_register_script('novapioneer_scripts', novap_get_baseurl() . '/assets/js/main.min.js', array(), '1.0.0', true);
    wp_enqueue_script('novapioneer_scripts');
}

add_action('wp_enqueue_scripts', 'novap_enqueue_assets');


function novap_ga_tracking_id()
{
    return get_option('novap_ga_id');
}

add_filter('wp_get_nav_menu_items', 'nav_items', 11, 3);
function nav_items($items, $menu, $args)
{
    if (is_admin())
        return $items;

    foreach ($items as $item) {
        if ('Gallery' == $item->post_title)
            $item->url .= '?current=school_grounds';

    }
    return $items;
}


function set_post_new_bg()
{
    if (has_post_thumbnail()) {
        return 'style="background:url(' . get_the_post_thumbnail_url() . ')"';
    }
    return;

}

function isEven($num)
{
    if ($num % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * @param $i
 * takes a counter as param and calculates
 * the page number based on page being viewed
 * @return PageNumber
 */
function paginateSearchResults($i)
{
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    if ($uri_segments[2] && $uri_segments[2] > 1) {
        if ($uri_segments[2] > 2) {
            if ($uri_segments[2] < 4) {
                return $i + $uri_segments[2] + 1;
            } else {
                return $i + $uri_segments[2] + $uri_segments[2] - 2;
            }
        } else {
            return $i + $uri_segments[2];
        }
    } else {
        return $i;
    }
}

/**
 * @param $segment
 * @return string
 *  use method to walk through uri segments
 */
function uri_segment($segment)
{

    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    if ($uri_segments[$segment]) {
        return $uri_segments[$segment];
    }

    return 'error 421 : unknown uri segment ';


}

function remove_menu_items_from_admin()
{

    remove_menu_page('edit.php?post_type=articles');

}

add_action('admin_menu', 'remove_menu_items_from_admin');

/**
 * @param bool $taxonomies
 * @return string
 *
 * returns events by country or by school
 */

function get_nova_events($taxonomies = false)
{
    $html = '';
    if (uri_segment(1) == 'kenya') {
        $term[] = 'kenyan-events';
    } else {
        $term[] = 'south-african-events';
    }


    $args = array(
        'post_type' => 'tribe_events',
        'posts_per_page' => '2',
        'order' => 'DESC',
        'orderby' => 'ID',
        'tax_query' => array(
            array(
                'taxonomy' => 'tribe_events_cat',
                'field' => 'slug',
                'terms' => $term,
            )
        )
    );

    if (is_array($taxonomies)) {
        $args = array(
            'post_type' => 'tribe_events',
            'posts_per_page' => '1',
            'order' => 'DESC',
            'orderby' => 'ID',
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                    'terms' => $term,
                ),
                array(
                    'taxonomy' => 'school',
                    'field' => 'slug',
                    'terms' => $taxonomies,
                ),
            ));


    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        // The Loop
        while ($query->have_posts()) {
            $query->the_post();
            $event_address = tribe_get_address(get_the_ID()) . ',' . tribe_get_country(get_the_ID());
            $organizers = tribe_get_organizer_ids(get_the_ID());
            $html .= '<div class="small-notice" id="rsvp-node">';
            $html .= '  <h1>' . get_the_title() . '</h1>';
            $html .= '    <h2>' . tribe_get_start_date() . '</h2>';
            $html .= '      <p>' . $event_address . '</p>';
            $html .= '   <a href="#" class="modal-toggle button button-tiny button-secondary button-send-rsvp" data-event-name="' . get_the_title() . '" data-event-organisers="' . implode(', ', $organizers) . '" data-event-date="' . tribe_get_start_date() . '" data-event-location="' . $event_address . '" data-event-id="' . get_the_ID() . '">Send an RSVP</a>';
            $html .= ' </div>';
        }
        wp_reset_postdata();
    }

    return $html;
}

function isSegmentScrollable()
{
    $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

    if (array_key_exists(3, $segments)) {
        return true;
    }
    return false;

}


/*
 * Meta Box Removal
 * For Team Members Only
 */
function nova_post_tags_meta_box_remove()
{
    $id = 'tagsdiv-team_member_category'; // you can find it in a page source code (Ctrl+U)
    $post_type = 'team'; // remove only from post edit screen
    $position = 'side';
    remove_meta_box($id, $post_type, $position);
}

add_action('admin_menu', 'nova_post_tags_meta_box_remove');
/*
 * Add
 */
function nova_add_new_tags_metabox()
{
    $id = 'novatagsdiv-post_tag'; // it should be unique
    $heading = 'Team Member  Category'; // meta box heading
    $callback = 'nova_metabox_content'; // the name of the callback function
    $post_type = 'team';
    $position = 'side';
    $pri = 'default'; // priority, 'default' is good for us
    add_meta_box($id, $heading, $callback, $post_type, $position, $pri);
}

add_action('admin_menu', 'nova_add_new_tags_metabox');

/*
 * Fill
 */
function nova_metabox_content($post)
{

    // get all blog post tags as an array of objects
    $all_tags = get_terms(array('taxonomy' => 'team_member_category', 'hide_empty' => 0));

    // get all tags assigned to a post
    $all_tags_of_post = get_the_terms($post->ID, 'team_member_category');

    // create an array of post tags ids
    $ids = array();
    if ($all_tags_of_post) {
        foreach ($all_tags_of_post as $tag) {
            $ids[] = $tag->term_id;
        }
    }

    // HTML
    echo '<div id="taxonomy-post_tag" class="categorydiv">';
    echo '<input type="hidden" name="tax_input[team_member_category][]" value="0" />';
    echo '<ul>';
    foreach ($all_tags as $tag) {
        // unchecked by default
        $checked = "";
        // if an ID of a tag in the loop is in the array of assigned post tags - then check the checkbox
        if (in_array($tag->term_id, $ids)) {
            $checked = " checked='checked'";
        }
        $id = 'post_tag-' . $tag->term_id;
        echo "<li id='{$id}'>";
        echo "<label><input type='checkbox' name='tax_input[team_member_category][]' id='in-$id'" . $checked . " value='$tag->slug' /> $tag->name</label><br />";
        echo "</li>";
    }
    echo '</ul></div>'; // end HTML
}

function isOnMobile()
{

    $para = array(
        'parallax' => 'parallax',
        'ratio' => '0.2'

    );
    if (wpmd_is_android() || wpmd_is_ios() || wpmd_is_blackberry() || wpmd_is_phone() || wpmd_is_tablet()) {

        $para = array(
            'parallax' => '',
            'ratio' => 0

        );
        return (object)$para;
    }

    return (object)$para;

}

function ishandheld()
{
    if (wpmd_is_android() || wpmd_is_ios() || wpmd_is_blackberry() || wpmd_is_phone() || wpmd_is_tablet() || wpmd_is_device()) {

        return true;
    }
    return false;
}

function cliff_et_rsvp_bcc_admin_ticket()
{
    // get site admin's email
    $bcc = sanitize_email(get_option('admin_email'));

    // set Headers to Event Tickets' default
    $headers = array('Content-type: text/html');

    // add BCC email if it's a valid email address
    if (is_email($bcc)) {
        $headers[] = sprintf('Bcc: %s', $bcc);
    }

    return $headers;
}

add_filter('tribe_rsvp_email_headers', 'cliff_et_rsvp_bcc_admin_ticket');


