<?php

/**
* Template Name: Press Page
*/

get_header();?>

<?php $events_query = new WP_Query(array(
    "post_type" => "press",
)); ?>

<?php if( $events_query->have_posts() ): ?>

    <?php while( $events_query->have_posts() ): $events_query->the_post(); ?>

        <article>
            <header>
                <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
            </header>
            <?php echo get_the_excerpt(); ?>
        </article>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>
