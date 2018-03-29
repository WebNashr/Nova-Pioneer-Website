<?php
/**
* Template Name: Careers-Support-Functions (2018)
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
                <h3>Why work at Nova Pioneer? </h3> 
                <p>From developing systems and processes to helping us work more efficiently, to
                thinking about scale as we launch new campuses across the continent, to developing
                strategies that attract world-class talent to our organisation, our Central Teams think
                big and are creative and innovative in how they approach problems. They are doing
                exciting work to further our mission to develop leaders and innovators for Africa.</p>
            </article>
        </section>

        <section class="section">
            <div class="">
                <h3>LEARNING DESIGN</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>FINANCE</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>MARKETING</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>OPERATIONS</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
            <div class="">
                <h3>TALENT</h3>
                <p>
                Our learning design team are the experts behind developing enquiry-based curricula.
                They ensure that we hold a high bar when it comes to delivering rigorous,
                student-centered learning that pushes students to think critically and take ownership
                of their own learning.
                </p>
            </div>
        </section>

        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our team</h2>
            <div class="section-content section-content-plain np-team-profiles">
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="../../wp-admin/images/avatar_placeholder_large.png" alt="">
                            </div>
                            <h3 class="profile-name">Name</h3>
                            <h5 class="profile-role">Role</h5>
                            <h5 class="profile-role">Quote</h5>
                            <a href="#">Link to full profile</a>
                        </div> 
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="../../wp-admin/images/avatar_placeholder_large.png" alt="">
                            </div>
                            <h3 class="profile-name">Name</h3>
                            <h5 class="profile-role">Role</h5>
                            <h5 class="profile-role">Quote</h5>
                            <a href="#">Link to full profile</a>
                        </div> 
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="../../wp-admin/images/avatar_placeholder_large.png" alt="">
                            </div>
                            <h3 class="profile-name">Name</h3>
                            <h5 class="profile-role">Role</h5>
                            <h5 class="profile-role">Quote</h5>
                            <a href="#">Link to full profile</a>
                        </div> 
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="../../wp-admin/images/avatar_placeholder_large.png" alt="">
                            </div>
                            <h3 class="profile-name">Name</h3>
                            <h5 class="profile-role">Role</h5>
                            <h5 class="profile-role">Quote</h5>
                            <a href="#">Link to full profile</a>
                        </div> 
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
