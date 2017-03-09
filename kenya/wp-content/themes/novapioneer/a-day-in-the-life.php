<?php
/**
 * Template Name: A Day in the Life
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

            <section class="section trigger-offset">
              <!-- <article class="article article-container"> -->
                <article class="article">
                    <div class="article-body timeline-container">
                        <header class="article-header timeline-header">
                            <h1><?php the_title() ?></h1>
                        </header>


                        <!-- Timeline begin here -->
                        <div id="timeline">
                            <?php $i = 0;
                            $query = new WP_Query(array('post_type' => 'a_day_in_the_life',
                            'order' => 'ASC',
                                'posts_per_page' => -1));
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    if (isEven($i)):?>
                                        <div class="timeline-item">
                                            <div class="timeline-icon">
                                            </div>
                                            <div class="timeline-content">
                                                <h2><?php the_title() ?></h2>
                                                <img class="" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                <p>
                                                    <?php the_content(); ?>
                                                </p>

                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="timeline-item">
                                            <div class="timeline-icon">

                                            </div>
                                            <div class="timeline-content right">
                                                <h2><?php the_title() ?></h2>
                                                <img class="" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                <p>
                                                    <?php the_content(); ?>
                                                </p>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php $i++;endwhile;
                                wp_reset_postdata(); endif; ?>


                        </div>
                        <!-- Timeline ends here -->

                    </div>

                </article>

            </section>


    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>

<?php get_footer(); ?>
