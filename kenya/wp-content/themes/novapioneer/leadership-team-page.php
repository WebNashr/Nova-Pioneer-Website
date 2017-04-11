<?php

/**
 * Template Name: Global Leadership Team
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>


        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        

        <div class="trigger"></div>

        <section class="section" style="padding-bottom:2rem;">
          <div class="page-navigation-container">
              <div class="navigation-wrap">
                  <div class="section-title">
                      <h3>Our Learning Approach</h3>
                  </div>
                  <div class="links-inner-wrap">

                          <div class="section-content-item">
                              <div class="anchor-link">
                                <a href="#leadership" class="" title="">Leadership</a>
                              </div>
                          </div>

                          <div class="section-content-item">
                              <div class="anchor-link">
                                <a href="#management" class="" title="">Managment</a>
                              </div>
                          </div>
                          <div class="section-content-item">
                              <div class="anchor-link">
                                <a href="#team" class="" title="">Team</a>
                              </div>
                          </div>

                  </div>
              </div>
          </div>
            <!-- <div class="page-navigation-container leadership-nav">
                <div class="navigation-wrap">
                    <div class="section-title"><h3>Our Team</h3></div>
                    <div class="links-inner-wrap"
                    <div class="section-content-item">
                        <div class="anchor-link">
                            <a href="#leadership" class="" title="">Leadership</a>
                        </div>
                        <div class="link-separator">&nbsp;</div>
                        <div class="anchor-link">
                            <a href="#management" class="" title="">Managment</a>
                        </div>
                        <div class="link-separator">&nbsp;</div>
                        <div class="anchor-link">
                            <a href="#team" class="" title="">Team</a>
                        </div>
                    </div>
                </div>
            </div>
            </div> -->
        </section>


        <section class="section section-pair team-profile-container">
            <div class="section-content section-content-plain global-leaders-profiles">
                <span class="anchor-link" id="leadership"></span>
                <?php foreach (get_field('leadership') as $leader): $leader = (object)$leader; ?>
                    <div class="section-content-item section-content-item-third profile">
                        <?php $flip_photo = get_field('flip_photo', $leader->ID); ?>
                        <?php if (!empty($flip_photo)): ?>
                          <div class="image-wrap">
                            <div class="image-flip">
                                <img
                                    src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($leader->ID), 'profile-square')[0]; ?>"
                                    alt="<?php echo $leader->post_title; ?>">
                                <img src="<?php echo $flip_photo; ?>" alt="<?php echo $leader->post_title; ?>">
                            </div>
                          </div>
                        <?php else: ?>
                          <div class="image-wrap">
                            <img
                                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($leader->ID), 'profile-square')[0]; ?>"
                                alt="<?php echo $leader->post_title; ?>">
                          </div>
                        <?php endif; ?>
                        <h3 class="profile-name"><?php echo $leader->post_title; ?></h3>
                        <h5 class="profile-role"><?php echo get_field('title', $leader->ID); ?></h5>
                        <div class="profile-description">
                            <?php echo $leader->post_content; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <section class="section section-pair team-profile-container even-section">
            <h2 class="centered-title" id="management">Nova Pioneer Management</h2>

            <div class="section-content section-content-plain np-management-profiles">
                <?php foreach (get_field('management') as $manager): $manager = (object)$manager; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <?php $flip_photo = get_field('flip_photo', $manager->ID); ?>
                        <?php if (!empty($flip_photo)): ?>
                          <div class="image-wrap">
                            <div class="image-flip">
                                <img
                                    src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($manager->ID), 'profile-square')[0]; ?>"
                                    alt="<?php echo $manager->post_title; ?>">
                                <img src="<?php echo $flip_photo; ?>" alt="<?php echo $manager->post_title; ?>">
                            </div>
                          </div>
                        <?php else: ?>
                          <div class="image-wrap">
                            <img
                                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($manager->ID), 'profile-square')[0]; ?>"
                                alt="<?php echo $manager->post_title; ?>">
                          </div>
                        <?php endif; ?>
                        <h3 class="profile-name"><?php echo $manager->post_title; ?></h3>
                        <h5 class="profile-role"><?php echo get_field('title', $manager->ID); ?></h5>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <span class="anchor-link"></span>

        <section class="section team-profile-container np-team-profiles slider-profiles">
            <h2 class="centered-title" id="team">Nova Pioneer Team</h2>
            <div class="content-slider-container">

                <ul id="content-slider" class="content-slider">
                    <?php foreach (get_field('team_members') as $member): $member = (object)$member; ?>
                        <li>
                            <div class="profile">
                                <?php $flip_photo = get_field('flip_photo', $member->ID); ?>
                                <?php if (!empty($flip_photo)): ?>
                                  <div class="image-wrap">
                                    <div class="image-flip">
                                        <img
                                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'profile-square')[0]; ?>"
                                            alt="<?php echo $member->post_title; ?>">
                                        <img src="<?php echo $flip_photo; ?>" alt="<?php echo $member->post_title; ?>">
                                    </div>
                                  </div>
                                <?php else: ?>
                                  <div class="image-wrap">
                                    <img
                                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'profile-square')[0]; ?>"
                                        alt="<?php echo $member->post_title; ?>">
                                  </div>
                                <?php endif; ?>
                                <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                                <h5 class="profile-role"><?php echo get_field('title', $member->ID); ?></h5>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>


<script src="<?php echo novap_get_baseurl(); ?>/assets/js/lightslider/lightslider.js"></script>
<script>
    $(document).ready(function() {
        $("#content-slider").lightSlider({
            // loop:true,
            // keyPress:true
            // item: 1,
            // autoWidth: false,
            // slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 50,
            //
            // addClass: '',
            // mode: "slide",
            // useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
            //
            // speed: 400, //ms'
            // auto: false,
            // loop: true,
            // slideEndAnimation: true,
            // pause: 2000,
            //
            // keyPress: false,
            // controls: true,
            // prevHtml: '',
            // nextHtml: '',
            //
            // currentPagerPosition: 'middle',
            addClass:'content-slider',
            // enableTouch:true,
            // enableDrag:true,
            // freeMove:true,
            // swipeThreshold: 40,
            responsive : [
                {
                    breakpoint:1024,
                    settings: {
                        //    slideMargin:160,
                        slideMargin:100,
                        }
                },

                {
                    breakpoint:768,
                    settings: {
                        autoWidth: false,
                        item: 2,
                        slideMove: 2,
                        slideMargin:80,
                        }
                },

                {
                    breakpoint:640,
                    settings: {
                        autoWidth: false,
                        item: 2,
                        slideMove: 2,
                        slideMargin: 80
                        }
                },

                {
                    breakpoint:425,
                    settings: {
                        autoWidth: false,
                        item: 1,
                        slideMove: 1,
                        //    slideMargin: 160
                        }
                }
            ]
        });

        // $('#image-gallery').lightSlider({
        //     gallery:true,
        //     item:1,
        //     thumbItem:9,
        //     slideMargin:0,
        //     speed:500,
        //     auto:true,
        //     loop:true,
        //     onSliderLoad: function() {
        //         $('#image-gallery').removeClass('cS-hidden');
        //     }
        // });
    });
</script>


<!-- smooth scroll-->
<script>
    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>
