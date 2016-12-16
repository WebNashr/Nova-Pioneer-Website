<?php

/**
* Template Name: Events Page
*/

get_header();?>

<?php $events_query = new WP_Query(array(
    "post_type" => "events",
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1
)); ?>

<section class="section section-hero events-hero">
    <div class="container hero-container">
        <div class="main-callout-box">
            <hr>
            <h1>Events</h1>
            <p>Upcoming Nova Pioneer School Events</p>
        </div>
    </div>
</section>


<section class="section section-pair">
    <!-- Upcoming Events Navigation -->
    <?php novap_upcoming_events_navigation_calendar(); ?>
    <!-- End Upcoming Events -->

    <div class="section-content">
        <div class="section-content-item">


            <?php if( $events_query->have_posts() ): ?>

                <?php while( $events_query->have_posts() ): $events_query->the_post(); ?>


                    <div class="event-summary-container">

                        <div class="event-thumbnail-image">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0]; ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </div>

                        <div class="event-summary">
                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <h4 class="date"><?php echo get_field('date'); ?></h4>
                            <h5 class="time"><?php echo get_field('time'); ?></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink(); ?>" class="view-details">View event details </a>
                            </p>
                        </div>

                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>


        </div><!-- end section-content-item -->
    </div> <!-- end section-content -->
</section>

<?php get_template_part('includes/partials/content', 'stay-updated'); ?>


<?php get_footer(); ?>
