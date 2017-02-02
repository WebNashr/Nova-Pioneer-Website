<?php
/**
 * Front page
 */

 get_header();?>

<section class="section section-hero homepage">
    <div class="container hero-container">
        <div class="main-callout-box home-page-callout">
            <hr>
            <h1><?php echo get_field('callout_box'); ?></h1>
            <div class="country-selection">
            <a href="<?php echo site_url('/kenya'); ?>" class="button button-large button-primary" title="">Kenya</a>
            <a href="<?php echo site_url('/sa'); ?>" class="button button-large button-primary" title="">South Africa</a>
          </div>
        </div>

    </div>

</section>


<?php get_footer(); ?>
