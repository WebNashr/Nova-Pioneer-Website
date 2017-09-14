<?php
    /**
    * Template Name: Campaign Page
    */
?>


<?php get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <!--hero - ios-->
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        
        
        <!--hero - desktop-->
        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php echo get_field('title', $post->ID); ?></h1>
                </div>
            </div>
        </section>


        <div class="trigger"></div>


        <!--intro-->
        <section class="section">
            <article class="article article-inner article-inner-alt" style="text-align: center;">
                <h2 class="centered-title">School name</h2>
                <?php echo get_field('introduction', $post->ID); ?>
            </article>
        </section>


        <!--boxes-->
        <section class="section">
          <!--<div class="section-content section-content-plain principles-container">
                <div class="section-content-item section-content-item-quarter principle-card card-1" style="padding: 0;">
                    <img src="<?php echo get_field('box_1_image', $post->ID); ?>" alt="">
                    
                    <header class="" style="padding: 1rem 1.5rem;">
                        <h3 style="text-align: left;"><?php echo get_field('box_1_title', $post->ID); ?></h3>
                        <br>
                        <?php echo get_field('box_1_description', $post->ID); ?>
                    </header>
                </div>

                <div class="section-content-item section-content-item-quarter principle-card card-2" style="padding: 0;">
                    <img src="<?php echo get_field('box_2_image', $post->ID); ?>" alt="">
                    
                    <header class="" style="padding: 1rem 1.5rem;">
                        <h3 style="text-align: left;"><?php echo get_field('box_2_title', $post->ID); ?></h3>
                        <br>
                        <?php echo get_field('box_2_description', $post->ID); ?>
                    </header>
                </div>

                <div class="section-content-item section-content-item-quarter principle-card card-6" style="padding: 0;">
                    <img src="<?php echo get_field('box_3_image', $post->ID); ?>" alt="">
                    
                    <header class="" style="padding: 1rem 1.5rem;">
                        <h3 style="text-align: left;"><?php echo get_field('box_3_title', $post->ID); ?></h3>
                        <br>
                        <?php echo get_field('box_3_description', $post->ID); ?>
                    </header>
                </div>

                <div class="section-content-item section-content-item-quarter principle-card card-4" style="padding: 0;">
                    <img src="<?php echo get_field('box_4_image', $post->ID); ?>" alt="">
                    
                    <header class="" style="padding: 1rem 1.5rem;">
                        <h3 style="text-align: left;"><?php echo get_field('box_4_title', $post->ID); ?></h3>
                        <br>
                        <?php echo get_field('box_4_description', $post->ID); ?>
                    </header>
                </div>
            </div>-->


            <div class="section-content section-content-plain principles-container">
                <?php if (have_rows('boxes')): while (have_rows('boxes')) : the_row(); ?>
                <div class="section-content-item section-content-item-quarter principle-card campaign-card">
                    <img src="<?php the_sub_field('image') ?>" alt="">
                    
                    <header class="">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <br>
                        <?php the_sub_field('description'); ?>
                    </header>
                </div>
                <?php endwhile; endif ?>

                <!--<style>
                    .principles-container .principle-card.campaign-card {
                        padding: 0;
                        background: #e7e7e7;
                        overflow-wrap: break-word;
                    }

                    .principles-container .principle-card.campaign-card header {
                        padding: 1rem 1.5rem;
                    }

                    .principles-container .principle-card.campaign-card h3,
                    .principles-container .principle-card.campaign-card p,
                    .principles-container .principle-card.campaign-card li,
                    .principles-container .principle-card.campaign-card a {
                        text-align: left;
                    }

                    .principles-container .principle-card.campaign-card h3,
                    .principles-container .principle-card.campaign-card:hover h3 {
                        font-size: 20px;
                        font-weight: 400;
                        line-height: 1.2;
                        transition: unset;
                    }

                    .principles-container .principle-card.campaign-card p,
                    .principles-container .principle-card.campaign-card li {
                        font-size: 1rem;
                    }

                    .principles-container .principle-card.campaign-card p+p {
                        margin-top: 1rem;
                    }

                    .principles-container .principle-card.campaign-card li {
                        margin-bottom: 1rem;
                        line-height: 1;
                        color: white;
                    }

                    .principles-container .principle-card.campaign-card a {
                        font-size: inherit;
                        text-decoration: underline;
                        color: white;
                    }

                    /*.principles-container .principle-card.campaign-card:nth-child(odd) {
                        background: cyan;
                    }

                    .principles-container .principle-card.campaign-card:nth-child(even) {
                        background: hotpink;
                    }*/

                    .principles-container .principle-card.campaign-card:nth-child(1) {
                        background: rgb(108, 189, 69);
                    }

                    .principles-container .principle-card.campaign-card:nth-child(2) {
                        background: rgb(255, 206, 1);
                    }

                    .principles-container .principle-card.campaign-card:nth-child(3) {
                        background: rgb(23, 141, 190);
                    }

                    .principles-container .principle-card.campaign-card:nth-child(4) {
                        background: rgb(30, 63, 117);
                    }

                </style>            -->
          </div>
        </section>


        <!-- testimonial -->
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
                                        <usexlink:href
                                        ="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>

                                    <?php echo $testimonial->post_content; ?>

                                    <p>
                                        <cite>
                                            <span><strong><?php echo get_field('reviewer_name', $testimonial->ID); ?></strong>, </span> <?php echo get_field('reviewer_title', $testimonial->ID); ?>
                                        </cite>
                                    </p>
                                </blockquote>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </aside>


        <!-- apply -->
        <section class="call-to-action">
            <article class="article">
                <div class="cta-wrapper" style="background: rgb(30, 63, 117);">
                  <p>Start your journey with Nova Pioneer today</p>
                    <div class=""><a href="<?php echo site_url('/apply-online'); ?>" class="button button-large button-primary-alt" title="">Apply Online</a></div>
                </div>
            </article>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>


<?php get_footer(); ?>


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
        });
    })(jQuery);
</script>


<!--<script type="text/javascript">
    $(document).ready(function () {
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
    });
</script>-->


