<?php
/**
 * Template Name: Meet The Students
 */

get_header(); ?>

<style>
    /*img.ajax-loader{
        max-height: 16px;
        max-width: 16px;
    }*/
</style>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

            <section class="section section-hero corporate-hero">
                <div class="container hero-container">
                    <div class="main-callout-box">
                        <hr>
                        <h1><?php  the_title()?></h1>
                        <p><?php the_content()?></p>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="page-navigation-container">
                    <div class="navigation-wrap">
                        <div class="section-title">
                            <h3>Our Students</h3>
                        </div>
                        <div class="links-inner-wrap"
                        <div class="section-content-item">
                            <div class="anchor-link">
                                <a href="#junior" class="" title="">Junior Students</a>
                            </div>
                            <div class="link-separator">&nbsp;</div>
                            <div class="anchor-link">
                                <a href="#senior" class="" title="">Senior Students</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>


            <span class="anchor-link" id="junior"></span>


            <section class="section section-pair">
                <div class="section-navigation">
                    <h2>Junior Students</h2>
                </div>

                <div class="section-content">
                    <?php
                    if( have_rows('juniors') ):  while ( have_rows('juniors') ) : the_row();?>
                    <div class="the-students">

                        <div class="section-content-item section-content-item-half">
                            <h3><?php  the_sub_field('student_name');?></h3>
                            <h4 class="grade"><?php  the_sub_field('student_grade');?></h4>
                            <div class="testimonial pull-quote">
                                <blockquote>
                                    <svg aria-hidden="true">
                                        <use xlink:href="img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>
                                    <p><?php  the_sub_field('remarks');?>
                                        <cite><span><?php  the_sub_field('student_name');?>,</span> Nova Pioneer Student</cite></p>
                                </blockquote>
                            </div>
                        </div>


                        <div class="section-content-item section-content-item-half">
                            <div class="media youtube-video">
                                <iframe width="347" height="194" src="<?php  the_sub_field('video_link');?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <?php   endwhile;  endif;?>
                </div>
            </section>


            <span class="anchor-link" id="senior"></span>


            <section class="section section-pair even-section">
                <div class="section-navigation">
                    <h2>Senior Students</h2>
                </div>

                <div class="section-content">
                    <?php
                    if( have_rows('seniors') ):  while ( have_rows('seniors') ) : the_row();?>
                        <div class="the-students">

                            <div class="section-content-item section-content-item-half">
                                <h3><?php  the_sub_field('student_name');?></h3>
                                <h4 class="grade"><?php  the_sub_field('student_grade');?></h4>
                                <div class="testimonial pull-quote">
                                    <blockquote>
                                        <svg aria-hidden="true">
                                            <use xlink:href="img/quote-mark-icon.svg#quote-mark"></use>
                                        </svg>
                                        <p><?php  the_sub_field('remarks');?>
                                            <cite><span><?php  the_sub_field('student_name');?>,</span> Nova Pioneer Student</cite></p>
                                    </blockquote>
                                </div>
                            </div>


                            <div class="section-content-item section-content-item-half">
                                <div class="media youtube-video">
                                    <iframe width="347" height="194" src="<?php  the_sub_field('video_link');?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <?php   endwhile;  endif;?>

                </div>
            </section>


            <section class="section section-pair">
                <div class="section-navigation">
                    <h2>Contact a Student</h2>
                </div>

                <div class="section-content the-students ">
                    <div class="section-content-item section-content-item-quarter">
                        <p><?php the_field('contact_text')?></p>
                    </div>

                    <div class="section-content-item section-content-item-full">
                        <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
                    </div>
                </div>
            </section>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>

<?php get_footer(); ?>
