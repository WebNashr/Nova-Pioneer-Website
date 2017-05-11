<?php
/**
 *  Template Name: Contacts Page
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1>Contact Us</h1>
                    <p>Developing innovators &amp; leaders who will shape the future</p>
                </div>
            </div>
        </section>
        
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title">Contact Us</h1>
                    <p>Developing innovators &amp; leaders who will shape the future</p>
                </div>
            </div>
        </section>

        <?php $locations = array(); // The school locations ?>

        <div class="trigger"></div>

        <section class="section">
            <div class="section-pair">
                <div class="section-navigation">
                    <h2><?php echo get_field('country'); ?></h2>
                    <div class="social-media-links">
                        <a href=" <?php echo get_field('facebook'); ?>" target="_blank"><span
                                class="social-icon facebook-icon"></span>Facebook</a><br/>
                        <a href=" <?php echo get_field('twitter'); ?>" target="_blank"><span
                                class="social-icon twitter-icon"></span>Twitter</a><br/>
                        <a href=" <?php echo get_field('instagram_ke'); ?>" target="_blank"><span
                                class="social-icon instagram-icon"></span>Instagram</a><br/>
                    </div>
                </div>
                <div class="section-content">
                    <?php foreach (get_field('school_branches') as $school_branch): $school_branch = (object)$school_branch; ?>
                        <div class="section-content-item section-content-item-third">
                            <div class="school-contact">
                                <h3><?php echo $school_branch->branch_name; ?></h3>
                                <?php echo $school_branch->address; ?>
                                <address>
                                    <div class="contact-info">
                                        <?php foreach ($school_branch->contacts_ as $contact): $contact = (object)$contact; ?>
                                            <?php if (strtolower($contact->label) == 'email' || strpos(strtolower($contact->label), 'email') !== false): ?>
                                                <span class="phone-contact-one">   <?php echo $contact->label; ?>
                                                    <a href="mailto:<?php echo $contact->contact; ?>"> <?php echo $contact->contact; ?> </a></span>
                                            <?php else: ?>
                                                <span class="phone-contact-one">   <?php echo $contact->label; ?>
                                                    <a href="tel:<?php echo $contact->contact; ?>"> <?php echo $contact->contact; ?> </a></span>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </div>
                                </address>
                            </div>
                        </div>

                        <?php
                            array_push($locations, array(
                                "latitude" => $school_branch->latitude,
                                "longitude" => $school_branch->longitude,
                                "info_text" => $school_branch->branch_name
                            ));
                        ?>

                    <?php endforeach; ?>

                    <div class="school-maps-container">
                        <?php novap_render_google_map($locations); ?>
                    </div>

                </div>
        </section>


    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>

<?php get_footer(); ?>
