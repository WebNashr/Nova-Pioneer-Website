<?php
/**
* Template Name: Careers-Grow-with-us (2018)
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        

        <section class="section">
            <article class="article">
                <p>You are the master of your journey at Nova Pioneer, the captain of your ship. Through
                    intense practice, dedication, coaching and support we help you to find your best
                    place in the organisation, whether you are a Resident teacher hoping to become a
                    Dean of Instruction or an Admissions Associate aspiring to be a Marketing Director.</p>
            </article>
        </section><section class="section">
            <div class="">
                <h3>DON'T FORGET TO STRETCH!</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>FEEDBACK, FEEDBACK, FEEDBACK</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>FALLING FORWARD</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>STAYING ON TRACK</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>YOUR CAREER ROAD MAP</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
        </section>

        <section class="section">
            <article class="article">
                <h3>professional development programmes</h3> 
                <ol>
                    <li>Apprentice Teacher Programme – for new teachers</li>
                    <li>Emerging Leader Programme – for Novaneers on a leadership trajectory
                        within the organisation</li>
                    <li>School Leader Programme – for Existing and Aspiring School Leaders</li>
                </ol>
            </article>

            <div class="card-container">
            </div>

        </section>


                <section class="section">
                    <div class="button-wrap">
                        <a href="http://novaacademies.applytojob.com/" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
                </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
