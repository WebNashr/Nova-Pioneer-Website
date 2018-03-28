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
        </section>

        <section class="section">
            <article class="article">
                <h3>Opportunities:</h3> 
                <h4>How do you want to help shape education on the African continent?</h4>
            </article>

            <div class="card-container">
                 <div class="card">
                      <h1>TEACHERS</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
                 <div class="card">
                      <h1>INSTRUCTIONAL &
                        SCHOOL LEADERSHIP</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
                 <div class="card">
                      <h1>CENTRAL TEAM &
                        SCHOOL SUPPORT
                        ROLES</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
            </div>

        </section>

        <section class="section">
            <article class="article">
                <h3>What we're looking for</h3> 
                <p>
                Working at Nova Pioneer is for people who love a challenge and love to grow, get a kick out
                of solving tough problems, and flourish in an environment where everyone works hard and
                puts their whole heart into their work. IS THAT YOU?
                </p>
            </article>

            <div class="card-container">
                 <div class="card">
                      <h1>TEACHERS</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
                 <div class="card">
                      <h1>INSTRUCTIONAL &
                        SCHOOL LEADERSHIP</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
            </div>
            <div class="card-container">
                 <div class="card">
                      <h1>TEACHERS</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
                 <div class="card">
                      <h1>INSTRUCTIONAL &
                        SCHOOL LEADERSHIP</h1>
                      <p>
                         We love teachers. They are at
                        the heart of what we do. They
                        inspire our students with a
                        passion for learning.
                      </p>
                      <a>LEARN MORE</a>
                 </div>
            </div>

        </section>

        <section class="section">
            Stories from Nova
        </section>


                <section class="section">
                    <div class="button-wrap">
                        <a href="http://novaacademies.applytojob.com/" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
                </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
