<?php
/**
 * 404 Page
 */

 get_header();?>

<h1>Sorry, we could not find the page you are looking for!</h1> 

<?php get_search_form(); ?>

<p>
    <a href="<?php echo home_url(); ?>">Back to homepage</a>
</p>

 <?php get_footer();?>
