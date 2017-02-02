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
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">Our Vision</h2>
                <?php echo $our_vision; ?>

                <h2 class="centered-title">Our Mission</h2>
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

        <figure class="full-width-image parallax" style="background-image: url(<?php echo get_field('our_culture_banner_image'); ?>);">
            <div class="section-content full-image-caption animated caption slideInLeft">
                <figcaption>
                    <p> <?php echo get_field('our_culture_banner_image_caption'); ?></p>
                </figcaption>
            </div>
        </figure>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">School &amp; Company Culture</h2>

                <?php echo $our_culture; ?>

            </article>
        </section>

        <section class="section">
          <div class="section-content section-content-plain principles-container">
              <?php $number = 1; ?>
              <?php foreach( get_field('culture_principles') as $principle ): $principle = (object)$principle; ?>
              <div class="section-content-item section-content-item-third principle-card">
                  <h2 class="number"><?php echo $number; ?></h2>
                  <h3><?php echo $principle->title; ?></h3>
                  <div class="small-divider"></div>
                  <?php echo $principle->description; ?>
              </div>
              <?php $number++; endforeach; ?>
          </div>
        </section>

        <!-- <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">School &amp; Company Culture</h2>
                <?php echo $our_culture; ?>

                <div class="section-content section-content-plain principles-container">
                    <?php $number = 1; ?>
                    <?php foreach( get_field('culture_principles') as $principle ): $principle = (object)$principle; ?>
                    <div class="section-content-item section-content-item-third principle-card">
                        <h2 class="number"><?php echo $number; ?></h2>
                        <h3><?php echo $principle->title; ?></h3>
                        <div class="small-divider"></div>
                        <p class="description"><?php echo $principle->description; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </article>
        </section> -->


    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>

<?php get_footer(); ?>
