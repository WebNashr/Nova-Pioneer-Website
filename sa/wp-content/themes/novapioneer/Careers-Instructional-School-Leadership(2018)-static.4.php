<?php
/**
* Template Name: Careers-Instructional-School-Leadership (2018)
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
        <p>Strong, visionary instructional leadership is key to the success of our schools. There are
        various pathways to leadership in Nova Pioneer schools including leadership in the
        classroom, leadership in our curriculum or leadership of a school.</p>
            </article>
        </section>

        <section class="section ">
            <div class="card-container">
                <div class="card">
                    <h2>Classroom Leadership</h2>
                    <p>
                    Help build the first
                    large school network
                    across the continent
                    that creates a
                    generation of leaders
                    and innovators and
                    makes this the African
                    century.
                    </p>
                </div>
                <div class="card">
                    <h2>Instructional & School
                    Leadership</h2>
                    <p>
                    Help build the first
                    large school network
                    across the continent
                    that creates a
                    generation of leaders
                    and innovators and
                    makes this the African
                    century.
                    </p>
                </div>
                <div class="card">
                    <h2>Curriculum & Learning
                    Leadership</h2>
                    <p>
                    Help build the first
                    large school network
                    across the continent
                    that creates a
                    generation of leaders
                    and innovators and
                    makes this the African
                    century.
                    </p>
                </div>

            </div>
        </section>

        <section class="section">
            <article class="article">
                <h3>Why become a school leader at Nova Pioneer?</h3> 
            </article>

            <ol>
                <li>
                <b> We develop you more intensively as a leader than anywhere else</b>
                    Receive leadership coaching across multiple dimensions including
                    instructional leadership, culture leadership and people leadership. Whether
                    you are new on the leadership journey or you have been a leader for many
                    years, you will receive coaching and development as much as you coach others
                    - you never stop growing as a leader at Nova Pioneer.
                </li>
                <li>
                <b>You’re not alone - you’re part of a powerful network</b>
                    Receive leadership coaching across multiple dimensions including
                    instructional leadership, culture leadership and people leadership. Whether
                    you are new on the leadership journey or you have been a leader for many
                    years, you will receive coaching and development as much as you coach others
                    - you never stop growing as a leader at Nova Pioneer.
                </li>
                <li>
                <b>Culture, culture, culture</b>
                    Receive leadership coaching across multiple dimensions including
                    instructional leadership, culture leadership and people leadership. Whether
                    you are new on the leadership journey or you have been a leader for many
                    years, you will receive coaching and development as much as you coach others
                    - you never stop growing as a leader at Nova Pioneer.
                </li>
                <li>
                <b>We develop people leaders, not administrators</b>
                    Receive leadership coaching across multiple dimensions including
                    instructional leadership, culture leadership and people leadership. Whether
                    you are new on the leadership journey or you have been a leader for many
                    years, you will receive coaching and development as much as you coach others
                    - you never stop growing as a leader at Nova Pioneer.
                </li>
            </ol>
            </div>

        </section>


        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our leaders</h2>
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

       <section class="section">
       <section class="faqs-container">
            <article class="article article-inner article-inner-alt ">
                <h2 id="faqs">Frequently Asked Questions</h2>
                <ul class="toggle-list">
                        <li class=" ">
                            <h3 class="toggle-list-title">Do I need to have prior experience in enquiry-based learning?</h3>
                            <div class="toggle-list-content">
                            No. Most of the teachers who join us come from more traditional educational
                                backgrounds so we provide rigorous training to make sure you are equipped
                                and prepared to deliver amazing enquiry-based lessons.
                            </div>
                        </li>
                        <li class=" ">
                            <h3 class="toggle-list-title">What is the difference between a Resident and Apprentice teacher?</h3>
                            <div class="toggle-list-content">Resident teachers are able to lead classrooms and have strong content
                                knowledge relevant to what they teach. They are qualified teachers with
                                classroom experience or have a strong ability to lead a classroom
                                independently. Apprentice teachers are teachers who are studying toward a
                                teacher qualification with an eagerness to learn and grow into a Resident
                                teacher. They provide support in the classroom and get more and more
                                teaching responsibility as they grow. Click here to read more about the
                                Apprentice program . (go to apprentice page)
                            </div>
                        </li>
                        <li class=" ">
                            <h3 class="toggle-list-title">What qualifications do I need?</h3>
                            <div class="toggle-list-content">
                                To teach as a Resident teacher at Nova Pioneer you need a teacher’s qualification.
                                If you do not yet have a teaching qualification and are an aspiring teacher you
                                can join our teacher apprentice program and get valuable teacher experience
                                and coaching while you study. Apprentice teachers must have just qualified
                                from their final year of teacher studies or be pursuing a teaching degree to
                                qualify for the apprentice programme.
                            </div>
                        </li>
                        <li class=" ">
                            <h3 class="toggle-list-title">How many terms does Nova Pioneer have?</h3>
                            <div class="toggle-list-content">
                                At Nova Pioneer we follow a three term system.
                            </div>
                        </li>
                </ul>
            </article>
        </section>
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
