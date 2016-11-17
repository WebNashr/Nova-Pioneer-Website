<?php

/**
*
* Template Name: School Gallery Template
*
*/

get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <?php get_template_part('includes/partials/content', 'gallery'); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>