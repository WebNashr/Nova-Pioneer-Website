<?php
/**
 * Front page
 */

 get_header();?>

<section class="section section-hero">
    <div class="container hero-container">
        <div class="main-callout-box">
            <hr>
            <h1><?php echo get_field('callout_box'); ?></h1>
        </div>
    </div>
</section>

<div class="trigger"></div>

<section class="section section-articles">
    <div class="country-select-container">
    <div class="country-select">
        <h1 class="country-image"><img src="<?php echo get_template_directory_uri(); ?>/img/country-image-sa.jpg" alt=""></h1>
        <div class="country-button">
            <a href="<?php echo site_url('/sa'); ?>" class="south-africa-flag" title="">South Africa</a>
        </div>
        <div class="country-description">
            <?php echo get_field('south_africa_description'); ?>
        </div>
    </div>
    <div class="country-select">
        <h1 class="country-image"><img src="<?php echo get_template_directory_uri(); ?>/img/country-image-ke.jpg" alt=""></h1>
        <a href="<?php echo site_url('/kenya'); ?>" class="country-button kenya-flag" title="">Kenya</a>
        <div class="country-description">
            <?php echo get_field('kenya_description'); ?>
        </div>
    </div>
    </div>

</section>

 <?php if(have_posts()): ?>

    <?php $testimonial = get_field('testimonial'); ?>

    <?php if( !is_null($testimonial) && !empty($testimonial) ): ?>

            <aside>
                <div class="testimonial full-width-quote home-page-quote">
                    <div class="spacing-to-center"></div>
                    <figure class="full-width-figure">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $testimonial->ID ), 'single-post-thumbnail' )[0]; ?>" alt="" class="">
                    </figure>
                    <blockquote>
                        <svg aria-hidden="true">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                        </svg>
                        <?php echo $testimonial->post_content; ?>
                        <cite> <span><?php echo get_field('reviewer_name', $testimonial->ID); ?>,</span> <?php echo get_field('reviewer_title', $testimonial->ID); ?> </cite>
                    </blockquote>
                    <div class="spacing-to-center"></div>
                </div>
            </aside>

    <?php endif; ?>

 <?php endif; ?>

 </main>

  <?php get_footer(); ?>