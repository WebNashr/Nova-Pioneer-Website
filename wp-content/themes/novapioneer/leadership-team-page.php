<?php

/**
 * Template Name: Global Leadership Team
 */

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero leadership-team" <?php echo set_post_new_bg(); ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
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
          <h2 class="centered-title">Nova Pioneer Leadership</h2>
            <div class="section-content section-content-plain np-global-leaders-profiles">
                <?php foreach( get_field('leadership') as $leader ): $leader = (object)$leader; ?>
                    <div class="section-content-item section-content-item-third profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $leader->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $leader->post_title; ?>">
                        <h3 class="profile-name"><?php echo $leader->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $leader->ID); ?></h6>
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
        </section>

        <span class="anchor-link" id="management"></span>
        <section class="section section-pair team-profile-container even-section">
          <h2 class="centered-title">Nova Pioneer Management</h2>
            <div class="section-content section-content-plain np-management-profiles ">

                <?php foreach( get_field('management') as $manager  ): $manager = (object)$manager; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $manager->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $manager->post_title; ?>">
                        <h3 class="profile-name"><?php echo $manager->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $manager->ID); ?></h6>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>

        <span class="anchor-link" id="team"></span>
        <section class="section team-profile-container np-team-profiles">
            <h2 class="centered-title">Nova Pioneer Team</h2>
            <div class="content-slider-container">

                <ul id="content-slider" class="content-slider">
                <?php foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                    <li>
                        <div class="profile">
                            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                            <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                            <h6 class="profile-role"><?php echo get_field('title', $member->ID); ?></h6>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>

            </div>
        </section>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets-src/js/lightslider/lightslider.js"></script>
<script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
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
