<?php
/**
 * Search results page.
 */

 get_header();?>

<section class="search-container trigger-offset">
    <?php get_search_form(); ?>
</section>

<section class="section section-articles result-body">
    <header>
        <h2>Your Search Results for "<?php echo get_search_query(); ?>"</h2>
        <p><?php global $wp_query; echo $wp_query->found_posts; ?> results found.</p>
    </header>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>


    <article class="article result">
        <div class="article-container">
            <div class="article-body">
                <header>
                    <h4>
                        <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                    </h4>
                </header>
               <?php the_excerpt(); ?>
            </div>
        </div>
    </article>



    <?php endwhile; ?>

    <?php if ( function_exists('novap_base_pagination') ): novap_base_pagination(); elseif ( is_paged() ): ?>
        <footer class="page-pagination">
            <nav role="navigation">
                <a class="button button-default button-primary button-pagination"><?php next_posts_link('&lt;') ?></a>
                <a class="button button-default button-primary button-pagination"><?php previous_posts_link('&gt;') ?></a>           
            </nav>
        </footer>
    <?php endif; ?>
<?php else: ?>

    <p>Try searching again, or back to <a href="<?php echo home_url(); ?>" style="">our home page</a>.</p>

<?php endif; ?>
</section>

<?php get_footer();?>
