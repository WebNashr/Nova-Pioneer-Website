<?php

if( !defined('NOVAP_THEME_PATH') )
{
    define('NOVAP_THEME_PATH', get_template_directory() . '/');
}

require_once NOVAP_THEME_PATH . 'vendor/autoload.php';
use NovaPioneer\View;
use NovaPioneer\Mailer;


function novap_setup(){

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
      'image', 'video'
  ));


} // novap_setup
add_action('after_setup_theme', 'novap_setup');


// Replaces the excerpt "Read More" text by a link
function novap_excerpt_more($more) {
       global $post;
	return '<a class="readmore" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'novap_excerpt_more');



/**
 * Pagination for archive, taxonomy, category, tag and search results pages
 *
 * @global $wp_query http://codex.wordpress.org/Class_Reference/WP_Query
 * @return Prints the HTML for the pagination if a template is $paged
 */
function novap_base_pagination($query) {
    global $wp_query;
    $query = !empty($query) ? $query : $wp_query;

    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages,
        'mid_size' => 5,
        'type' => 'array'

    ) );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo '<div class="page-pagination"><nav role="navigation">';
        echo $paginate_links;
        echo '</nav></div><!--// end .pagination -->';
    }
}


function novap_setup_assets() {

}
add_action('wp_enqueue_scripts', 'novap_setup_assets');


function novap_body_class($classes) {
  $additional_classes = [];

  if(is_front_page()){
    $additional_classes[] = 'page-home';
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
    $user_mailer  = new Mailer();

    // Send user autorespond email first
    $user_subject = "Thank you for your RSVP!";
    $autoresponder_sent = $user_mailer->sendMail($user_subject, $user_email_view->render([
        "title" => $user_subject,
        "rsvp_name" => $rsvp->name,
        "rsvp_email" => $rsvp->email,
        "rsvp_attendance" => $rsvp->attendance,
        "event_name" => $post->post_title,
        "event_date" => $event_date
    ],false), [$rsvp->email => $rsvp->name]);

    // Then send notification to admin
    $admin_subject = "RSVP from " . $rsvp->name . "<" . $rsvp->email . ">";
    $admin_notification_sent = $admin_mailer->sendMail($admin_subject, $admin_email_view->render([
        "title" => $admin_subject,
        "rsvp_name" => $rsvp->name,
        "rsvp_email" => $rsvp->email,
        "rsvp_attendance" => $rsvp->attendance,
        "event_name" => $post->post_title,
        "event_date" => $event_date
    ],false), ["schambach@circle.co.ke" => "Schambach", "maria@circle.co.ke" => "Maria"]);

}


function novap_add_event_rsvp($data){
    global $post;
    $data = (object)$data;

    if(isset($data->rsvp_name) && isset($data->rsvp_email) && isset($data->rsvp_attendance))
    {
        $rsvp = array(
            'name' => sanitize_text_field($data->rsvp_name),
            'email' => sanitize_email($data->rsvp_email),
            'attendance' => sanitize_text_field($data->rsvp_attendance)
        );

        $_event_rsvp =  add_post_meta($post->ID, '_event_rsvp', $rsvp);

        if($_event_rsvp):
            // notify rsvp of receipt by email and notify novapioneer admins of rsvp via email
            novap_notify_on_rsvp($rsvp, $post);
        endif;
    }

    return false;
    
}

function novap_render_rsvp_metabox($post)
{

    $rsvps = get_post_meta($post->ID, '_event_rsvp');

    if(!empty($rsvps)):
    ?>

        <table class="widefat fixed striped" cellspacing="0">
            <thead>
                <tr>
                    <th class="manage-column column-name" scope="col" ><strong>Name</strong></th>
                    <th class="manage-column column-email" scope="col" ><strong>Email</strong></th>
                    <th class="manage-column column-attendance" scope="col" ><strong>Attendance</strong></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rsvps as $rsvp): $rsvp = (object)$rsvp; ?>
                <tr> 
                    <td class="format-standard level-0">
                        <?php echo $rsvp->name; ?>
                        <div class="row-actions">
                            <span class="trash">
                            <?php $delete_nonce = wp_create_nonce( 'novap_delete_rsvp' ); ?>
                            <?php $the_rsvp = urlencode(json_encode($rsvp)); ?>
                            <a href="<?php echo get_admin_url(null, sprintf('/post.php?post=%s&action=edit&rsvp=%s&_wpnonce=%s', $post->ID, $the_rsvp, $delete_nonce)); ?>" 
                               aria-label="Edit “<?php echo $rsvp->name; ?>”" 
                               class="submitdelete">Delete</a>
                            </span>
                        </div>
                    </td>
                    <td class="format-standard level-0"><?php echo $rsvp->email; ?></td>
                    <td class="format-standard level-0"><?php echo ucfirst($rsvp->attendance); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <br class="clear">

    <?php

    else:
        echo _e("There are no RSVP's yet for this event.", "novap");
    endif;
    
}


function novap_add_meta_boxes()
{
    add_meta_box('novap-events-rsvps', 'RSVP\'s', 'novap_render_rsvp_metabox', 'events', 'normal', 'high');
}
add_action('add_meta_boxes', 'novap_add_meta_boxes');


function novap_delete_rsvp_from_event()
{
    if(is_admin()):

        if(get_current_screen()->id === "events"):


            if( isset($_REQUEST['post']) && isset($_REQUEST['rsvp']) && isset($_REQUEST['_wpnonce']) ):

                $post_id = intval( $_REQUEST['post'] );

                $nonce = esc_attr($_REQUEST['_wpnonce']);

                $rsvp = (array)json_decode(
                    stripslashes(
                        urldecode($_REQUEST['rsvp'])
                    ) 
                );

                if( wp_verify_nonce( $nonce, 'novap_delete_rsvp' ) ):
                    // delete the rsvp
                    delete_post_meta($post_id, '_event_rsvp', $rsvp);
                endif;
                
            endif;


        endif;
        
    endif;
}
add_action('load-post.php', 'novap_delete_rsvp_from_event');