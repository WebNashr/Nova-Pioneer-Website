<?php
/**
*
* Template Name: Country Home Page
*/
get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <section class="section section-hero country-home">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1>Preparing Youth in Africa for Global Success</h1>
                    <a href="<?php echo site_url('/learning/'); ?>" class="button button-default button-primary">Learn More</a>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-school-list">
            <?php $schools = get_field('schools'); ?>
            <?php foreach($schools as $school): ?>
                <div class="section-school-list-select">
                    <a href="<?php echo get_permalink($school->ID); ?>">
                        <p class="school-photo"><img src="<?php echo get_the_post_thumbnail_url($school->ID,'thumbnail'); ?>" alt=""></p>
                        <h3><?php echo $school->post_title; ?></h3>
                        <div class="school-summary"><?php echo get_field('summary_intro', $school->ID); ?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </section>


        <section class="section section-pair even-section">
            <div class="section-navigation">
                <h1>Our Students</h1>
                <a href="#"  title="">Meet the Students</a>
            </div>

            <div class="section-content even-section">
                <div class="section-content-item section-content-item-half">
                    <?php echo get_field('our_students_description'); ?>

                        <div class="testimonial pull-quote">
                            <?php
                                $our_students_video  = get_field('our_students_video');
                                $vid_caption = get_field('video_caption', $our_students_video->ID);
                                $student_name = get_field('student_name', $our_students_video->ID);
                                $video = get_field('video', $our_students_video->ID);
                            ?>
                            <blockquote>
                                <svg aria-hidden="true">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                </svg>
                                <?php echo $vid_caption; ?>
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
                <h1>Learning at Nova Pioneer</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="testimonial pull-quote">
                        <?php
                            $learning_at_novapioneer_video  = get_field('learning_at_novapioneer_video');
                            $vid_caption = get_field('video_caption', $learning_at_novapioneer_video->ID);
                            $caption_speaker = get_field('caption_speaker', $learning_at_novapioneer_video->ID);
                            $caption_speaker_title = get_field('caption_speaker_title', $learning_at_novapioneer_video->ID);
                            $video = get_field('video', $learning_at_novapioneer_video->ID);
                        ?>
                        <blockquote>
                            <svg aria-hidden="true">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                            <?php echo $vid_caption; ?>
                            <cite><span><?php echo $caption_speaker; ?>,</span> <?php echo $caption_speaker_title; ?></cite>
                        </blockquote>
                    </div>
                </div>
                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video ">
                        <?php echo $video; ?>
                    </div>
                </div>
            </div>
        </section>

        <aside>
            <figure class="full-width-image parallax">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p>We are developing generations of innovators and leaders who will shape the African Century.<a href="<?php echo site_url('/learning/'); ?>" class="" title="">Learn More</a> </p>
                    </figcaption>
                </div>
            </figure>
        </aside>

        <div class="full-width-container">
            <section class="section section-pair">
                <?php
                    $video_from_influencer          = get_field('video_from_influencer');
                    $vid_caption = get_field('video_caption', $video_from_influencer->ID);
                    $caption_speaker = get_field('caption_speaker', $video_from_influencer->ID);
                    $caption_speaker_title = get_field('caption_speaker_title', $video_from_influencer->ID);
                    $video = get_field('video', $video_from_influencer->ID);
                ?>
                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video">
                        <?php echo $video; ?>
                    </div>
                </div>
                <div class="section-content-item section-content-item-half">
                    <h1 class="full-width-heading">Video from Influencer</h1>
                    <div class="testimonial pull-quote">
                        <blockquote>
                            <svg aria-hidden="true">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                            <?php echo $vid_caption; ?>
                            <cite><span><?php echo $caption_speaker; ?>,</span> <?php echo $caption_speaker_title; ?></cite>
                        </blockquote>
                    </div>
                </div>
            </section>
        </div>


        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Leadership Team</h1>
                <a href="<?php echo site_url('/leadership-team'); ?>">View the team</a>
            </div>

            <div class="section-content">
                <?php $leadership_team_members        = get_field('leadership_team_members'); ?>
                <?php foreach($leadership_team_members as $member): ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0];  ?>" alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>" class="profile-img">
                        <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section even-section">
                <div class="general-notices-container">
                <div class="large-notice-container">
                    <div class="large-notice">
                        <div class="notice-content">
                            <?php echo get_field('admission_call_to_action'); ?>
                            <p class="call-to-action"><a href="<?php echo site_url('/admission-process')?>" class="button button-tiny button-secondary" title="">Apply Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="small-notice-container">
                    <?php $events = get_field('events'); ?>
                    <?php foreach($events as $event): ?>
                    <div class="small-notice">
                        <h1><?php echo $event->post_title; ?></h1>
                        <h2><?php echo get_field('date', $event->ID); ?></h2>
                        <p><?php echo get_field('venue', $event->ID); ?></p>
                        <button class="modal-toggle button button-tiny button-secondary">Send an RSVP</button>
                    </div>
                    <!-- <div class="divider"></div> -->
                    <?php endforeach; ?>
                </div>

                </div>
        </section>

        <aside>
            <div class="testimonial full-width-quote bottom-quote">
                <?php  $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="spacing-to-center"></div>
                    <figure class="full-width-figure">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" alt="" class="">
                    </figure>
                    <blockquote>
                        <svg aria-hidden="true">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                        </svg>
                        <?php the_content()?>
                        <cite><span><?php the_field('reviewer_name')?>,</span> <?php the_field('reviewer_title')?></cite>
                    </blockquote>
                    <div class="spacing-to-center"></div>
                <?php  endwhile; wp_reset_query();?>
            </div>
        </aside>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <?php get_template_part('includes/partials/content', 'rsvp-modal'); ?>
<?php endif; ?>

<?php get_footer(); ?>
