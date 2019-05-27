<?php
/**
 * Search results page.
 */

get_header(); ?>

<div class="updates-2019">

    <section class="section section-404 trigger-offset">
        <?php get_search_form(); ?>
    </section>

    <section class="section search-results">
        <header class="search-header">
            <h2>Your Search Results for <span>"<?php echo get_search_query(); ?>"</span></h2>
            <p><?php global $wp_query; echo $wp_query->found_posts; ?> results found.</p>
        </header>

        <?php $i = 1; ?>
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="search-result">
                    <div class="search-text">
                        <h3 class="result-title">
                    <span class="search-number"><?php
                        echo paginateSearchResults($i)
                        ?> </span>
                            <?php echo get_the_title(); ?>
                        </h3>
                        <?php //the_excerpt(); ?>
                        <p class="result-excerpt">We will contact qualified applicants regarding next steps. We have a
                            limited places in our first class and we will further assess applicants to determine if they
                            meet the criteria for those places. We currently only accept applications for scholars entering
                            Form 1 in 2017. <span class="result-more">&rarr;</span></p>
                        <small class="result-url"><?php echo get_permalink(); ?></small>
                        <small class="result-date">Last updated: <?php echo get_the_modified_date('jS M Y'); ?></small>
                    </div>
                </a>

                <?php $i++; endwhile; ?>

                <?php if (function_exists('novap_base_pagination')): novap_base_pagination();
                elseif (is_paged()): ?>
                    <footer class="page-pagination">
                        <nav role="navigation" class="pagination">
                            <a class="button button-default button-primary button-pagination"><?php next_posts_link('Prev') ?></a>
                            <a class="button button-default button-primary button-pagination"><?php previous_posts_link('Next') ?></a>
                        </nav>
                    </footer>
                <?php endif; ?>
            <?php else: ?>

            <div class="no-results">
                <p>Try a different search term, or use the menu above to find the most relevant section.</p>
                <br>
                
                <a class="button button-default button-raspberry" href="<?php echo home_url(); ?>">home page</a>
            </div>

        <?php endif; ?>
    </section>

</div>

<?php get_footer(); ?>
