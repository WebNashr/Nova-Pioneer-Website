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

        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                </div>
            </div>
        </section>
        <div class="trigger"></div>

        <section class="section">
            <div class="page-navigation-container meet-students-nav">
                <div class="navigation-wrap">
                    <div class="section-title">
                        <h3>Our Students</h3>
                    </div>
                    <div class="links-inner-wrap">
                    <div class="section-content-item">
                        <div class="anchor-link">
                            <a href="#primary-sa" class="" title="">Primary Students</a>
                        </div>
                    </div>
                    <div class="section-content-item">
                        <div class="anchor-link">
                            <a href="#secondary-sa" class="" title="">Secondary Students</a>
                        </div>
                    </div>
                    <div class="section-content-item">
                        <div class="anchor-link">
                            <a href="#contact-student" class="" title="">Contact a Student</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>


        <span class="anchor-link" id="primary"></span>


        <section class="section section-pair">
            <div class="section-navigation">
                <h2 id="primary-sa">Primary Students</h2>
            </div>

            <div class="section-content">
                <?php
                if (have_rows('juniors')): while (have_rows('juniors')) : the_row(); ?>
                    <div class="the-students">

                        <div class="section-content-item section-content-item-half first-item">
                            <h3><?php the_sub_field('student_name'); ?></h3>
                            <h4 class="grade"><?php the_sub_field('student_grade'); ?></h4>
                            <div class="testimonial pull-quote">
                                <blockquote>
                                    <svg aria-hidden="true">
                                        <use
                                            xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>
                                    <?php the_sub_field('remarks'); ?>
                                    <cite><span><?php the_sub_field('student_name'); ?>,</span> Nova Pioneer
                                        Student</cite>
                                </blockquote>
                            </div>
                        </div>


                        <div class="section-content-item section-content-item-half">
                            <div class="media youtube-video">
                                <?php if (get_sub_field('video_or_image') == 'image') : ?>

                                    <img src="<?php the_sub_field('image') ?>"/>
                                <?php else : ?>
                                    <iframe width="347" height="194" src="<?php the_sub_field('video_link'); ?>"
                                            frameborder="0" allowfullscreen></iframe>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>


        <section class="full-width-image-container" data-enllax-type="foreground">
            <figure
                class="full-width-image secondary-bgd-image <?php echo isOnMobile()->parallax ?>" <?php if (get_field('parallax_image')): echo 'style="background-image: url(' . get_field('parallax_image') . ');"'; endif; ?>
                data-enllax-ratio="<?php echo isOnMobile()->ratio ?>">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php the_field('parallax_text') ?></p>
                    </figcaption>
                </div>
                <span class="anchor-link" id="preprimary"></span>
            </figure>
        </section>


        <span class="anchor-link"></span>


        <section class="section section-pair">
            <div class="section-navigation">
                <h2 id="secondary-sa">Secondary Students</h2>
            </div>

            <div class="section-content">
                <?php
                if (have_rows('seniors')): while (have_rows('seniors')) : the_row(); ?>
                    <div class="the-students">

                        <div class="section-content-item section-content-item-half first-item">
                            <h3><?php the_sub_field('student_name'); ?></h3>
                            <h4 class="grade"><?php the_sub_field('student_grade'); ?></h4>
                            <div class="testimonial pull-quote">
                                <blockquote>
                                    <svg aria-hidden="true">
                                        <use
                                            xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>
                                    <?php the_sub_field('remarks'); ?>
                                    <cite><span><?php the_sub_field('student_name'); ?>,</span> Nova Pioneer
                                        Student</cite>
                                </blockquote>
                            </div>
                        </div>


                        <div class="section-content-item section-content-item-half">
                            <div class="media youtube-video">
                                <?php if (get_sub_field('video_or_image') == 'image') : ?>

                                    <img src="<?php the_sub_field('image') ?>"/>
                                <?php else : ?>
                                    <iframe width="347" height="194" src="<?php the_sub_field('video_link'); ?>"
                                            frameborder="0" allowfullscreen></iframe>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>

            </div>
        </section>
        <section class="full-width-image-container" data-enllax-type="foreground">
            <figure
                class="full-width-image secondary-bgd-image <?php echo isOnMobile()->parallax ?>" <?php if (get_field('parallax_image_2')): echo 'style="background-image: url(' . get_field('parallax_image_2') . ');"'; endif; ?>
                data-enllax-ratio="<?php echo isOnMobile()->ratio ?>">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php the_field('parallax_text_2') ?></p>
                    </figcaption>
                </div>
                <span class="anchor-link" id="preprimary"></span>
            </figure>
        </section>
        <!-- <section class="section section-pair section-school-blog even-section">
                <div class="section-navigation">
                    <h2 id="blog-sa">Student Blog</h2>
                </div>

                    <div class="section-content">
                        <?php foreach (get_field('student_blogs') as $blog_post): $blog_post = (object)$blog_post; ?>

                            <div class="section-content-item section-content-item-third blog-article">
                                <div class="blog-article-image" style="background-image: url(<?php echo $blog_post->picture; ?>);"
                                        title="<?php echo $blog_post->title; ?>"></div>
                                <a href="<?php echo $blog_post->url; ?>" class="blog-article-title"
                                    title="<?php echo $blog_post->title; ?>"><?php echo $blog_post->title; ?></a>
                                <p class="article-author"><?php echo $blog_post->author; ?></p>
                            </div>

                        <?php endforeach; ?>
                    </div>

            </section>-->


        <section class="section section-pair contact-student ">
            <div class="section-navigation">
                <h2>Contact a Student</h2>
            </div>

            <div class="section-content">
                <span class="anchor-link" id="contact-student"></span>
                <div class="section-content-item section-content-item-half">
                    <p><?php the_field('contact_text') ?></p>
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
