<?php
/**
*
* Template Name: Country Home Page
*/
get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <section class="section section-hero country-home" data-type="background" data-speed="4">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title">Preparing Youth in Africa for Global Success</h1>
                    <!-- <a href="/<?php echo site_url('/learning/'); ?>" class="button button-default button-primary">Learn More</a> -->
                </div>
            </div>
        </section>

        <div class="trigger"></div>
        <section class="section" style="padding:auto 0;">
          <section><h2 style="text-align: center;">Select a School</h2></section>
        <div class="section-school-list">
            <?php $schools = get_field('schools'); ?>
            <?php foreach($schools as $school): $school = (object)$school; ?>
                <div class="section-school-list-select">
                    <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/image-wide-2-sa.jpg" alt=""></p>
                    <h3><?php echo $school->post_title; ?></h3>
                    <div class="school-summary">
                    <p><?php echo get_field('school_gender', $school->ID); ?></p>
                    <p><?php echo get_field('booarding_or_day_school', $school->ID); ?></p>
                    <p><?php echo get_field('school_grades', $school->ID); ?></p>
                    <p><?php echo get_field('school_type', $school->ID); ?></p>
                    <p><?php echo get_field('school_curriculumn', $school->ID); ?></p>
                    <a href="<?php echo get_permalink($school->ID); ?>" class="button button-tiny button-primary" target="_blank"> Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
      </section>


        <section class="section section-pair even-section">
            <div class="section-navigation">
                <h2>Our Students</h2>
                <a href="<?php echo site_url('/meet-the-students'); ?>" class="button button-small button-primary" title="">Meet the Students</a>
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
                <h2>Learning at Nova Pioneer</h2>
                <a href="<?php echo site_url('/learning'); ?>" class="button button-small button-primary" title="">Learn More</a>
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

        <aside >
            <!-- <figure class="full-width-image parallax"> -->
              <figure class="full-width-image parallax" data-type="background" data-speed="7">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p>We are developing generations of innovators and leaders who will shape the African Century.<a href="<?php echo site_url('/learning/'); ?>" class="" >Learn More</a> </p>
                    </figcaption>
                </div>
            </figure>
        </aside>

        <div class="full-width-container" style="margin-bottom:0;">
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
                    <h2 class="full-width-heading">Video from Influencer</h2>
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
                <h2>Global Leadership Team</h2>
                <a href="<?php echo site_url('/global-leadership-team'); ?>" class="button button-small button-primary" title="">Meet the team</a>
            </div>

            <div class="section-content">
                <?php $leadership_team_members        = get_field('leadership_team_members'); ?>
                <?php foreach($leadership_team_members as $member): ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0];  ?>" alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>" class="profile-img">
                        <h3 class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></h3>
                        <h6 class="profile-role"><?php echo get_field('title', $member->ID); ?></h6>
                        <!-- <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span> -->
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
                            <p class="call-to-action"><a href="<?php echo site_url('/admission-process')?>" class="button button-tiny button-secondary" >Apply Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="small-notice-container">
                    <?php echo get_nova_events();?>
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
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
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
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <!-- <?php // get_template_part('includes/partials/content', 'rsvp-modal'); ?> no longer necessary -->
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
