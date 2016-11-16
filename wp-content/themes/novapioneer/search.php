<?php
/**
 * Search results page.
 */

 get_header();?>

<?php get_search_form(); ?>

<div>
    Search for: <?php echo get_search_query(); ?>
</div>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>


    <article class="search-result">
        <header>
            <h1> <?php echo get_the_title(); ?> </h1>
        </header>
        <section>
            <?php echo get_the_excerpt(); ?>
        </section>
    </article>



    <?php endwhile; ?>

    <?php if ( function_exists('novap_base_pagination') ): novap_base_pagination(); elseif ( is_paged() ): ?>
        <div class="navigation clearfix">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <article>
        <header>
            <h1>Sorry, we could not find what you're looking for.</h1>
        </header>
        <section>
            <div>
                <a href="<?php echo home_url(); ?>">Back to homepage</a>
            </div>
        </section>
    </article>

<?php endif; ?>

 <?php get_footer();?>
