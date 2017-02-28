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

              <div class="section-school-list-select">
                  <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/image-wide-2-sa.jpg" alt=""></p>
                  <h3>Jackal Creek</h3>
                  <div class="school-summary">
                    <p><strong>Day</strong> School</p>
                    <p>Ages <strong>3-14</strong></p>
                    <p>Co-ed <strong>Pre-Primary and Primary</strong></p>
                    <p>Grades <strong>000, 00, R &amp; 1</strong></p>
                    <a href="#" class="button button-tiny button-primary"> Read More</a>
                  </div>
              </div>

              <div class="section-school-list-select">

                  <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/image-wide-2-sa.jpg" alt=""></p>
                  <h3>Midrand</h3>
                  <div class="school-summary">
                    <p><strong>Day</strong> School</p>
                    <p>Ages <strong>3-14</strong></p>
                    <p>Co-ed <strong>Pre-Primary and Primary</strong></p>
                    <p>Grades <strong>000, 00, R &amp; 1</strong></p>
                    <a href="#" class="button button-tiny button-primary"> Read More</a>
                  </div>

              </div>

              <div class="section-school-list-select">

                  <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/image-wide-2-sa.jpg" alt=""></p>
                  <h3>Ormonde</h3>
                  <!-- <h1><a href="#" class="school-link" title="">Ormonde</a></h1> -->
                  <div class="school-summary">
                    <p><strong>Day</strong> School</p>
                    <p>Ages <strong>3-14</strong></p>
                    <p>Co-ed <strong>Pre-Primary and Primary</strong></p>
                    <p>Grades <strong>000, 00, R &amp; 1</strong></p>
                    <a href="#" class="button button-tiny button-primary"> Read More</a>
                  </div>

              </div>

              <!-- <div class="section-school-list-select">

                  <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/image-wide-2-sa.jpg" alt=""></p>
                  <h3>New School</h3>
                  <div class="school-summary">
                    <p><strong>Day</strong> School</p>
                    <p>Ages <strong>3-14</strong></p>
                    <p>Co-ed <strong>Pre-Primary and Primary</strong></p>
                    <p>Grades <strong>000, 00, R &amp; 1</strong></p>
                    <a href="#" class="button button-tiny button-primary"> Read More</a>
                  </div>

              </div> -->
        </section>
      </section>

        <!-- <section class="section section-school-list">
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
        </section> -->


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
        <!-- testimonial slider to come here -->
        <!-- <aside>
              <div class=" testimonial full-width-quote bottom-quote">
                <div class=" section content-slider-container">
                <ul id="testimonial-slider" class="content-slider">
                  <li class="single-testimonial">
                  <div class="spacing-to-center"></div>
                    <figure class="full-width-figure">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/parent-profile-pic.jpg" alt="" class="">
                    </figure>
                    <blockquote>
                      <svg aria-hidden="true">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                      </svg>
                        <p>I wanted to tell you that my son is deliriously happy. He loves going to Pioneer! I can’t tell you just how profound this experience is for this boy. I am just so happy for him. I really like their teaching philosophy of not spoon feeding the kids but giving them problems that they can come up with solutions to.
                        <cite><span>Bridget,</span> Nova Pioneer Parent</cite></p>
                    </blockquote>
                    <div class="spacing-to-center"></div>
                  </li>
                  <li>
                  <div class="spacing-to-center"></div>
                    <figure class="full-width-figure">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/parent-profile-pic.jpg" alt="" class="">
                    </figure>
                    <blockquote>

                      <svg aria-hidden="true">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                      </svg>
                        I wanted to tell you that my son is deliriously happy. He loves going to Pioneer! I can’t tell you just how profound this experience is for this boy. I am just so happy for him. I really like their teaching philosophy of not spoon feeding the kids but giving them problems that they can come up with solutions to.
                        <cite><span>Bridget,</span> Nova Pioneer Parent</cite>
                    </blockquote>
                    <div class="spacing-to-center"></div>
                  </li>
                </ul>
            </div>
            </div>
        </aside> -->


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

<script type="text/javascript">
$(document).ready(function() {
    $("#testimonial-slider").lightSlider({
        item: 1,
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

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
