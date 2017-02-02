<?php
/**
* Template Name: Careers Page
*/

get_header();?>


<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section trigger-offset">
            <header class="article-header">
                <h1 class="nav-bar-below">Careers</h1>
            </header>

            <div class="page-navigation-container">
              <div class="navigation-wrap">
                <div class="section-title"><h3>Departments</h3></div>
                  <div class="links-inner-wrap" <div="">
                          <div class="anchor-link">
                            <a href="#operations" class="" title="">Operations</a>
                          </div>
                          <div class="link-separator">&nbsp;</div>
                          <div class="anchor-link">
                              <a href="#learning" class="" title="">Learning</a>
                          </div>
                          <div class="link-separator">&nbsp;</div>
                          <div class="anchor-link">
                               <a href="#talent-and-partnerships" class="" title="">Talent &amp; Partnerships</a>
                          </div>
                    </div>
                  </div>
              </div>

            <?php
                $career_categories =  array(
                    'operations'              => 'Operations',
                    'learning'                => 'Learning',
                    'talent-and-partnerships' => 'Talent and Partnerships',
                    'marketing'               => 'Marketing'
                );
            ?>

            <?php foreach($career_categories as $cc_slug => $cc_title): ?>
            <?php $careers = new WP_Query(array(
                "post_type" => "careers",
                "orderby" => "menu_order",
                "order" => "ASC",
                "tax_query" => array(
                    array(
                        'taxonomy' => 'career_category',
                        'field'    => 'slug',
                        'terms'    => $cc_slug,
                    ),
                ),
                "posts_per_page" => -1,
            )); ?>
s
            <?php if( $careers->have_posts() ): ?>
            <section class="section section-inner">
                <div class="article-container">
                    <aside class="article-aside">
                        <div class="article-meta">
                            <h2 id="<?php echo  $cc_slug ?>"><?php echo $cc_title; ?></h2>
                        </div>
                    </aside>

                    <div class="article-inner">
                        <!-- <hr class="article-mark"> -->
                        <?php while( $careers->have_posts() ): $careers->the_post(); ?>
                        <article class="job-details-container ">
                            <div class="job-details">
                                <header class="job-details-header">
                                    <h3>
                                        <a href="<?php echo get_permalink(); ?>" class="" title=""><?php the_title(); ?></a>
                                    </h3>
                                    <h6 class="job-location"><?php echo get_field('job_location'); ?></h6>
                                    <!-- <h6 class="job-type">Job Type: <span><?php echo get_field('job_type'); ?></span></h6> -->
                                    <h6 class="job-experience">Experience: <span><?php echo get_field('experience'); ?></span></h6>
                                    <h6 class="job-deadline">Application Deadline: <span><?php echo get_field('application_deadline'); ?></span></h6>
                                </header>

                                <?php echo get_field('description'); ?>

                                <p class="call-to-action">
                                    <a href="<?php echo get_permalink(); ?>" class="button button-tiny button-primary" target="_blank">View Job Details</a>
                                </p>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php endforeach; ?>
        </section>
        <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
