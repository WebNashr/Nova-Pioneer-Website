<?php
/**
 * Single Press Template
 */
get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <section class="section trigger-offset">
            <article class="article">
                <header class="article-header">
                    <h1><?php the_title(); ?></h1>
                </header>

                <div class="article-container">
                    <aside class="article-aside">
                        <div class="article-meta">
                            <p class="article-meta-title">Posted</p>
                            <small><?php echo get_the_date('jS M Y'); ?></small>
                            <small>Updated <?php echo get_the_modified_date('jS M Y'); ?></small>
                        </div>

                        <div class="article-meta">
                            <?php $categories = get_the_category(); ?>
                            <p class="article-meta-title">Posted in</p>
                            <?php foreach($categories as $category): ?>
                            <small>
                                <a href="<?php echo get_category_link( $category->cat_ID ); ?>" title=""><?php echo $category->name; ?></a>
                            </small>
                            <?php endforeach; ?>
                        </div>
                    </aside>

                    <div class="article-inner">
                        <!-- <div class="article-excerpt"> <?php the_excerpt(); ?> </div> -->
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

 <?php get_footer(); ?>