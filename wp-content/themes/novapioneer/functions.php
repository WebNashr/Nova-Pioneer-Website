<?php

if (!defined('NOVAP_THEME_PATH')) {
    define('NOVAP_THEME_PATH', get_template_directory() . '/');
}

require_once NOVAP_THEME_PATH . 'vendor/autoload.php';
use NovaPioneer\View;
use NovaPioneer\Mailer;

/** Start Global Variables **/

$country_privileges_map = array(
    "edit_kenyan_content" => "kenya",
    "edit_south_african_content" => "south-africa"
);

/** End Global Variables **/


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
        'id'   => 'main-footer'
    ));
}
add_action('widgets_init', 'novap_setup_widgets');

function novap_menus()
{
    // Header Menu
    register_nav_menu('novap-header-menu', 'Header Menu');

    // Footer Menu
    register_nav_menu('novap-footer-menu', 'Footer Menu');

    // Footer Aux Menu
    register_nav_menu('novap-footer-aux-menu', 'Footer Aux Menu');

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


    if ('novap-footer-aux-menu' === $args->theme_location) {
        $classes[] = 'footer-menu-aux-item';
        $classes[] = 'footer-menu-aux-item-page';

        if ($item->current == true) {
            $classes[] = 'footer-menu-aux-item-current';
        }
    }


    return $classes;
}

add_filter('nav_menu_css_class', 'novap_menu_css_classes', 10, 4);


// Chooses the default country for a post based on user capabilities
function novap_default_countries($post_id, $post, $update)
{
    if ($update)
        return;

    global $country_privileges_map;

    foreach ($country_privileges_map as $role => $country):
        if (current_user_can($role) && taxonomy_exists('country')):
            $country_term = get_term_by('slug', $country, 'country');
            wp_set_post_terms($post_id, [$country_term->term_id], 'country', true);
            break; // Don't need to continue looping
        endif;
    endforeach;

}

add_action('save_post', 'novap_default_countries', 10, 3);


// Filters posts by country taxonomy
function novap_filter_posts_by_country($query)
{
    if (is_admin()):

        // Get current user's info
        $current_user = wp_get_current_user();

        // First privilege a user has will be used to filter posts
        global $country_privileges_map;
        $taxonomy = 'country';

        // Filter posts depending on role/capability
        foreach ($country_privileges_map as $role => $country):
            if (current_user_can($role) && taxonomy_exists('country')):
                $query->set('tax_query', array(
                    'relation' => 'OR',

                    // Get Posts in user's country
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $country
                    ),

                    // Get Posts not in any country
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => get_terms(array(
                            'taxonomy' => $taxonomy,
                            'fields' => 'names'
                        )),
                        'operator' => 'NOT IN'
                    )
                ));
                break; // Don't need to continue looping
            endif;
        endforeach;

    endif;

}

add_action('pre_get_posts', 'novap_filter_posts_by_country');

// Display Country and School Column
function novap_admin_display_custom_column($taxonomy, $post, $class = NULL)
{

    if (taxonomy_exists($taxonomy)):
        $taxonomy_object = get_taxonomy($taxonomy);
        $countries = get_the_terms($post->ID, $taxonomy);
        if (is_array($countries)):
            $out = array();
            foreach ($countries as $country):
                $posts_in_term_qv = array();
                if ('post' != $post->post_type) {
                    $posts_in_term_qv['post_type'] = $post->post_type;
                }
                if ($taxonomy_object->query_var) {
                    $posts_in_term_qv[$taxonomy_object->query_var] = $country->slug;
                } else {
                    $posts_in_term_qv['taxonomy'] = $taxonomy;
                    $posts_in_term_qv['term'] = $country->slug;
                }
                $label = esc_html(sanitize_term_field('name', $country->name, $country->term_id, $taxonomy, 'display'));
                $edit_url = add_query_arg($posts_in_term_qv, 'edit.php');

                $class_html = '';
                if (!empty($class)) {
                    $class_html = sprintf(
                        ' class="%s"',
                        esc_attr($class)
                    );
                }

                $out[] = sprintf(
                    '<a href="%s"%s>%s</a>',
                    esc_url($edit_url),
                    $class_html,
                    $label
                );
            endforeach;
            echo join(__(', '), $out);
        else:
            echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . $taxonomy_object->labels->no_terms . '</span>';
        endif;
    else:
        echo "";
    endif;
}


function novap_admin_posts_columns($columns)
{
    $columns['country'] = "Country";
    $columns['school'] = "School";
    return $columns;
}

add_filter('manage_edit-post_columns', 'novap_admin_posts_columns');
add_filter('manage_edit-page_columns', 'novap_admin_posts_columns');


function novap_admin_show_columns($name)
{
    global $post;

    switch ($name) {
        case 'country':
            novap_admin_display_custom_column('country', $post);
            break;
        case 'school':
            novap_admin_display_custom_column('school', $post);
            break;

    }
}

add_action('manage_posts_custom_column', 'novap_admin_show_columns');
add_action('manage_pages_custom_column', 'novap_admin_show_columns');


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


function novap_setup_assets()
{

}

add_action('wp_enqueue_scripts', 'novap_setup_assets');


function novap_body_class($classes)
{
    $additional_classes = [];

    /** Front page only **/
    if (is_front_page()) {
        $additional_classes[] = 'front-page';
        $additional_classes[] = 'body-home';
    }

    /** Add non-hero class **/
    $post_types = array(
        'careers',
        'tribe_events',
        'post',
        'articles'
    );

    $page_templates = array(
        'careers-page.php',
        'tribe-events.php',
        'school-gallery.php',
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

    if ( isset($data->rsvp_name) && isset($data->rsvp_email) && isset($data->rsvp_attendance) && isset($data->rsvp_guests) && isset($data->event_id) ) {

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

    if( wp_get_referer() )
    {
        wp_safe_redirect( wp_get_referer() );
    }
    else
    {
        wp_safe_redirect( get_home_uri() );
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


function novap_render_google_map(array $locations)
{
    $map_view = new View("map.html");

    if (!empty($locations)):

        $map_view->render(array(
            "locations" => json_encode($locations)
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
    /** STYLES **/
    wp_register_style('novapioneer_styles', get_template_directory_uri() . '/assets/css/main.min.css', '1.0.0', 'all');
    wp_enqueue_style('novapioneer_styles');

    /** SCRIPTS **/
    wp_register_script('novapioneer_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.0.0', true);
    wp_enqueue_script('novapioneer_scripts');
}

add_action('wp_enqueue_scripts', 'novap_enqueue_assets');


function novap_upcoming_events_navigation_calendar()
{
    get_template_part('includes/partials/content', 'upcoming-events-nav');
}


function novap_ga_tracking_id()
{
    return get_option('novap_ga_id');
}

function novap_get_gallery_images($current_gallery)
{
    switch ($current_gallery):

        case 'school_grounds':
            $images = get_field('school_grounds_pictures');
            break;
        case 'classrooms':
            $images = get_field('classroom_pictures');
            break;
        case 'library':
            $images = get_field('library_pictures');
            break;
        case 'play_area':
            $images = get_field('play_area_pictures');
            break;
        default:
            $images = get_field('school_grounds_pictures');
            break;

    endswitch;

    return $images;
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
            $html .= '    <h2>'.tribe_get_start_date().'</h2>';
            $html .= '      <p>' . $event_address . '</p>';
            $html .= '   <a href="#" class="modal-toggle button button-tiny button-secondary button-send-rsvp" data-event-name="'. get_the_title() .'" data-event-organisers="'.implode(', ', $organizers).'" data-event-date="'.tribe_get_start_date().'" data-event-location="'.$event_address.'" data-event-id="'. get_the_ID() .'">Send an RSVP</a>';
            $html .= ' </div>';
        }
        wp_reset_postdata();
    }

    return $html;
}