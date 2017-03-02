<?php

/**
 * Template Name: Global Leadership Team
 */

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero leadership-team" <?php echo set_post_new_bg(); ?> data-type="background" data-speed="4">
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
          </div>
        </section>

        <span class="anchor-link" id="leadership"></span>
        <section class="section section-pair team-profile-container">
          <div class="section-content section-content-plain global-leaders-profiles">
            <div class="section-content-item section-content-item-third profile">
                <div class="image-flip">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2-flip.jpg" alt="">
                </div>
                  <h3 class="profile-name">Chinezi Chijioke</h3>
                  <h5 class="profile-role">CEO</h5>
                  <div class="profile-description">


                  <p>Chinezi previously served as Head of McKinsey &amp; Company’s African Education Practice, where he worked for 8 years gaining experience with over 25 countries’ school systems across the world. Chinezi started his career as a secondary school mathematics teacher, and has founded youth leadership programmes in South Africa and Nigeria. Chinezi holds an MBA and a Masters in Education from Stanford University, Bachelors in Psychology and an Honours Certificate in African Studies from Harvard University.</p>
                 </div>
            </div>

           <div class="section-content-item section-content-item-third profile">
             <div class="image-flip">
               <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
               <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2-flip.jpg" alt="">
             </div>
             <h3 class="profile-name">Damany Gibbs</h3>
             <h5 class="profile-role">COO</h5>
             <div class="profile-description">

              <p>Damany was previously a founding team member of Bain &amp; Company’s Africa practice. Damany started his career with Morgan Stanley and has worked across New York, London and South Africa. Damany holds an MBA from Harvard Business School, a Masters in Economic &amp; Social History from Oxford University where he was a Rhodes Scholar and a Bachelors in Operations Research &amp; Industrial Engineering from Cornell University.</p>
            </div>

          </div>

         <div class="section-content-item section-content-item-third profile">
           <div class="image-flip">
             <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
             <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2-flip.jpg" alt="">
           </div>
            <h3 class="profile-name">Oliver Sabot</h3>
            <h5 class="profile-role">Managing Director</h5>
            <div class="profile-description">

               <p >Oliver was previously Managing Director at Spire, where he used his experience building and running highly effective learning and employability programs for top companies. He previously served as the Executive VP for Global Programs at the Clinton Health Access Initiative and is co-founder and board member of Kepler, an innovative new university model in East Africa.</p>

            </div>
          </div>

          <div class="section-content-item section-content-item-third profile">
            <div class="image-flip">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2-flip.jpg" alt="">
            </div>
            <h3 class="profile-name">Dai Ellis</h3>
            <h5 class="profile-role">Managing Director</h5>
            <div class="profile-description">

               <p>Dai Ellis served as CEO of Excel Academy Charter Schools, one of the highest-performing school networks in the United States. He is also a co-founder and board member of Kepler. Previously, Dai led the Clinton Foundation`s work on healthcare products in the developing world. Dai is a graduate of Yale Law School and earned his bachelor`s degree at Harvard University.</p>

           </div>
         </div>

        <div class="section-content-item section-content-item-third profile">
          <div class="image-flip">
            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2-flip.jpg" alt="">
          </div>
          <h3 class="profile-name">Chris Khaemba</h3>
          <h5 class="profile-role">Director</h5>
           <div class="profile-description">

             <p>Mr. Khaemba is the former headmaster of Alliance High School and founding Dean of the African Leadership Academy in South Africa. He is widely regarded as one of Africa’s leading educators and currently serves Nairobi County as the executive for education, youth affairs, children, culture and social services.</p>

           </div>
            </div>

         </div>
       </section>

        <!-- <section class="section section-pair team-profile-container">
          <h2 class="centered-title">Nova Pioneer Leadership</h2>
            <div class="section-content section-content-plain np-global-leaders-profiles">
                <?php foreach( get_field('leadership') as $leader ): $leader = (object)$leader; ?>
                    <div class="section-content-item section-content-item-third profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $leader->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $leader->post_title; ?>">
                        <h3 class="profile-name"><?php echo $leader->post_title; ?></h3>
                        <h5 class="profile-role"><?php echo get_field('title', $leader->ID); ?></h5>
                        <div class="profile-description">
                            <input type="checkbox" class="read-more-state" id="post-<?php echo $leader->ID; ?>" />

                            <?php
                                // Get the paragraphs in $our_mission for implementing the read-more functionality
                                preg_match_all('|<p>(.+?)</p>|', $leader->post_content , $matches);
                                $leader_description_paragraphs = $matches[1];
                                $number_of_paragraphs = count($leader_description_paragraphs);
                            ?>

                            <div class="read-more-wrap">
                                <?php echo array_shift($leader_description_paragraphs); ?>
                                <span class="read-more-target">
                                    <?php foreach($leader_description_paragraphs as $paragraph): ?>
                                        <p><?php echo $paragraph; ?></p>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                            <?php if( $number_of_paragraphs > 1): ?>
                            <label for="post-<?php echo $leader->ID; ?>" class="read-more-trigger button button-tiny button-primary"></label>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section> -->

        <span class="anchor-link" id="management"></span>
        <section class="section section-pair team-profile-container even-section">
          <h2 class="centered-title">Nova Pioneer Management</h2>
            <div class="section-content section-content-plain np-management-profiles ">

                <?php foreach( get_field('management') as $manager  ): $manager = (object)$manager; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $manager->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $manager->post_title; ?>">
                        <h3 class="profile-name"><?php echo $manager->post_title; ?></h3>
                        <h5 class="profile-role"><?php echo get_field('title', $manager->ID); ?></h5>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>

        <span class="anchor-link" id="team"></span>

        <section class="section team-profile-container np-team-profiles">
            <h2 class="centered-title">Nova Pioneer Team</h2>
            <div class="content-slider-container">

                <ul id="content-slider" class="content-slider">

                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Dai Ellis</h3>
                            <h5 class="profile-role">Managing Director</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Chris Khaemba</h3>
                            <h5 class="profile-role">Director</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Oliver Sabot</h3>
                            <h5 class="profile-role">Manageing Director</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Dai Ellis 2</h3>
                            <h5 class="profile-role">Managing Director 2</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Chris Khaemba 2</h3>
                            <h5 class="profile-role">Director 2</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Oliver Sabot 2</h3>
                            <h5 class="profile-role">Manageing Director 2</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Dai Ellis 3</h3>
                            <h5 class="profile-role">Managing Director 3</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Chris Khaemba 3</h3>
                            <h5 class="profile-role">Director</h5>
                        </div>
                    </li>
                    <li>
                        <div class="profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                            <h3 class="profile-name">Oliver Sabot 3</h3>
                            <h5 class="profile-role">Manageing Director 3</h5>
                        </div>
                    </li>

                </ul>

            </div>
        </section>
        <!-- <section class="section team-profile-container np-team-profiles">
            <h2 class="centered-title">Nova Pioneer Team</h2>
            <div class="content-slider-container">

                <ul id="content-slider" class="content-slider">
                <?php foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                    <li>
                        <div class="profile">
                            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                            <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                            <h5 class="profile-role"><?php echo get_field('title', $member->ID); ?></h5>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>

            </div>
        </section> -->


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets-src/js/lightslider/lightslider.js"></script>
<script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                // loop:true,
                // keyPress:true
                // item: 1,
                // autoWidth: true,
                // slideMove: 1, // slidemove will be 1 if loop is true
                // slideMargin: 100,
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
                //
                // enableTouch:true,
                // enableDrag:true,
                // freeMove:true,
                // swipeThreshold: 40,

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
       $('a[href^="#"]').on('click', function(event) {
           var target = $(this.getAttribute('href'));
           if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                   scrollTop: target.offset().top
               }, 1000);
           }
       });
    </script>
