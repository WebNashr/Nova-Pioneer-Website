<?php
/**
 *
 * Template Name: Country Home Page
 */
get_header(); ?>

<!--begin updates-2019-->
<div class="updates-2019">
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <section class="section country-hero" style="display: none;">
            <div class="container hero-container">
                <ul id="hero-slider">
                    <?php foreach (get_field('hero_slides') as $hero_slide): $hero_slide = (object)$hero_slide; ?>
                        <?php $link = '#';
                          $target = '';
                        if ($hero_slide->has_link) {
                            $link = $hero_slide->link;
                            $target = 'target="_blank"';
                        } ?>
                        <li>
                            <a href="<?php echo $link ?>" <?php echo $target ?>>
                                <img src="<?php echo $hero_slide->image; ?>">
                                <!--<img src="<?php echo $hero_slide->image['sizes']['16-9-large'] ?>" alt="<?php echo $image['caption'] ?>">-->
                                <!--<img src="<?php echo $hero_slide->image['sizes']['16-9-large'] ?>" alt="<?php echo $image['caption'] ?>">-->
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


        <!--<section class="section section-carousel">
            <?php foreach (get_field('hero_slides') as $hero_slide): $hero_slide = (object)$hero_slide; ?>
            <?php
                $link = '#';
                $target = '';
                if ($hero_slide->has_link) {
                    $link = $hero_slide->link;
                    $target = 'target="_blank"';
                }
            ?>
            <a class="section-carousel-slide" href="<?php echo $link ?>" <?php echo $target ?>>
                <img src="<?php echo $hero_slide->image; ?>">

                <figcaption>
                    <h1 class="extrabold"><?php echo $hero_slide->title; ?> <span class="highlighted"><?php echo $hero_slide->title_highlight; ?></span></h1>
                    <p class="subheading"><?php echo $hero_slide->subtitle; ?></p>
                </figcaption>
            </a>
            <?php endforeach; ?>
        </section>-->


        <section class="section section-carousel">
            <?php if( have_rows('hero_slides') ): ?>
            <?php while( have_rows('hero_slides') ): the_row();  ?>
            <a class="section-carousel-slide" href="<?php echo $link ?>" <?php echo $target ?>>
                <?php
                    $image = get_sub_field('image');
                    $size = '16-9-banner';
                    if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                    }
                ?>

                <figcaption>
                    <h1 class="extrabold"><?php the_sub_field('title'); ?> <span class="highlighted"><?php the_sub_field('title_highlight'); ?></span></h1>
                    <p class="subheading"><?php the_sub_field('subtitle'); ?></p>
                </figcaption>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>


        <div class="trigger"></div>


        <div class="divider-rose">
            <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                <g id="divider" transform="translate(0 -0.359)">
                    <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                    <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                        <g id="white" transform="translate(0.59 0.36)">
                        <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                        </g>
                    </g>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                    </g>
                </g>
            </svg>
        </div>


        <section class="section section-schools" style="padding:auto 0;">
            <section>
                <h2 style="text-align: center;">Our Kenyan schools</h2>
            </section>

            <div class="section-school-list">
                <?php $schools = get_field('schools'); ?>
                <?php foreach ($schools as $school): $school = (object)$school; ?>
                    <a
                        href="<?php echo get_permalink($school->ID); ?>"
                        title="<?php echo $school->post_title; ?>"
                        class="section-school-list-select"
                    >

                        <img
                            class="school-photo"
                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-triplet')[0]; ?>"
                            alt="<?php echo $school->post_title; ?>"
                        >

                        <div class="school-summary">
                            <h4><?php echo $school->post_title; ?></h4>
                            <br>

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
                                <?php echo $school_gender; ?>
                                <br>
                                <?php echo get_field('booarding_or_day_school', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_grades', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_type', $school->ID); ?>
                                <br>
                                <?php echo get_field('school_curriculumn', $school->ID); ?>
                            </p>
                            <br>

                            <div class="button button-small button-green-lt">Read More</div>
                        </div>
                    </a>

                <?php endforeach; ?>
            </div>
        </section>

        <div class="divider-rose">
            <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                <g id="divider" transform="translate(0 -0.359)">
                    <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                    <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                        <g id="white" transform="translate(0.59 0.36)">
                        <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                        </g>
                    </g>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                    </g>
                </g>
            </svg>
        </div>

        <section class="section section-admissions section-admissions-small">
            <div class="card-container">
                <figure class="card card-admissions card-admissions-small">
                    <h4><?php the_field('admissions_title'); ?></h4>
                    <br>
                    <p><?php the_field('admissions_description'); ?></p>
                    <br>
                    <a class="button button-default button-orange-dk" href="<?php the_field('admissions_link') ?>" title="<?php the_field('admissions_button') ?>"><?php the_field('admissions_button') ?></a>
                </figure>

                <?php if( have_rows('admissions_steps') ): ?>
                    <?php while( have_rows('admissions_steps') ): the_row();  ?>
                    <a class="card card-admissions card-admissions-small" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>" target="_blank">
                        <?php
                            $image = get_sub_field('image');
                            $size = '1-1-square';
                            if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            }
                        ?>

                        <figcaption>
                            <div class="admissions-number"><?php the_sub_field('number'); ?></div>
                            <p class="admissions-title"><?php the_sub_field('title'); ?></p>
                        </figcaption>
                    </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

        <div class="divider-rose">
            <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                <g id="divider" transform="translate(0 -0.359)">
                    <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                    <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                        <g id="white" transform="translate(0.59 0.36)">
                        <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                        </g>
                    </g>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                    </g>
                </g>
            </svg>
        </div>

        <section class="section section-video-side section-video-side-left">
            <div class="video-side-embed">
                <div class="media youtube-video">
                    <?php the_field('primary_school_video'); ?>
                </div>
            </div>

            <div class="video-side-text">
                <h3><?php the_field('primary_school_title'); ?></h3>
                <br>
                <?php the_field('primary_school_description'); ?>
                <br>
                <a href="" class="button button-small button-green-lt" title="">Apply now</a>
            </div>
        </section>

        <div class="divider-rose">
            <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                <g id="divider" transform="translate(0 -0.359)">
                    <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                    <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                        <g id="white" transform="translate(0.59 0.36)">
                        <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                        </g>
                    </g>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                    </g>
                </g>
            </svg>
        </div>

        <section class="section section-video-side section-video-side-right">
            <div class="video-side-embed">
                <div class="media youtube-video">
                    <?php the_field('secondary_school_video'); ?>
                </div>
            </div>

            <div class="video-side-text">
                <h3><?php the_field('secondary_school_title'); ?></h3>
                <br>
                <?php the_field('secondary_school_description'); ?>
                <br>
                <a href="" class="button button-small button-orange-lt" title="">Apply now</a>
            </div>
        </section>

        <div class="divider-rose">
            <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                <g id="divider" transform="translate(0 -0.359)">
                    <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                    <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                        <g id="white" transform="translate(0.59 0.36)">
                        <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                        </g>
                    </g>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                    </g>
                </g>
            </svg>
        </div>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <?php endif; ?>

    <div class="divider-rose">
        <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
            <g id="divider" transform="translate(0 -0.359)">
                <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                    <g id="white" transform="translate(0.59 0.36)">
                    <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                    </g>
                </g>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                </g>
            </g>
        </svg>
    </div>
</div>
<!--end updates-2019-->


<script type="text/javascript">
    (function ($) {
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
                auto: false,
                speed: 800,
                pause: 8000,
                // adaptiveHeight: false,
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

            $('.section-carousel').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
    })(jQuery);
</script>


<!--
    Re-link the parallax script (in themes/novapioneer/js) to override the conflict
    brought on by the carousel at the top of the home page.
    Add this script tag after the carousel options JS block on whichever page
    the carousel gets going on being a right pain in the footer!
-->
<!--<script type="text/javascript" src="<?php echo site_url('/wp-content/themes/novapioneer/js/parallax-effect.js'); ?>"></script>-->


<?php get_footer(); ?>
