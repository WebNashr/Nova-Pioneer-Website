<?php
/**
 * Front page
 */

 get_header();?>

<section class="section section-hero">
    <div class="container hero-container">
        <div class="main-callout-box">
            <hr>
            <h1>Preparing Youth in Africa for Global Success</h1>
        </div>
    </div>
</section>

<div class="trigger"></div>

<section class="section section-articles">
    <div class="country-select-container">
    <div class="country-select">
        <h1 class="country-image"><img src="<?php echo get_template_directory_uri(); ?>/img/country-image-sa.jpg" alt=""></h1>
        <div class="country-button">
            <a href="country-home.html" class="south-africa-flag" title="">South Africa</a>
        </div>
        <div class="country-description">
            <p>We have three schools in South Africa. Nova Pioneer Ormonde, Nova Pioneer Midrand and Nova Pioneer Jackal Creek, Johannesburg.</p>
        </div>
    </div>
    <div class="country-select">
        <h1 class="country-image"><img src="<?php echo get_template_directory_uri(); ?>/img/country-image-ke.jpg" alt=""></h1>
        <a href="#" class="country-button kenya-flag" title="">Kenya</a>
        <div class="country-description">
            <p>We have one school in Kenya. Nova Pioneer Ondiri, with a girl's high school being launched this year in Tatu City, Kiambu.</p>
        </div>
    </div>
    </div>

</section>

 <?php if(have_posts()): ?>

    <?php $testimonials = get_field('testimonials'); ?>

    <?php if( !is_null($testimonials) && !empty($testimonials) ): ?>

        <?php foreach ($testimonials as $testimonial): ?>

            <aside>
                <div class="testimonial full-width-quote home-page-quote">
                    <div class="spacing-to-center"></div>
                    <figure class="full-width-figure">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/parent-profile-pic.jpg" alt="" class="">
                    </figure>
                    <blockquote>
                        <svg aria-hidden="true">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                        </svg>
                        <?php echo $testimonial->post_content; ?>
                        <cite><?php echo $testimonial->post_title; ?> </cite>
                    </blockquote>
                    <div class="spacing-to-center"></div>
                </div>
            </aside>

        <?php endforeach; ?>

    <?php endif; ?>

 <?php endif; ?>

 </main>

  <?php get_footer(); ?>