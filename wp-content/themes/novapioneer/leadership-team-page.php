<?php

/**
 * Template Name: Leadership Team Page
 */

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero leadership-team" <?php echo set_post_new_bg()?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>
        <section class="section section-pair team-profile-container">
            <div class="section-content section-content-plain global-leaders-profiles">
                <div class="section-content-item section-content-item-third profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Chinezi Chijioke</h3>
                    <h6 class="profile-role">CEO</h6>
                    <div class="profile-description">
                      <input type="checkbox" class="read-more-state" id="post-1" />
                      <label for="post-1" class="read-more-trigger button button-tiny button-primary"></label>
                      <p class="read-more-wrap">Chinezi previously served as Head of McKinsey &amp; Company’s African Education Practice, where he worked for 8 years<span class="read-more-target"> gaining experience with over 25 countries’ school systems across the world. Chinezi started his career as a secondary school mathematics teacher, and has founded youth leadership programmes in South Africa and Nigeria. Chinezi holds an MBA and a Masters in Education from Stanford University, Bachelors in Psychology and an Honours Certificate in African Studies from Harvard University.</span></p>

                    </div>
                </div>

                <div class="section-content-item section-content-item-third profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Damany Gibbs</h3>
                    <h6 class="profile-role">COO</h6>
                    <div class="profile-description">
                      <input type="checkbox" class="read-more-state" id="post-2" />
                      <label for="post-2" class="read-more-trigger button button-tiny button-primary"></label>
                      <p class="read-more-wrap">Damany was previously a founding team member of Bain &amp; Company’s Africa practice. Damany started his career with<span class="read-more-target"> Morgan Stanley and has worked across New York, London and South Africa. Damany holds an MBA from Harvard Business School, a Masters in Economic &amp; Social History from Oxford University where he was a Rhodes Scholar and a Bachelors in Operations Research &amp; Industrial Engineering from Cornell University.</span></p>
                    </div>

                </div>

                <div class="section-content-item section-content-item-third profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Oliver Sabot</h3>
                    <h6 class="profile-role">Managing Director</h6>
                    <div class="profile-description">
                      <input type="checkbox" class="read-more-state" id="post-3" />
                      <label for="post-3" class="read-more-trigger button button-tiny button-primary"></label>
                      <p class="read-more-wrap">Oliver was previously Managing Director at Spire, where he used his experience building and running highly effective<span class="read-more-target"> learning and employability programs for top companies. He previously served as the Executive VP for Global Programs at the Clinton Health Access Initiative and is co-founder and board member of Kepler, an innovative new university model in East Africa.</span></p>

                    </div>
                </div>

                <div class="section-content-item section-content-item-third profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Dai Ellis</h3>
                    <h6 class="profile-role">Managing Director</h6>
                    <div class="profile-description">
                      <input type="checkbox" class="read-more-state" id="post-4" />
                      <label for="post-4" class="read-more-trigger button button-tiny button-primary"></label>
                      <p class="read-more-wrap">Dai Ellis served as CEO of Excel Academy Charter Schools, one of the highest-performing school networks in the United <span class="read-more-target">States. He is also a co-founder and board member of Kepler. Previously, Dai led the Clinton Foundation`s work on healthcare products in the developing world. Dai is a graduate of Yale Law School and earned his bachelor`s degree at Harvard University.</span></p>

                    </div>
                </div>

                <div class="section-content-item section-content-item-third profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Chris Khaemba</h3>
                    <h6 class="profile-role">Director</h6>
                    <div class="profile-description">
                      <input type="checkbox" class="read-more-state" id="post-6" />
                      <label for="post-6" class="read-more-trigger button button-tiny button-primary"></label>
                      <p class="read-more-wrap">Mr. Khaemba is the former headmaster of Alliance High School and founding Dean of the African Leadership Academy in South <span class="read-more-target">Africa. He is widely regarded as one of Africa’s leading educators and currently serves Nairobi County as the executive for education, youth affairs, children, culture and social services.</span></p>

                    </div>
                </div>

            </div>
        </section>

        <section class="section section-pair team-profile-container">
            <div class="section-content section-content-plain management-profiles ">
                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Moses Wachira</h3>
                    <h6 class="profile-role">Operations Associate, Kenya</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Irene Marusoi</h3>
                    <h6 class="profile-role">Learning Designer, Kenya</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Natalie Coleman</h3>
                    <h6 class="profile-role">Director of Marketing</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Aditya Shah</h3>
                    <h6 class="profile-role">Director of Operations, Kenya</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Brenda Sanau</h3>
                    <h6 class="profile-role">Role, South Africa</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Xolani Mabaso</h3>
                    <h6 class="profile-role">Finance Manager, South Africa</h6>
                </div>

                 <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Doreen Imelda</h3>
                    <h6 class="profile-role">Operations Manager, Kenya</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Josh Wang</h3>
                    <h6 class="profile-role">Growth &amp; Expansion Manager</h6>
                </div>

                 <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Lea Cross</h3>
                    <h6 class="profile-role">Chief of Staff, South Africa</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Michelle Schmidt</h3>
                    <h6 class="profile-role">Learning Designer, Kenya</h6>
                </div>

                 <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Mbali Zondi</h3>
                    <h6 class="profile-role">Talent Management, Senior Associate, South Africa</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Jane Kimani</h3>
                    <h6 class="profile-role">Director of Partnerships</h6>
                </div>

                 <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Lillian Nyaranga</h3>
                    <h6 class="profile-role">Curriculum Designer, Kenya</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Lesego Letlape</h3>
                    <h6 class="profile-role">Marketing Associate, South Africa</h6>
                </div>

                 <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Ema Land</h3>
                    <h6 class="profile-role">Director of Academics</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Assindi Hawi</h3>
                    <h6 class="profile-role">Partnerships Associate</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Ali Fisher Sweet</h3>
                    <h6 class="profile-role">Director of Talent Management</h6>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-photos/chinezi-profile-pic-2.jpg" alt="">
                    <h3 class="profile-name">Nnenna Nwachuku</h3>
                    <h6 class="profile-role">Head of School, South Africa</h6>
                </div>
            </div>
        </section>







        <!-- <section class="section section-pair team-profile-container">

            <div class="section-content section-content-plain">
                <?php $i = 0;foreach( get_field('management') as $manager): $manager = (object)$manager; ?>
                    <div class="section-content-item section-content-item-sixth profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $manager->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $manager->post_title; ?>">
                        <h3 class="profile-name"><?php echo $manager->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $manager->ID); ?></h6>
                        <div class="profile-description">
                            <input type="checkbox" class="read-more-state" id="post-<?php echo $i?>" />
                            <label for="post-<?php echo $i?>" class="read-more-trigger button button-tiny button-primary"></label>
                            <?php

                                preg_match_all('|<p>(.+?)</p>|', $manager->post_content, $matches);
                                $description_paragraphs = $matches[1];
                            ?>
                            <div class="read-more-wrap">
                                <p><?php echo array_shift($description_paragraphs); ?></p>
                                <span class="read-more-target">
                                    <?php foreach($description_paragraphs as $paragraph): ?>
                                        <p><?php echo $paragraph; ?></p>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php $i ++ ;endforeach; ?>
            </div>

        </section>

        <section class="section section-pair team-profile-container">

            <div class="section-content section-content-plain">
                <?php foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                        <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $member->ID); ?></h6>
                    </div>
                <?php endforeach; ?>
            </div>

        </section> -->


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
