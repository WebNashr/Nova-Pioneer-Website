
<section class="section section-newsletter" style="background-image: url('<?php echo novap_get_baseurl(); ?>img/logo/logo-mark-white.svg');">
    <header class="section-newsletter-heading">
        <h2><?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=newsletter-heading]'); ?></h2>
        
        <p><?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=newsletter-description]'); ?></p>

        <figure>
            <img src="<?php echo novap_get_baseurl(); ?>img/newsletter-square.jpg" alt="">
            <?php //if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=newsletter-image]'); ?>
            <figcaption></figcaption>
        </figure>
    </header>

    <div class="section-newsletter-form">
        <?php echo do_shortcode('[gravityform id="10" title="false" description="false" tabindex="50"]'); ?>
    </div>
</section>
