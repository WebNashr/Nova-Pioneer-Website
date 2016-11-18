<?php 
/**
* Template Name: School Homepage
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $main_hero_section_title = get_field('main_hero_section_title');
        $callout_box = get_field('callout_box');
        $school_type = get_field('school_type');
        $minimum_age = get_field('minimum_age');
        $maximum_age = get_field('maximum_age');
        $lowest_grade = get_field('lowest_grade');
        $highest_grade = get_field('highest_grade');
        $curriculum = get_field('curriculum');
        $admission_call_to_action = get_field('admission_call_to_action');
        $admission_photo = get_field('admission_photo');
        $admission_contacts = get_field('admission_contacts');
        $events = get_field('events');
        $leadership_team_description = get_field('leadership_team_description');
        $leadership_team_members = get_field('leadership_team_members');
        $our_students_video = get_field('our_students_video');
        $gallery_section = get_field('gallery_section');
        $testimonial = get_field('testimonial');
        $blog_posts = get_field('blog_posts');
        $contact_us_content = get_field('contact_us_content');
        $school_latitude = get_field('school_latitude');
        $school_longitude = get_field('school_longitude');    
    
    ?>

        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
            </header>

            <section>
                <h2>Hero Section Title</h2>
                <?php echo $main_hero_section_title; ?>
            </section>

            <section>
                <h2>Callout Box</h2>
                <?php echo $callout_box; ?>
            </section>

            <section>
                <h2>School Type</h2>
                <?php echo $school_type; ?>
            </section>

            <section>
                <h2>Minimum Age</h2>
                <?php echo $minimum_age; ?>
            </section>

            <section>
                <h2>Maximum Age</h2>
                <?php echo $maximum_age; ?>
            </section>

            <section>
                <h2>Lowest Grade</h2>
                <?php echo $lowest_grade; ?>
            </section>

            <section>
                <h2>Highest Grade</h2>
                <?php echo $highest_grade; ?>
            </section>

            <section>
                <h2>Curriculum</h2>
                <?php echo $curriculum; ?>
            </section>

            <section>
                <h2>Admission Call to Action</h2>
                <?php echo $admission_call_to_action; ?>
            </section>

            <section>
                <h2>Admission Photo</h2>
                <img src="<?php echo $admission_photo; ?>" />
            </section>

            <section>
                <h2>Admission Contacts</h2>
                <?php foreach($admission_contacts as $contact): $contact = (object)$contact; ?>
                    <div>
                        <label><?php echo $contact->label; ?></label>
                        <?php echo $contact->contact; ?>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Events</h2>
                <?php foreach($events as $event): $event = (object)$event; ?>
                    <div>
                        <h5><?php echo $event->post_title; ?></h5>
                        <p><?php echo get_field('date', $event->ID); ?></p>
                        <a href="<?php echo get_permalink($event->ID); ?>">RSVP</a>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Leadership Team Description</h2>
                <?php echo $leadership_team_description; ?>
            </section>

            <section>
                <h2>Leadership Team Members</h2>
                <?php foreach($leadership_team_members as $member): $member = (object)$member; ?>
                    <div>
                        <h5><?php echo $member->post_title; ?></h5>
                        <p><?php echo get_field('title', $member->ID); ?></p>
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'single-post-thumbnail'); ?>" />
                    </div>
                <?php endforeach; ?>
            </section>


            <section>
                <h2>Our Students Video</h2>
                <?php echo $our_students_video; ?>
            </section>

            <section>
                <h2>Gallery Section</h2>
                <?php foreach($gallery_section as $section): $section = (object)$section; ?>
                    <div>
                        <h5><?php echo $section->category; ?></h5>

                        <div class="gallery">

                            <h2>Classroom Pictures</h2>

                            <div class="images">
                                <?php foreach($section->images as $pic): $pic = (object)$pic; ?>

                                    <img src="<?php echo $pic->url; ?>" alt="<?php echo $pic->caption; ?>" />

                                <?php endforeach; ?>     
                            </div>


                        </div>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Testimonial</h2>
                <blockquote cite="<?php echo $testimonial->post_title; ?>">
                    <?php echo $testimonial->post_content; ?>
                    <h6><?php echo $testimonial->post_title; ?></h6>
                </blockquote>
            </section>

            <section>
                <h2>Blog Posts</h2>
                <?php foreach($blog_posts as $bpost): $bpost = (object)$bpost; ?>
                    <div>
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($bpost->ID), 'single-post-thumbnail'); ?>" />
                        <h5><?php echo $bpost->post_title; ?></h5>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Contact Us</h2>
                <?php echo $contact_us_content; ?>
            </section>

            <section>
                <h2>Map</h2>
                <?php novap_render_google_map($school_latitude, $school_longitude); ?>
            </section>

            
        </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
