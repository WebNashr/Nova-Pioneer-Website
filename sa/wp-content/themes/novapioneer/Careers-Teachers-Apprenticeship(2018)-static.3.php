<?php
/**
* Template Name: Careers-Teachers-Apprenticeship (2018)
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
                <p>The Nova Pioneer Apprentice Teacher Program is a highly competitive, one-year
                teacher preparation program. Through hands-on experience in Nova Pioneer schools,
                mentorship, and tailored professional development, Apprentice teachers will develop
                the skills necessary for leading high-achieving classrooms. After completing the
                programme and studies, Apprentices are very strongly considered for teaching roles
                that would begin after completion of their studies.</p>
            </article>
        </section>

        <section class="section">
            <article class="article">
                <h1>What the program offers</h1>
                <ul>
                    <li><b>Freedom to fail:</b> starting out as a new teacher requires you to step out and try
                    new things - some of which you might fail at. Start your teaching journey in an
                    environment that encourages you to take risks, take on challenges because we
                    recognise that failure allows for learning and leads to growth.</li>
                    <li><b>Freedom to fail:</b> starting out as a new teacher requires you to step out and try
                    new things - some of which you might fail at. Start your teaching journey in an
                    environment that encourages you to take risks, take on challenges because we
                    recognise that failure allows for learning and leads to growth.</li>
                    <li><b>Freedom to fail:</b> starting out as a new teacher requires you to step out and try
                    new things - some of which you might fail at. Start your teaching journey in an
                    environment that encourages you to take risks, take on challenges because we
                    recognise that failure allows for learning and leads to growth.</li>
                    <li><b>Freedom to fail:</b> starting out as a new teacher requires you to step out and try
                    new things - some of which you might fail at. Start your teaching journey in an
                    environment that encourages you to take risks, take on challenges because we
                    recognise that failure allows for learning and leads to growth.</li>
                </ul>

                <blockquote>Quote here</blockquote>
            </article>
        </section>

        <section class="section">
            <article class="article">
                <h1>Who may apply?</h1>
                <p>You may apply if you:</p>
                <ul>
                    <li>Reason 1 ...</li>
                    <li>Reason 2 ...</li>
                    <li>Reason 3 ...</li>
                    <li>Reason 4 ...</li>
                </ul>

            </article>
        </section>

                <section class="section">
                    <div class="button-wrap">
                        <a href="http://novaacademies.applytojob.com/" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY TO BE AN APPRENTICE NOW</a>
                    </div>
                </section>


        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our Apprentice teachers</h2>
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

       
       <section>
       <section class="section faqs-container">
            <article class="article article-inner article-inner-alt ">
                <h2 id="faqs">Frequently Asked Questions</h2>
                <ul class="toggle-list">
                        <li class="show">
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
                        <li class=" ">
                            <h3 class="toggle-list-title">I hear teachers work pretty hard at Nova Pioneer. What are the
                                expectations?</h3>
                            <div class="toggle-list-content">
                            Yes, our teachers do work hard! Once students go home, teachers work in their
                            teaching teams to plan their lessons. They also attend professional
                            development sessions at least once a week where they get coaching and
                            training to help them become better teachers, leaders and team members.
                            They will also have regular one-on-one check-ins with their Deans of
                            Instruction to get feedback and further coaching and mentorship.
                            </div>
                        </li>
                        <li class=" ">
                            <h3 class="toggle-list-title">How do I apply to become a teacher at Nova Pioneer?</h3>
                            <div class="toggle-list-content">
                            You can find all of our teaching positions here on our job page. Click here to
                            learn more about the teacher hiring process.
                            </div>
                        </li>
                </ul>
            </article>
        </section>
        </section>

       



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
