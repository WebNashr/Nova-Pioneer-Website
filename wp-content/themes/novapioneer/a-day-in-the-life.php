<?php
/**
 * Template Name: A Day in the Life
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>
        <!-- start content -->
        <main role="main">
            <!-- <section class="section section-hero about-np">
                <div class="container hero-container">
                    <heading class="hero-heading">
                        <h1>Developing innovators &amp; leaders who will shape the future</h1>
                    </heading>
                    <div class="main-callout-box">
                        <h2>About  Nova Pioneer</h2>
                        <p>We started Nova Pioneer to equip as many of those youth as we can to realise their great dream</p>
                    </div>
                </div>
            </section> -->


            <section class="section trigger-offset">
                <article class="article article-container">
                    <div class="article-body timeline-container">
                        <header class="article-header">
                            <h1><?php the_title() ?></h1>
                        </header>


                        <!-- Timeline begin here -->
                        <div id="timeline">
                            <?php $i = 0; $query = new WP_Query(array('post_type' => 'a_day_in_the_life'));
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    if (isEven($i)):?>
                                        <div class="timeline-item">
                                            <div class="timeline-icon">
                                            </div>
                                            <div class="timeline-content">
                                                <h2><?php the_title()?></h2>
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
                                                <h2><?php the_title()?></h2>
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


            <section class="section section-pair section-subscribe">
                <div class="section-navigation">
                    <h1>Stay Updated</h1>
                </div>

                <div class="section-content">
                    <div class="section-content-item section-content-item-full">
                        <header>
                            <p>Enter your email address below and receive the latest Nova Pioneer news, upcoming events
                                and admission opportunities.</p>
                        </header>

                        <?php echo do_shortcode('[contact-form-7 id="654" title="Stay Updated" html_class="sign-up"]'); ?>
                    </div>
                </div>
            </section>
        </main>
        <!-- end content -->


    <?php endwhile; endif; ?>

<?php get_footer(); ?>
