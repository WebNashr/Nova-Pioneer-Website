<?php
/**
* Template Name: Apply Online
*/

get_header();?>

<!--<style type="text/css" media="all">
    /* Temporary fix for gravity forms not displaying */
    .gf_browser_chrome, .gform_wrapper{
        display:block !important;
    }
</style>-->
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

    
<?php endif; ?>

<?php get_footer(); ?>
