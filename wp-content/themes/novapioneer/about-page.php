<?php 
/**
* Template Name: About Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $our_vision = get_field('our_vision');
        $our_mission = get_field('our_mission');
        $our_culture = get_field('our_culture');

        // Get the paragraphs in $our_mission for implementing the read-more functionality
        preg_match_all('|<p>(.+?)</p>|', $our_mission, $matches);
        $our_mission_paragraphs = $matches[1];
    
    ?>
        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>
        
        <section class="section">
            <article class="article article-body general-content">

                <h1>Our Vision</h1>
                <?php echo $our_vision; ?>
                <br/><br/>

                <h1>Our Mission</h1>
                <input type="checkbox" class="read-more-state" id="post-<?php echo get_the_ID(); ?>" />
                <div class="read-more-wrap">
                    <p><?php echo array_shift($our_mission_paragraphs); ?></p>
                    <span class="read-more-target">
                        <?php foreach($our_mission_paragraphs as $paragraph): ?>
                            <p><?php echo $paragraph; ?></p>
                        <?php endforeach; ?>
                    </span>        
                </div>
                <label for="post-<?php echo get_the_ID(); ?>" class="read-more-trigger button button-tiny button-primary"></label>

            </article>
        </section>

        <figure class="full-width-image" style="background-image: url(<?php echo get_field('our_culture_banner_image'); ?>);">
            <div class="section-content full-image-caption">
                <figcaption>
                    <?php echo get_field('our_culture_banner_image_caption'); ?>
                </figcaption>
            </div>
        </figure>

        <section class="section">
            <article class="article article-body general-content">
                <h1>School &amp; Company Culture</h1>
                <?php echo $our_culture; ?>
            </article>
        </section>


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
                            <select id="select-option">
                                    <option value="Please Select Your Area of Interest">Please Select Your Area of Interest</option>
                                    <option value="School Admissions">School Admissions</option>
                                    <option value="School Events">School Events</option>
                                    <option value="Latest News">Latest News</option>
                            </select>
                            <input name="Sign Up" value="Sign Up" class="button button-large button-primary" style="" type="submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>


        </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
