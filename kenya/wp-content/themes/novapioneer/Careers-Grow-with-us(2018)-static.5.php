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
            <article class="article ">
            <div class="card-container steps-container">
                <div class="card admission-step">
                <h3>DON'T FORGET TO STRETCH!</h3>
                <p>You will move from one stretch position to the next to ensure that you are always growing and getting to the next level in your career and leadership journey.
                </p>
               </div>

            <div class="card admission-step">
                <h3>FEEDBACK, FEEDBACK, FEEDBACK</h3>
                <p>You will move from one stretch position to the next to ensure that you are always growing and getting to the next level in your career and leadership journey.
                </p>
            </div>

            <div class="card admission-step">
                <h3>FALLING FORWARD</h3>
                <p>You will move from one stretch position to the next to ensure that you are always growing and getting to the next level in your career and leadership journey.
                </p>
            </div>

            <div class="card admission-step">
                <h3>STAYING ON TRACK</h3>
                <p>You will move from one stretch position to the next to ensure that you are always growing and getting to the next level in your career and leadership journey.
                </p>
            </div>
            <div class="card admission-step">
                <h3>YOUR CAREER ROAD MAP</h3>
                <p>You will move from one stretch position to the next to ensure that you are always growing and getting to the next level in your career and leadership journey.
                </p>
            </div>

        </div>
        </article>
        </section>

        <section class="section">
            <article class="article">
                <h3>PROFESSIONAL DEVELOPMENT PROGRAMMES</h3> 
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
