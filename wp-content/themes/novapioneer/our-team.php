<?php
/**
* Template Name: Our Team
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero leadership-team" <?php echo set_post_new_bg()?>data-type="background" data-speed="4">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-pair section-school-leadership">
            <div class="section-navigation">
                <?php $school_head = get_field('head_of_school'); ?>
                <figure class="profile">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $school_head->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $school_head->post_title; ?>" />
                    <h3 class="profile-name"><?php echo $school_head->post_title; ?></h3>
                    <h6 class="profile-role">Head of School</h6>
                </figure>
            </div>

            <div class="section-content">
                <div class="letter-from-principal">
                    <h1>A Note from Our Head of School</h1>
                    <!-- <?php echo get_field('note_from_head_of_school'); ?> -->
                    <p>Dear Parents &amp; Students,</p>
                        <br>

                        <input type="checkbox" class="read-more-state" id="post-123" />

                        <span class="read-more-wrap">

                            <p>It is with great pleasure that I welcome you to Nova Academies. I take this opportunity to tell you something brief about myself, and to introduce you to our school. I have spent my entire career as an educator in Kenya. In the course of my professional engagement, and I have taught, coordinated and served in Management at notable institutions, including Mt. Kenya Academy Senior School (MKASS) where I recently served as School Principal, The Aga Khan Academy Nairobi (AKA,N) and Strathmore University, as a member of the faculty.</p>
                            <br>
                            <span class="read-more-target">
                              <p>In over nineteen years teaching and educational leadership, it has been my privilege to facilitate teaching and learning in different curricula using different approaches. Usually, best practice approaches in education and schooling are to be found in very few schools, so that only a significantly small minority can enjoy this fulfilling experience. I am glad to be part of Nova Academies, because we embrace and offer an approach to education that is much-needed for today’s students.</p>

                              <p>Learning is not merely a transfer of facts and information from teacher to learner, in which the learner is a passive recipient. Rather, it is – and should be – an active experience, with much participation from the learner. In today’s integrated, fast-paced world, our children need to increasingly own more and more of the learning process as they prepare to collaborate and compete on a global level. Nova is introducing an approach to education that is new, and much-needed for today’s students.</p>

                              <p>It is simply not enough anymore for students to sit passively and memorize facts. They need to be fluent in technological skills and master the art of communication. Furthermore, they need to be confident in their analytical and creative thinking abilities and be critical thinkers. They need to have fortitude of character and a positive attitude towards setbacks. They need to be world-ready. This philosophy is at the core of Nova Academies.</p>

                              <p>Nova Academies will graduate young people who are not simply college-bound, but also a class of young leaders. Nova Academies will keep the learners academically engaged, encourage them to embrace challenges as opportunities, and imbue them with courage to venture, to try new things or even revisit familiar learning experiences using a new approach. At Nova Academies, learners will have opportunity to build models and prototypes and conduct experiments as they work collaboratively in teams.</p>

                              <p>To us, it is good to competently use a computer, but far better to also learn, in addition to that, how the device works: So? Take it apart and show them how it’s built, and re-assemble it. Further to that, our pupils will learn to design computer programs using advanced coding language. Nova students are academically engaged, embrace challenges, and aren’t afraid to try new things. Nova students don’t just sit passively in the classroom — they build models and prototypes, they experiment, and they work collaboratively in teams. We don’t just show our kids how to use a computer. We take it apart and show them how it’s built, and then our students learn to design their own programs using advanced coding language.</p>

                              <p>We invite you to come to Nova, to visit our school and to see first-hand the Nova Academies difference. I sincerely look forward to making your acquaintance and availing this educational experience to this generation of scholars.</p>

                              <p>Sincerely,</p>


                              <p>Mr. Gavin Esterhuizen</p>
                          </span>
                      </span>
                      <label for="post-123" class="read-more-trigger button button-tiny button-primary"></label>
                </div>
            </div>
        </section>

        <section class="section section-pair team-profile-container">

                <div class="section-content section-content-plain">
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="/wp-content/uploads/2016/12/female-profile-v2.png" alt="">
                        <h3 class="profile-name">Ms. Seshoka</h3>
                        <h6 class="profile-role">Lead Teacher</h6>
                        <div class="profile-description">

                          <p>Ms. Seshoka is the Lead Teacher for Leadership &amp; Personal Mastery at Nova Pioneer Academy Ormonde. Ms. Seshoka joins Pioneer from the Oprah Winfrey Leadership Academy for Girls, where she was a Senior Teacher and Head of Department for Life Orientation until 2013. Admired by students and colleagues alike for her skills working with students on their personal and leadership development, Ms. Seshoka has been a teacher of English and Life Orientation since 1990.</p>

                        </div>
                    </div>

                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="/wp-content/uploads/2016/12/male-profile-v2.png" alt="">
                        <h3 class="profile-name">Ms. Seshoka</h3>
                        <h6 class="profile-role">Lead Teacher</h6>
                        <div class="profile-description">

                          <p>Ms. Seshoka is the Lead Teacher for Leadership &amp; Personal Mastery at Nova Pioneer Academy Ormonde. Ms. Seshoka joins Pioneer from the Oprah Winfrey Leadership Academy for Girls, where she was a Senior Teacher and Head of Department for Life Orientation until 2013. Admired by students and colleagues alike for her skills working with students on their personal and leadership development, Ms. Seshoka has been a teacher of English and Life Orientation since 1990.</p>

                        </div>
                    </div>

                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="/wp-content/uploads/2016/12/female-profile-v2.png" alt="">
                        <h3 class="profile-name">Ms. Seshoka</h3>
                        <h6 class="profile-role">Lead Teacher</h6>

                    </div>

                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="/wp-content/uploads/2016/12/male-profile-v2.png" alt="">
                        <h3 class="profile-name">Ms. Seshoka</h3>
                        <h6 class="profile-role">Lead Teacher</h6>
                        <div class="profile-description">

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end content -->

        <!-- <section class="section section-pair team-profile-container">

            <div class="section-content section-content-plain">

                <?php $i=1; foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                        <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $member->ID); ?></h6>
                        <div class="profile-description">
                            <input type="checkbox" class="read-more-state" id="post-<?php echo $i?>" />
                            <label for="post-<?php echo $i?>" class="read-more-trigger button button-tiny button-primary"></label>
                            <?php
                                // Get the paragraphs in the post content for implementing the read-more functionality
                                preg_match_all('|<p>(.+?)</p>|', $member->post_content, $matches);
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

                <?php $i++ ; endforeach; ?>

            </div>
        </section> -->


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
