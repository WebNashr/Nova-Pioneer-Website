<?php
/**
 * 404 Page
 */

 get_header();?>

<section class="section section-404 trigger-offset">
    <header class="header-404">
        <h1>Page not found</h1>
        <p>Try searching our site, or going back to <a href="<?php echo home_url(); ?>" style="">our home page</a>.</p>
    </header>

    <?php get_search_form(); ?>
</section>

 <?php get_footer();?>
