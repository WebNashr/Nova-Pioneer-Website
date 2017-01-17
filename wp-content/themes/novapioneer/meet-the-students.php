<?php
/**
 * Template Name: Meet The Students
 */

get_header(); ?>

<style>
    img.ajax-loader{
        max-height: 16px;
        max-width: 16px;
    }
</style>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>
        <!-- start content -->
        <main role="main">
            <section class="section section-hero corporate-hero">
                <div class="container hero-container">
                    <!-- <heading class="hero-heading">
                        <h1>We want to equip as many youth as we can to realise their great dream</h1>
                    </heading> -->
                    <div class="main-callout-box">
                        <hr>
                        <h1><?php  the_title()?></h1>
                        <p><?php the_content()?></p>
                    </div>
                </div>
            </section>

            <!-- <div class="trigger"></div> -->
            <section class="section">
                <div class="page-navigation-container">
                    <div class="navigation-wrap">
                        <div class="section-title"><h1>Our Students</h1></div>
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
                    <h1>Junior Students</h1>
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
                    <h1>Senior Students</h1>
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
                    <h1>Contact a Student</h1>
                </div>

                <div class="section-content the-students ">
                    <div class="section-content-item section-content-item-quarter">
                        <p><?php the_field('contact_text')?></p>
                    </div>

                    <div class="section-content-item section-content-item-full">
                        <?php echo do_shortcode('[contact-form-7 id="606" title="Meet A Student Contact A Student"]')?>
                    </div>
                </div>
            </section>


            <section class="section section-pair section-subscribe">
                <div class="section-navigation">
                    <h1>Stay Updated</h1>
                </div>

                <div class="section-content">
                    <div class="section-content-item section-content-item-full">
                        <header>
                            <p>Enter your email address below and receive the latest Nova Pioneer news, upcoming events and admission opportunities.</p>
                        </header>

                        <?php echo do_shortcode('[contact-form-7 id="610" title="Stay Updated" html_class="sign-up"]');?>

                      <!--  <form action="" method="POST" class="sign-up">
                            <input name="email" class="email-input" placeholder="Your Email Address" class="" type="text">
                            <div class="selector">
                                <select class="dropdown">
                                    <option value="Please Select Your Area of Interest">Please Select Your Area of Interest</option>
                                    <option value="School Admissions">School Admissions</option>
                                    <option value="School Events">School Events</option>
                                    <option value="Latest News">Latest News</option>
                                </select>
                            </div>
                            <input name="Sign Up" value="Sign Up" class="button button-default button-primary submit-btn" style="" type="submit">
                        </form>-->
                    </div>
                </div>
            </section>
        </main>
        <!-- end content -->



    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
