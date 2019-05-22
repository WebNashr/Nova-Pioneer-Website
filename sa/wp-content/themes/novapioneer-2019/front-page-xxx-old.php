<?php
/**
 *
 * Template Name: Country Home Page - xx old
 */
get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <section class="section country-hero">
            <div class="container hero-container">
                <ul id="hero-slider">
                    <?php foreach (get_field('hero_slides') as $hero_slide): $hero_slide = (object)$hero_slide; ?>
                        <li>
                            <?php $link = '#';
                            $target = '';
                            if ($hero_slide->has_link) {
                                $link = $hero_slide->link;
                                $target = 'target="_blank"';
                            } ?>
                            <a href="<?php echo $link ?>" <?php echo $target ?>>
                                <img src="<?php echo $hero_slide->image; ?>">
                                <div class="callout-box">
                                    <div class="animated-headings">
                                        <h1 class="hero-title"><?php echo $hero_slide->title; ?></h1>
                                        <h2 class="hero-subtitle"><?php echo $hero_slide->subtitle; ?></h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>


        <div class="trigger"></div>


        <section class="section" style="padding:auto 0;">
            <section>
                <h2 style="text-align: center;">Our South African Schools</h2>
            </section>

            <div class="section-school-list sa-schools">
                <?php $schools = get_field('schools'); ?>
                <?php foreach ($schools as $school): $school = (object)$school; ?>
                    <a
                        href="<?php echo get_permalink($school->ID); ?>"
                        title="<?php echo $school->post_title; ?>"
                        class="section-school-list-select"
                    >

                        <img
                            class="school-photo"
                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-small')[0]; ?>"
                            alt="<?php echo $school->post_title; ?>"
                        >

                        <div class="school-summary">
                            <h3><?php echo $school->post_title; ?></h3>

                            <?php
                                $school_gender = get_field('school_gender', $school->ID);

                                if (strpos(strtolower($school_gender), 'boy-') !== false) {
                                    $gender_style = 'boy-gender-';
                                } elseif (strpos(strtolower($school_gender), 'girl-') !== false) {
                                    $gender_style = 'girl-gender-';
                                } else {
                                    $gender_style = 'mixed-gender-';
                                }
                            ?>
                            <p>
                                <?php //echo $school_gender; ?>
                                <!--<br>-->
                                <?php echo get_field('booarding_or_day_school', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_grades', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_type', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_curriculumn', $school->ID); ?>
                            </p>

                            <div class="button button-tiny button-primary"> Read More</div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>


        <section class="section section-pair even-section section-our-students">
            <div class="section-navigation">
                <h2>Our Students</h2>
                <div class="button-wrap">
                    <a href="<?php echo site_url('/meet-the-students'); ?>" class="button button-small button-primary"
                       title="">Meet the Students</a>
                </div>
            </div>

            <div class="section-content even-section">

                <div class="section-content-item section-content-item-half first-item">
                    <?php $our_students_video = get_field('our_students_video');
                    if (get_field('type', $our_students_video->ID)== ('student' || 'general' )):  ?>
                    <?php echo get_field('our_students_description'); ?>

                    <div class="testimonial pull-quote">
                        <?php
                        $vid_caption = get_field('video_caption', $our_students_video->ID);
                        $student_name = get_field('student_name', $our_students_video->ID);
                        $video = get_field('video', $our_students_video->ID);
                        $grade = get_field('student_grade', $our_students_video->ID);
                        ?>
                        <?php if ($vid_caption): ?>
                            <blockquote>
                                <svg aria-hidden="true">
                                    <use
                                        xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                </svg>
                                <?php echo $vid_caption; ?>
                                <cite><span><strong><?php echo $student_name; ?></strong>,</span> Nova Pioneer
                                    <?php echo $grade; ?> Student</cite>
                            </blockquote>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video">
                        <?php if (get_field('video_or_image', $our_students_video->ID) == 'image') {
                            echo '<img src="' . get_field('image', $our_students_video->ID) . '" />';
                        } else {
                            echo $video;
                        } ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>


        <section class="section section-pair section-learning-at-np">
            <div class="section-navigation">
                <h2>Learning at Nova Pioneer</h2>
                <div class="button-wrap">
                    <a href="<?php echo site_url('/our-approach'); ?>" class="button button-small button-primary"
                       title="">Learn
                        More</a>
                </div>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half first-item">
                    <div class="testimonial pull-quote">
                        <?php
                        $learning_at_novapioneer_video = get_field('learning_at_novapioneer_video');
                        $vid_caption = get_field('video_caption', $learning_at_novapioneer_video->ID);
                        $caption_speaker = get_field('caption_speaker', $learning_at_novapioneer_video->ID);
                        $caption_speaker_title = get_field('caption_speaker_title', $learning_at_novapioneer_video->ID);
                        $video = get_field('video', $learning_at_novapioneer_video->ID);
                        ?>
                        <?php if ($vid_caption): ?>
                            <blockquote>
                                <svg aria-hidden="true">
                                    <use
                                        xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                </svg>
                                <?php echo $vid_caption; ?>
                                <cite><span><strong><?php echo $caption_speaker; ?></strong>,</span> <?php echo $caption_speaker_title; ?>
                                </cite>
                            </blockquote>
                        <?php endif ?>
                    </div>
                </div>
                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video ">
                        <?php if (get_field('video_or_image', $our_students_video->ID) == 'image') {
                            echo '<img src="' . get_field('image', $our_students_video->ID) . '" />';
                        } else {
                            echo $video;
                        } ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="full-width-image-container small-screens">
            <figure class="full-width-image">
                <?php if (get_field('below_learning_hero_image')): ?>
                    <img src="<?php the_field('below_learning_hero_image'); ?>"/>
                <?php endif; ?>

                <div class="section-content full-image-caption">
                    <figcaption>
                        <p><?php echo get_field('below_learning_hero_image_text'); ?></p>
                    </figcaption>
                </div>
            </figure>
        </section>


        <section class="full-width-image-container large-screens" data-enllax-type="foreground">
            <figure class="full-width-image <?php echo isOnMobile()->parallax ?>"
                    style="background-image:url('<?php the_field('below_learning_hero_image') ?>');"
                    data-enllax-ratio="<?php echo isOnMobile()->ratio ?>">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php echo get_field('below_learning_hero_image_text'); ?></p>
                    </figcaption>
                </div>
            </figure>
        </section>


        <!-- <aside>
            <figure class="full-width-image parallax" data-type="background" data-speed="7"
                    style="background-image:url('<?php the_field('below_learning_hero_image') ?>');">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p>We are developing generations of innovators and leaders who will shape the African Century.<a
                                href="<?php echo site_url('/learning/'); ?>" class="">Learn More</a></p>
                    </figcaption>
                </div>
            </figure>
        </aside> -->


        <div class="full-width-container" style="margin-bottom:0;">
            <section class="section section-pair">
                <?php
                $video_from_influencer = get_field('video_from_influencer');
                $vid_caption = get_field('video_caption', $video_from_influencer->ID);
                $caption_speaker = get_field('caption_speaker', $video_from_influencer->ID);
                $caption_speaker_title = get_field('caption_speaker_title', $video_from_influencer->ID);
                $video = get_field('video', $video_from_influencer->ID);
                ?>
                <div class="section-content-item section-content-item-half first-item">
                    <div class="media youtube-video">
                        <?php if (get_field('video_or_image', $video_from_influencer->ID) == 'image') {
                            echo '<img src="' . get_field('image', $video_from_influencer->ID) . '" />';
                        } else {
                            echo $video;
                        } ?>
                    </div>
                </div>

                <div class="section-content-item section-content-item-half">
                    <h2 class="full-width-heading">The Nova Pioneer Way</h2>
                    <div class="testimonial pull-quote">
                        <?php if ($vid_caption): ?>
                            <blockquote>
                                <svg aria-hidden="true">
                                    <use
                                        xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                </svg>
                                <?php echo $vid_caption; ?>
                                <cite><span><strong><?php echo $caption_speaker; ?></strong>,</span> <?php echo $caption_speaker_title; ?>
                                </cite>
                            </blockquote>
                        <?php endif; ?>
                    </div>
                </div>


            </section>
        </div>


        <section class="section section-pair">
            <div class="section-navigation">
                <h2>Global Leadership Team</h2>
                <div class="button-wrap">
                    <a href="<?php echo site_url('/global-leadership/'); ?>" class="button button-small button-primary"
                       title="">Meet the team</a>
                </div>
            </div>

            <div class="section-content">
                <?php $leadership_team_members = get_field('leadership_team_members'); ?>
                <?php foreach ($leadership_team_members as $member): ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <div class="image-wrap">
                            <img
                                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'profile-square')[0]; ?>"
                                alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>"
                                class="profile-img">
                        </div>
                        <h4 class="profile-name"
                            title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></h4>
                        <h6 class="profile-role"><?php echo get_field('title', $member->ID); ?></h6>
                        <!-- <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span> -->
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <section class="section even-section">
            <div class="general-notices-container">
                <div
                    class="large-notice-container" <?php if (get_field('admission_image')): echo 'style="background-image: url(' . get_field('admission_image') . ');"'; endif; ?>>
                    <div class="large-notice">
                        <div class="notice-content">
                            <h1><?php echo get_field('admin_process_title'); ?></h1>
                            <?php echo get_field('admission_call_to_action'); ?>
                            <p class="call-to-action"><a href="<?php echo site_url('/admission-process') ?>"
                                                         class="button button-small button-secondary">Admission
                                    Process</a></p>
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
                        <h4>South Africa Fee Structure</h4>

                        <a href="<?php echo site_url('fees-structure/') ?>"
                           class="button button-small button-secondary">View Fees</a>
                    </div>
                    <div class="divider"></div>
                    <div class="small-notice">
                        <h4>Our Calendar</h4>
                        <p><?php echo date('F Y'); ?> School Events</p>
                        <a href="<?php echo site_url('/calendar'); ?>" class="button button-small button-secondary"
                        >Calendar</a>
                    </div>
                </div>
                <!-- <div class="small-notice-container">
                <?php echo get_nova_events(); ?>
            </div> -->

            </div>
        </section>


        <aside>
            <div class=" testimonial full-width-quote ">
                <div class=" section content-slider-container testimonials">
                    <ul id="testimonial-slider" class="content-slider">
                        <?php foreach (get_field('testimonials') as $testimonial): $testimonial = (object)$testimonial; ?>
                            <li class="single-testimonial">
                                <figure class="full-width-figure">
                                    <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID, 'thumbnail'); ?>">
                                </figure>
                                <blockquote>
                                    <svg aria-hidden="true">
                                        <use
                                            xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>
                                    <?php echo $testimonial->post_content; ?>
                                    <p>
                                        <cite><span><strong><?php echo get_field('reviewer_name', $testimonial->ID); ?></strong>
                                                ,</span> <?php echo get_field('reviewer_title', $testimonial->ID); ?>
                                        </cite></p>
                                </blockquote>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </aside>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <!-- <?php // get_template_part('includes/partials/content', 'rsvp-modal'); ?> no longer necessary -->

<?php endif; ?>


<script type="text/javascript">
    $(document).ready(function () {
        function startWayPoint() {
            $(function () {
                removeAnimateClasses();

                var inview1 = new Waypoint.Inview({
                    element: $('.hero-title'),
                    entered: function () {
                        $(this.element).addClass('animated bounceInLeft');
                        console.log('animated one');

                    }
                });

                var inview2 = new Waypoint.Inview({
                    element: $('.hero-subtitle'),
                    entered: function () {
                        $(this.element).addClass('animated bounceInRight');
                        console.log('animated two')

                    }
                });
                console.log("12. Animated Country Hero titles");
                inview1.destroy()
                inview2.destroy()
                console.log('destroyed all');

            });

            return true;
        }

        function removeAnimateClasses() {
            if ($('.hero-title').hasClass('animated') || $('.hero-title').hasClass('bounceInLeft')) {
                $('.hero-title').removeClass('animated bounceInLeft');
                console.log('class removed 1')
            }
            if ($('.hero-subtitle').hasClass('animated') || $('.hero-subtitle').hasClass('bounceInRight')) {
                $('.hero-subtitle').removeClass('animated bounceInRight');

            }
        }


        $("#testimonial-slider").lightSlider({
            item: 1,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            // slideMargin: 300, //500
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
            speed: 400, //ms'
            auto: false,
            loop: true,
            // slideEndAnimation: true,
            pause: 2000,
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
            addClass: 'content-slider',
            // currentPagerPosition: 'middle',
            enableTouch: false,
            enableDrag: false,
            freeMove: false,
            // swipeThreshold: 40,
            responsive: [
                // {
                //     breakpoint: 1024,
                //     settings: {
                //         slideMargin: 500,
                //     }
                // },
                //   {
                //       breakpoint: 800,
                //       settings: {
                //           slideMargin: 500,
                //       }
                //   },

                {
                    breakpoint: 800,
                    settings: {
                        auto: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        auto: false,
                    }
                },
                {
                    breakpoint: 320,
                    settings: {
                        auto: false,
                        slideMargin: 245,
                    }
                }
            ]
        });


        $('#hero-slider').slippry({
            auto: true,
            speed: 800,
            pause: 8000,
            autoHover: false,
            onSlideBefore: function () {
                removeAnimateClasses();
            },
            onSlideAfter: function () {

                return startWayPoint();
            },
        });


        $('.sy-controls a').click(function () {
            startWayPoint()
        })
        startWayPoint()
    });
</script>


<!--
    Re-link the parallax script (in themes/novapioneer/js) to override the conflict
    brought on by the carousel at the top of the home page.
    Add this script tag after the carousel options JS block on whichever page
    the carousel gets going on being a right pain in the footer!
-->
<script type="text/javascript"
        src="<?php echo site_url('/wp-content/themes/novapioneer/js/parallax-effect.js'); ?>"></script>


<?php get_footer(); ?>
