<?php
/** 
* Template Name: Tribe Events Template
*/
get_header();
?>

<?php if( have_posts() ): ?>


    <?php if( is_single() ): /* If single then we're looking at a single event */ ?>

        <?php get_template_part('includes/partials/content', 'single-event'); ?>

    <?php else: /* Not single so we're looking at the calendar page */?>

        <?php get_template_part('includes/partials/content', 'calendar'); ?>
    <?php endif; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    
<?php endif; ?>


<?php get_footer(); ?>