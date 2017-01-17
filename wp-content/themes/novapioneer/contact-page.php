<?php
/**
 *  Template Name: Contacts Page
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <!-- start content -->
        <main role="main">
            <section class="section section-hero contacts-hero">
                <div class="container hero-container">
                    <!-- <heading class="hero-heading">
                        <h1>Developing innovators &amp; leaders who will shape the future</h1>
                    </heading> -->
                    <div class="main-callout-box">
                        <hr>
                        <h1>Contact Us</h1>
                        <p>Developing innovators &amp; leaders who will shape the future</p>
                    </div>
                </div>
            </section>

            <div class="trigger"></div>
            <section class="section">
                <!-- <header class="article-header">
                    <h1>Nova Pioneer Contacts</h1>
                </header> -->
                <div class="section-pair">
                    <div class="section-navigation">
                        <h1>South Africa</h1>
                        <div class="social-media-links">
                            <a href=" <?php the_field('facebook')?>"><span class="social-icon facebook-icon"></span>Facebook</a><br/>
                            <a href=" <?php the_field('twitter')?>"><span class="social-icon twitter-icon"></span>Twitter</a><br/>
                            <a href=" <?php the_field('linkedin')?>"><span class="social-icon linkedin-icon"></span>LinkedIn</a><br/>
                        </div>
                    </div>
                    <div class="section-content">
                        <?php
                        if (have_rows('school_branches')): while (have_rows('school_branches')) : the_row(); ?>
                            <div class="section-content-item section-content-item-third">
                                <div class="school-contact">
                                    <h3><?php the_sub_field('branch_name')?></h3>
                                    <?php the_sub_field('address')?>
                                    <address>
                                        <div class="contact-info">
                                            <?php if (have_rows('contacts_')): while (have_rows('contacts_')) : the_row(); ?>
                                                <span class="phone-contact-one">   <?php the_sub_field('label')?> <a
                                                        href="tel:<?php the_sub_field('contact')?> "> <?php the_sub_field('contact')?> </a></span>
                                            <?php endwhile; endif; ?>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                        <div class="section-content-item section-content-item-full">
                            <div class="location-map">
                                <iframe src="<?php the_field('map')?>"
                                        width="640" height="480"></iframe>
                            </div>
                        </div>

                    </div>
            </section>


            <section class="section">
                <!-- <header class="article-header">
                    <h1>Nova Pioneer Contacts</h1>
                </header> -->
                <div class="section-pair">
                    <div class="section-navigation">
                        <h1>Kenya</h1>
                        <div class="social-media-links">
                            <a href=" <?php the_field('facebook_ke')?>"><span class="social-icon facebook-icon"></span>Facebook</a><br/>
                            <a href=" <?php the_field('twitter_ke')?>"><span class="social-icon twitter-icon"></span>Twitter</a><br/>
                            <a href=" <?php the_field('linkedin_ke')?>"><span class="social-icon linkedin-icon"></span>LinkedIn</a><br/>
                        </div>
                    </div>
                    <div class="section-content">
                        <?php
                        if (have_rows('school_branches_ke')): while (have_rows('school_branches_ke')) : the_row(); ?>
                            <div class="section-content-item section-content-item-third">
                                <div class="school-contact">
                                    <h3><?php the_sub_field('branch_name')?></h3>
                                    <?php the_sub_field('address')?>
                                    <address>
                                        <div class="contact-info">
                                            <?php if (have_rows('contacts_')): while (have_rows('contacts_')) : the_row(); ?>
                                                <span class="phone-contact-one">   <?php the_sub_field('label')?> <a
                                                        href="tel:<?php the_sub_field('contact')?> "> <?php the_sub_field('contact')?> </a></span>


                                            <?php endwhile; endif; ?>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>




                        <div class="section-content-item section-content-item-full">
                            <div class="location-map">
                                <iframe src="<?php the_field('map_ke')?>"
                                        width="640" height="480"></iframe>
                            </div>
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
                            <p>Enter your email address below and receive the latest Nova Pioneer news, upcoming events
                                and admission opportunities.</p>
                        </header>

                        <?php echo do_shortcode('[contact-form-7 id="654" title="Stay Updated" html_class="sign-up"]'); ?>
                    </div>
                </div>
            </section>
        </main>
        <!-- end content -->


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
