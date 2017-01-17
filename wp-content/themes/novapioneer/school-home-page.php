<?php 
/**
* Template Name: School Homepage
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>



        <section class="section section-hero school-home">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1>Learners are inspired become adaptive, independent thinkers</h1>
                    <a href="<?php echo site_url('/learning'); ?>" class="button button-default button-primary">Learn More</a>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-pair school-description even-section">
            <div class="section-navigation"><h1><?php the_title(); ?></h1></div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <?php echo get_field('summary_intro'); ?>
                </div>
            </div>
        </section>

        <section class="section">

            <div class="general-notices-container school-notices">
            <div class="large-notice-container" style="background-image: url(<?php echo get_field('admission_photo'); ?>);">
                <div class="large-notice">
                    <div class="bar-notice">
                        <div class="contact">
                            <p>General Enquiries Call: <a href="tel:<?php echo get_field('general_enquiries_number'); ?>"><?php echo get_field('general_enquiries_number'); ?> </a></p>
                        </div>
                        <div class="contact">
                            <p>Admission Enquiries Call: <a href="tel:<?php echo get_field('admission_enquiries_number'); ?>"><?php echo get_field('admission_enquiries_number'); ?> </a></p>
                        </div>
                        <div class="contact">
                            <p>Email Us: <a href="mailto:<?php echo get_field('school_email'); ?>"><?php echo get_field('school_email'); ?></a></p>
                        </div>
                    </div>
                    <div class="notice-content">
                        <h1>Learn About Our Admission Process</h1>
                        <?php echo get_field('admission_call_to_action'); ?>
                        <p class="call-to-action"><a href="#" class="button button-large button-secondary" title="">Enrol Now</a></p>
                    </div>
                </div>
            </div>

            <div class="small-notice-container">
                <div class="small-notice" id="rsvp-node">
                    <h1>Nova Pioneer Ormonde Open Day</h1>
                    <h2>15th October, 2016</h2>
                    <p>49 Dorado Avenue, Ormonde</p>
                    <a href="#" class="modal-toggle button button-tiny button-secondary" title="">Send an RSVP</a>
                </div>
                <div class="divider"></div>
                <div class="small-notice">
                    <h1>Nova Pioneer Ormonde September Intake</h1>
                    <h2>Now in Progress</h2>
                    <a href="#" class="button button-tiny button-secondary" title="">Apply Now</a>
                </div>
            </div>

            </div>
        </section>

        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Our Students</h1>
                <a href="#" title="">Meet the Students</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
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

        <div class="divider"></div>

        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Leadership Team</h1>
                <a href="#"  title="">Our team</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <?php echo get_field('leadership_team_description'); ?>
                </div>

                <?php $leadership_team_members = get_field('leadership_team_members'); $x = 0;?>
                <?php foreach($leadership_team_members as $member): if($x >= 2): break; endif; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0];  ?>" alt="<?php $member->post_title; ?>, <?php echo get_field('title', $member->ID); ?>" class="profile-img">
                        <a href="<?php echo get_permalink($member->ID); ?>" class="profile-name" title="<?php $member->post_title; ?>"><?php echo $member->post_title; ?></a>
                        <span class="profile-role"><?php echo get_field('title', $member->ID); ?></span>
                    </div>
                    <? $x++; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <a name="gallery"></a>
        <section class="section-pair section-gallery">

            <div class="image-slider-container">

                <div class="section-navigation">
                    <?php
                        $current_gallery = $_GET['current_gallery'];
                        $images = novap_get_gallery_images($current_gallery);
                    ?>
                    <h1>Gallery</h1>
                    <nav class="gallery-nav">
                        <a href="<?php get_permalink(); ?>?current_gallery=school_grounds#gallery"
                           class="gallery-select <?php if ($current_gallery === 'school_grounds'): echo 'gallery-selected'; endif; ?>">School
                            grounds</a>
                        <a href="<?php get_permalink(); ?>?current_gallery=classrooms#gallery"
                           class="gallery-select <?php if ($current_gallery === 'classrooms'): echo 'gallery-selected'; endif; ?>">Classrooms</a>
                        <a href="<?php get_permalink(); ?>?current_gallery=library#gallery"
                           class="gallery-select <?php if ($current_gallery === 'library'): echo 'gallery-selected'; endif; ?>">Library</a>
                        <a href="<?php get_permalink(); ?>?current_gallery=play_area#gallery"
                           class="gallery-select <?php if ($current_gallery === 'play_area'): echo 'gallery-selected'; endif; ?>">Play
                            Area</a>
                    </nav>
                </div>

                <div class="section-content-item-full">
                    <div class="media gallery">
                        <article id="cc-slider">
                            <?php $im = 1;
                            foreach ($images as $image): $image = (object)$image; ?>
                                <input
                                    checked="<?php if ($im == 1): echo "checked"; endif; ?>"
                                    name="cc-slider"
                                    id="slide<?php echo $im; ?>"
                                    type="radio" />
                                <?php $im++; ?>
                            <?php endforeach; ?>

                            <div id="cc-slides">
                                <div id="overflow">
                                    <div class="inner">
                                        <?php foreach ($images as $image): $image = (object)$image; ?>
                                            <article>
                                                <div class="cctooltip">
                                                    <h3><?php echo $image->caption; ?></h3>
                                                </div>
                                                <img
                                                    src="<?php echo $image->url; ?>" />
                                            </article>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div id="controls">
                                <?php $lb = 1;
                                foreach ($images as $image): $image = (object)$image; ?>
                                    <label for="slide<?php echo $lb; ?>"></label>
                                    <?php $lb++; endforeach; ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <aside>
            <div class="testimonial full-width-quote">
                <?php $testimonial = get_field('testimonial'); ?>
                <div class="spacing-to-center"></div>
                <figure class="full-width-figure">
                    <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID,'thumbnail'); ?>" />
                </figure>
                <blockquote>
                    <svg aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                    </svg>
                    <?php echo $testimonial->post_content; ?>
                    <cite><span><?php echo get_field('reviewer_name', $testimonial->ID)?>,</span> <?php echo get_field('reviewer_title', $testimonial->ID)?></cite>
                </blockquote>
                <div class="spacing-to-center"></div>
            </div>
        </aside>



        <section class="section section-pair section-school-blog">
            <div class="section-navigation">
                <h1>Student Blog</h1>
                <a href="#"  title="">View All Blog Posts</a>
            </div>

            <div class="section-content">
                <?php foreach( get_field('blog_posts') as $blog_post ): $blog_post = (object)$blog_post; ?>
                    
                    <div class="section-content-item section-content-item-third blog-article">
                        <img src="<?php echo get_the_post_thumbnail_url($blog_post->ID,'thumbnail'); ?>" alt="<?php echo $blog_post->post_title; ?>">
                        <a href="<?php echo get_permalink($blog_post->ID); ?>" class="blog-article-title" title="<?php echo $blog_post->post_title; ?>"><?php echo $blog_post->post_title; ?></a>
                        <p class="article-author"><?php echo get_the_author_meta('display_name', get_post_field('post_author', $blog_post->ID) ); ?></p>
                    </div>

                <?php endforeach; ?>
            </div>
        </section>
            <div class="divider"></div>

        <section class="section section-pair section-school-location">
            <div class="section-navigation">
                <h1>Contact Us</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="media">
                        <?php echo novap_render_google_map( get_field('school_latitude'), get_field('school_longitude') ); ?>
                    </div>
                </div>

                <div class="section-content-item section-content-item-half">
                    <div class="contact-info">
                        <span class="phone-contact-one">Call us: <a href="tel:<?php echo get_field('main_phone_number'); ?> "><?php echo get_field('main_phone_number'); ?> </a></span>
                        <span class="phone-contact-two">Admission Enquiries:  <a href="tel:<?php echo get_field('admission_enquiries_number'); ?> "><?php echo get_field('admission_enquiries_number'); ?> </a></span>
                        <span class="email-contact">Email us: <a href="mailto:<?php echo get_field('email_address'); ?>"><?php echo get_field('email_address'); ?></a></span>
                    </div>

                    <div class="contact-info">
                        <?php echo get_field('physical_address'); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <?php get_template_part('includes/partials/content', 'rsvp-modal'); ?>
<?php endif; ?>

<?php get_footer(); ?>
