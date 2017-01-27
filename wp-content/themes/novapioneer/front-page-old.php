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

<section class="section section-pair">
    <div class="country-select-container kenya">

        <div class="country-select">

            <div class="country-flag">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kenya-flag-square.png" >
            </div>

            <div class="country-description">
                <h3 class="country-name">Kenya</h3> 
                <?php echo get_field('kenya_description'); ?>
                <a href="<?php echo site_url('/kenya'); ?>" class="button button-default button-secondary" title="">Learn More</a>
            </div>

            <div class="country-image">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/country-image-ke.jpg" alt=""> -->
            </div>

        </div>
    
    </div>
</section>

<section class="section section-pair">
    <div class="country-select-container south-africa">

        <div class="country-select">

            <div class="country-flag">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sa-flag-square.png" >
            </div>

            <div class="country-description">
                <h3 class="country-name">South Africa</h3> 
                <?php echo get_field('south_africa_description'); ?>
                <a href="<?php echo site_url('/sa'); ?>" class="button button-default button-secondary" title="">Learn More</a>
            </div>

            <div class="country-image">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/country-image-sa.jpg" alt=""> -->
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