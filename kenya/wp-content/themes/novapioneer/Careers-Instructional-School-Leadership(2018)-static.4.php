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

        
        <!-- Intro -->
        <?php 
        
        ?>

        <section class="section">
            <?php //while(); ?>
                <article class="article">
                <p><?php echo the_content(); ?></p>
                </article>
            <?php //endwhile; wp_reset_postdata(); ?>
        </section>

        <?php 
            $body = 'body';
        ?>

        <section class="section ">
            <?php if(have_rows($body)):?>
            <div class="card-container">
                <?php while(have_rows($body)): the_row();?>
                <div class="card">
                    <h2><?php the_sub_field('title') ?></h2>
                    <p>
                    <?php the_sub_field('paragraph') ?>
                    </p>
                </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        </section>

        <?php 
            $school_leaders = 'why_become_nova_leader';
            $title = 'title';
            $paragraph = 'paragraph';
        ?>
        <section class="section">
            <article class="article">
                <h3>Why become a school leader at Nova Pioneer?</h3> 
            </article>
            <?php if(have_rows($school_leaders)):?>

            <ol>
                <?php while(have_rows($school_leaders)): the_row();?>
                <li>
                <b> <?php the_sub_field($title)?></b>
                    <?php the_sub_field($paragraph) ?>
                </li>

            <? endwhile;?>

            </ol>
            
            <? endif;?>
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


            <?php 
            $url = get_field('apply');
            ?>
                <section class="section">
                <?php if($url)?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
                </section>
<<<<<<< HEAD

       <section class="section">
       <section class="faqs-container">
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
                </ul>
            </article>
        </section>
        </section>
=======
                
            <?php 
                $field = 'faq';
                $sub_field_1 = 'question';
                $sub_field_2 = 'answer';
            ?>
            <section class="section">
            <section class="faqs-container">
                 <article class="article article-inner article-inner-alt ">
                     <h2 id="faqs">Frequently Asked Questions</h2>
                     <?php if(have_rows($field)): $i = 0;?>

                     <ul class="toggle-list">
                            <?php while(have_rows($field)):  the_row();?>
                                        <li class= '<?php if($i == 0){ echo 'show'; } ?>' >
                                            <h3 class="toggle-list-title"><?php the_sub_field($sub_field_1);?></h3>
                                            <div class="toggle-list-content">
                                            <?php the_sub_field($sub_field_2);?>
                                            </div>
                                        </li>
                                <?php $i += 1; ?>
                            <?php  endwhile; wp_reset_postdata();?>
                     </ul>

                <?php endif; ?>
                 </article>
             </section>
             </section>
>>>>>>> 8ae018aa8c9f58712adc12a89d801b82ed49411b


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
