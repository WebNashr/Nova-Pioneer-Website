<?php
/**
* Template Name: Apply Online
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <section class="section trigger-offset">
            <article class="article article-body general-content student-application">
                <!-- <h1 class="page-title">Nova Pioneer Application</h1> -->
                <?php the_content(); ?>

                <!-- <p>
                    <a href="<?php echo site_url('/admission-process/'); ?>" class="button button-small button-primary">See our Admissions Process</a>
                </p> -->
            </article>
        </section>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>

<?php get_footer(); ?>
