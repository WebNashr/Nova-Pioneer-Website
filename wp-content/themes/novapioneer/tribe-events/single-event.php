<?php
    /**
    * Single Event Template
    * A single event. This displays the event title, description, meta, and
    * optionally, the Google map for the event.
    *
    * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
    *
    * @package TribeEventsCalendar
    * @version  4.3
    *
    */

    if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
    }

    $events_label_singular = tribe_get_event_label_singular();
    $events_label_plural = tribe_get_event_label_plural();

    $event_id = get_the_ID();
?>


<article class="article">
    <header class="article-header">
        <?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>
    </header>

    <div class="article-container">
        <aside class="article-aside">
            <h2>Event Details cvx</h2>

            <div class="article-meta">
                <a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
            </div>
        </aside>

        <div class="article-inner">
        <?php while ( have_posts() ) :  the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <figure class="event-thumbnail-image">
                    <!-- Event featured image, but exclude link -->
                    <?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
                </figure> 

                <!-- Event content -->
                <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
                <div class="tribe-events-single-event-description tribe-events-content">
                    <?php the_content(); ?>
                </div>
                <!-- .tribe-events-single-event-description -->
                <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

                <!-- Event meta -->
                <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
                <?php tribe_get_template_part( 'modules/meta' ); ?>
                <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
            </div> <!-- #post-x -->
            <?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
        <?php endwhile; ?>
        </div>
    </div>
</article>
