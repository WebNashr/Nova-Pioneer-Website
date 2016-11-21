<?php 
/**
* Template Name: Apply Online
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();
        $application_form = get_field('application_form');
    ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <section>
                <?php the_content(); ?>
            </section>
            <?php if(!empty($application_form)): ?>
                <section>
                    <?php echo do_shortcode($application_form); ?>
                </section>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
