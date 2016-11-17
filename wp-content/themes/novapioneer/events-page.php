<?php

/**
* Template Name: Events Page
*/

get_header();?>

<?php $events_query = new WP_Query(array(
    "post_type" => "events",
)); ?>

<?php if( $events_query->have_posts() ): ?>

    <?php while( $events_query->have_posts() ): $events_query->the_post(); ?>

        <article>
            <header>
                <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
                <?php echo get_field('date'); ?>
            </header>
            
        </article>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>
