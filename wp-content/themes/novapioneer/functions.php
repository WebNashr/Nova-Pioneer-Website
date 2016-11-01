<?php

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
