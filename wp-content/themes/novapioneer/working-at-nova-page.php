<?php 
/**
* Template Name: Working At Nova Pioneer
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>



        <section class="section section-hero working-at-np">
            <div class="container hero-container">

                <div class="main-callout-box">
                    <hr>
                    <h1>Working at Nova Pioneer</h1>
                    <p>Building the future of African talent and global education</p>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-body general-content general-content-first">
                <h1>Why work at NovaPioneer? </h1>
                <?php echo get_field('why_work_at_novap'); ?>
            </article>
        </section>

        <figure class="full-width-image" style="background-image: url(<?php echo get_field('banner_image'); ?>);">
            <div class="section-content full-image-caption">
                <figcaption>
                    <?php echo get_field('banner_text'); ?>
                    <a href="<?php echo site_url('/careers'); ?>" >Learn More</a>
                </figcaption>
            </div>
        </figure>

        <section class="section">
            <article class="article article-body general-content">
                <h1>Education Pathways</h1>
                <?php echo get_field('education_pathways'); ?>
            </article> 
        </section>



    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php get_footer(); ?>
