<?php
/**
*
* Template Name: Country Home Page
*/
get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post();
    
        $our_students_description       = get_field('our_students_description');
        $our_students_video             = get_field('our_students_video');
        $learning_at_novapioneer_video  = get_field('learning_at_novapioneer_video');
        $leadership_team_members        = get_field('leadership_team_members');
        $video_from_influencer          = get_field('video_from_influencer');
        $events                         = get_field('events');
        $admission_call_to_action       = get_field('admission_call_to_action');
        $admission_contacts             = get_field('admission_contacts');
        $testimonial                    = get_field('testimonial');
        $schools                        = get_field('schools');    
    ?>


        <section class="section section-hero country-home">
            <div class="container hero-container">
                <!-- <heading class="hero-heading">
                    <h1>Preparing Youth in Africa for Global Success</h1>
                </heading> -->
                <div class="main-callout-box">
                    <hr>
                    <h1>Preparing Youth in Africa for Global Success</h1>
                    <!-- <p>We foster a curiosity and a love of learning, a commitment to deep understanding, and learning how to think and how to learn</p> -->
                    <a href="#" class="button button-default button-primary">Learn More</a>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-school-list">
            <?php foreach($schools as $school): ?>
                <div class="section-school-list-select">
                    <p class="school-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/ormonde-school.jpg" alt=""></p>
                    <h1><a href="<?php echo get_permalink($school->ID); ?>" class="school-link" title=""><?php echo $school->post_title; ?></a></h1>
                    <p class="school-summary"><?php echo get_field('summary', $school->ID); ?></p>
                </div>
            <?php endforeach; ?>
        </section>


        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Our Students</h1>
                <a href="#"  title="">Meet the Students</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <?php echo $our_students_description; ?>

                        <div class="testimonial pull-quote">
                            <?php 
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

        <div class="divider"></div>

        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Learning at Nova Pioneer</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="testimonial pull-quote">
                        <?php 
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
            <figure class="full-width-image">
                <div class="section-content full-image-caption">
                    <figcaption>
                        <p>We are developing generations of innovators and leaders who will shape the African Century.<a href="#" class="" title="">Learn More</a> </p>
                    </figcaption>
                </div>
            </figure>
        </aside>

        <div class="full-width-container">
            <section class="section section-pair">
                <?php 
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
                <?php foreach($leadership_team_members as $member): ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0];  ?>" alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>" class="profile-img">
                        <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section">
                <div class="general-notices-container">
                <div class="large-notice-container">
                    <div class="large-notice">
                        <div class="notice-content">                            
                            <?php echo $admission_call_to_action; ?>
                            <p class="call-to-action"><a href="#" class="button button-large button-secondary" title="">Enrol Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="small-notice-container">
                    <?php foreach($events as $event): ?>
                    <div class="small-notice">
                        <h1><?php echo $event->post_title; ?></h1>
                        <h2><?php echo get_field('date', $event->ID); ?></h2>
                        <p><?php echo get_field('venue', $event->ID); ?></p>
                        <button class="modal-toggle button button-tiny button-secondary">Send an RSVP</button>
                    </div>
                    <div class="divider"></div>
                    <?php endforeach; ?>
                </div>

                </div>
        </section>

        <aside>
            <div class="testimonial full-width-quote bottom-quote">
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
            </div>
        </aside>

        <section class="section section-pair section-subscribe">
            <div class="section-navigation">
                <h1>Stay Updated</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-full">
                    <header>
                        <p>Enter your email address below and receive the latest Nova Pioneer news, upcoming events and admission opportunities.</p>
                    </header>

                    <form action="" method="POST">
                        <fieldset class="sign-up" >
                            <input name="email" placeholder="Your Email Address" class="" type="text">
                            <select>
                                <option value="Please Select Your Area of Interest">Please Select Your Area of Interest</option>
                                <option value="School Admissions">School Admissions</option>
                                <option value="School Events">School Events</option>
                                <option value="Latest News">Latest News</option>
                            </select>
                            <input name="Sign Up" value="Sign Up" class="button button-default button-primary" style="" type="submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<!-- page-modal -->
<div class="modal">
    <span class="modal-toggle modal-close">×</span>

    <div class="modal-container">
        <header class="modal-header">
            <img class="modal-logo" src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg" alt="">
            <div class="modal-title">
                <h2>Ormonde School</h2>
                <h1>Open Day</h1>
                <time datetime="2017-10-15 09:00+02:00">15th October, 2017</time>
                <address>49 Dorado Avenue, Ormonde, Johannesburg, South Africa</address>
            </div>
        </header>

        <!-- <p>We hope you will able to make it for our 2017 Open Day. Please confirm your attendance by completing the form below.</p> -->

        <form action="" class="rsvp">
            <fieldset>
                <label for="name">Name</label>
                <input type="text" id="name" required autofocus>
            </fieldset>

            <fieldset>
                <label for="email">Email</label>
                <input type="email" id="email">
            </fieldset>

            <fieldset>
                <label for="guests">Guests</label>
                <input type="text" id="guests" min="0" maxlength="1">
            </fieldset>

            <fieldset>
                <label for="">Attendance</label>
                <span class="radio-pair">
                    <label for="yes" class="radio-label">Yes</label>
                    <input type="radio" value="yes" id="yes" class="radio-button" checked>
                </span>
                <span class="radio-pair">
                    <label for="no" class="radio-label">No</label>
                    <input type="radio" value="no" id="no" class="radio-button">
                </span>
                <span class="radio-pair">
                    <label for="maybe" class="radio-label">Maybe</label>
                    <input type="radio" value="maybe" id="maybe" class="radio-button">
                </span>
            </fieldset>

            <fieldset>
                <!-- <label for="email">Email</label> -->
                <input type="submit" id="submit" value="Send">
            </fieldset>
        </form>
    </div>
</div>
<!-- end page-modal -->
<?php get_footer(); ?>