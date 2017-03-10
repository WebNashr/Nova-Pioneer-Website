<?php
/**
 * Template Name: School Homepage
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <section class="section section-hero school-home"  data-type="background" data-speed="4">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title">Learners are inspired become adaptive, independent thinkers</h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-pair school-features-container">
            <div class="section-navigation">
                <h5><?php the_title(); ?></h5>
            </div>

            <div class="section-content">
                <div class="section-content-item school-features">
                    <div class="feature-item"><span class="feature-icon boys-school-icon"></span>
                        <p><?php echo get_field('school_gender'); ?></p></div>
                    <div class="feature-item"><span class="feature-icon curriculum-icon"></span>
                        <p><?php echo get_field('school_curriculumn'); ?></p></div>
                    <div class="feature-item"><span class="feature-icon boarding-icon"></span>
                        <p><?php echo get_field('booarding_or_day_school'); ?></p></div>
                    <div class="feature-item"><span class="feature-icon grade-icon"></span>
                        <p><?php echo get_field('school_grades'); ?></p></div>
                    <!-- <?php echo get_field('summary_intro'); ?> -->
                </div>
            </div>
        </section>

        <section class="section">
            <a name="contacts"></a>
            <div class="general-notices-container school-notices">
                <div class="large-notice-container"
                     style="background-image: url(<?php echo get_field('admission_photo'); ?>);">
                    <div class="large-notice">
                        <div class="bar-notice">
                            <div class="contact">
                                <p>General Enquiries Call: <a
                                        href="tel:<?php echo get_field('general_enquiries_number'); ?>"><?php echo get_field('general_enquiries_number'); ?> </a>
                                </p>
                            </div>
                            <div class="contact">
                                <p>Admission Enquiries Call: <a
                                        href="tel:<?php echo get_field('admission_enquiries_number'); ?>"><?php echo get_field('admission_enquiries_number'); ?> </a>
                                </p>
                            </div>
                            <div class="contact">
                                <p>Email Us: <a
                                        href="mailto:<?php echo get_field('school_email'); ?>"><?php echo get_field('school_email'); ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="notice-content">
                            <h1>Learn About Our Admission Process</h1>
                            <?php echo get_field('admission_call_to_action'); ?>
                            <p class="call-to-action"><a href="#" class="button button-small button-secondary">Apply
                                    Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="small-notice-container"><?php
                    $taxonomies = wp_get_post_terms(get_the_ID(), 'school', array("fields" => "all"));
                    foreach ($taxonomies as $tax) {
                        $taxies[] = $tax->slug;
                    }
                    ?>

                    <?php echo get_nova_events($taxies); ?>

                    <div class="small-notice">
                        <h4>Download Our Fees Structure</h4>
                        <p>PDF document</p>
                        <a download href="<?php echo get_field('fees_structure'); ?>"
                           class="button button-small button-secondary">Download</a>
                    </div>
                    <div class="divider"></div>
                    <div class="small-notice">
                      <h4>Our Calendar</h4>
                      <p><?php echo date('F Y'); ?> School Events</p>
                      <a href="<?php echo site_url('/calendar'); ?>" class="button button-small button-secondary" target="_blank">Calendar</a>
                  </div>
                </div>

            </div>
        </section>

        <section class="section section-pair even-section">
            <div class="section-navigation">
                <h2>Our Students</h2>
                <a href="<?php echo site_url('/meet-the-students'); ?>" class="button button-small button-primary" title="">Meet the Students</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="testimonial pull-quote">

                        <?php
                        $our_students_video = get_field('our_students_video');
                        $vid_caption = get_field('video_caption', $our_students_video->ID);
                        $student_name = get_field('student_name', $our_students_video->ID);
                        $video = get_field('video', $our_students_video->ID);
                        ?>
                        <blockquote>
                            <svg aria-hidden="true">
                                <use
                                    xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                            <p><?php echo $vid_caption; ?></p>
                            <cite><span><?php echo $student_name; ?>,</span> Nova Pioneer Student</cite>
                        </blockquote>

                    </div>

                </div>
                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video">
                        <?php echo $video; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-pair">
            <div class="section-navigation">
                <h2>Leadership Team</h2>
                <a href="<?php echo get_permalink(); ?>our-team" class="button button-small button-primary" title="">View the team</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <?php
                    $leadership_team_description = get_field('leadership_team_description');
                    // Get the paragraphs in $leadership_team_description for implementing the read-more functionality
                    preg_match_all('|<p>(.+?)</p>|', $leadership_team_description, $matches);
                    $leadership_team_description_paragraphs = $matches[1];
                    ?>
                        <p><?php echo array_shift($leadership_team_description_paragraphs); ?></p>
                        <span class="read-more-target">
                            <?php foreach ($leadership_team_description_paragraphs as $paragraph): ?>
                                <p><?php echo $paragraph; ?></p>
                            <?php endforeach; ?>
                        </span>

                </div>

                <?php $leadership_team_members = get_field('leadership_team_members');
                $x = 0; ?>
                <?php foreach ($leadership_team_members as $member): if ($x >= 2): break; endif; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img
                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'single-post-thumbnail')[0]; ?>"
                            alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>"
                            class="profile-img">
                        <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name"
                           title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span>
                    </div>
                    <? $x++; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <a name="gallery"></a>
        <section class="section gallery-section">
            <div class="article"><h2 class=" gallery-title">School Gallery</h2></div>

            <div class="slider-container">
                <div class="section-content-item-full">
                    <div class="media gallery">
                        <ul id="slippry">
                            <?php $image_count = 0; ?>
                            <?php foreach( get_field('gallery') as $image): $image = (object)$image; $image_count++; ?>
                                <li>
                                    <a href="#slide<?php echo $image_count; ?>">
                                        <img src="<?php echo $image->url; ?>" alt="<?php echo $image->caption; ?>"/>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <aside>
            <div class=" testimonial full-width-quote ">
                <div class=" section content-slider-container testimonials">
                    <ul id="testimonial-slider" class="content-slider">
                        <?php foreach( get_field('testimonials') as $testimonial ): $testimonial = (object)$testimonial; ?>
                            <li class="single-testimonial">
                                <figure class="full-width-figure">
                                    <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID,'thumbnail'); ?>">
                                </figure>
                                <blockquote>
                                    <svg aria-hidden="true">
                                    <use xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>
                                    <?php echo $testimonial->post_content; ?>
                                    <p><cite><span><?php echo get_field('reviewer_name', $testimonial->ID); ?>,</span> <?php echo get_field('reviewer_title', $testimonial->ID); ?></cite></p>
                                </blockquote>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </aside>

        <section class="section section-pair even-section">
              <div class="section-navigation">
                  <h2>A Day in the Life</h2>
              </div>

              <div class="section-content section-day-in-the-life">
                <div class="section-content-item section-content-item-half">
                    <?php echo get_field('day_in_the_life_description'); ?>
                    <a href="<?php echo get_field('day_in_the_life_link'); ?>" class="button button-small button-primary">Learn More</a>

                </div>
                <div class="section-content-item section-content-item-half">
                  <figure><img src="<?php echo get_field('day_in_the_life_picture'); ?>" /></figure>
                </div>


              </div>
          </section>

        <section class="section section-pair section-school-location">
            <div class="section-navigation">
                <h2>Contact Us</h2>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="media">
                        <?php echo get_field('map_embed_code'); ?>
                    </div>
                </div>

                <div class="section-content-item section-content-item-half">
                    <div class="contact-info">
                        <span class="phone-contact-one">Call us: <a
                                href="tel:<?php echo get_field('main_phone_number'); ?> "><?php echo get_field('main_phone_number'); ?> </a></span>
                        <span class="phone-contact-two">Admission Enquiries:  <a
                                href="tel:<?php echo get_field('admission_enquiries_number'); ?> "><?php echo get_field('admission_enquiries_number'); ?> </a></span>
                        <span class="phone-contact-three">Current Parents Enquiries: <a href="tel:<?php echo get_field('current_parents_contact__number'); ?>"> <?php echo get_field('current_parents_contact__number'); ?> </a> </span>
                        <span class="email-contact">Email us: <a
                                href="mailto:<?php echo get_field('email_address'); ?>"><?php echo get_field('email_address'); ?></a></span>
                    </div>

                    <div class="contact-info">
                        <?php echo get_field('physical_address'); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>

<?php get_footer(); ?>
<script type="text/javascript">
$(document).ready(function() {
    $("#testimonial-slider").lightSlider({
        item: 1,
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 500,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        currentPagerPosition: 'middle',

        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,

    });
});
</script>
