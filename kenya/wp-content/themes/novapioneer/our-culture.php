<?php
/**
 * Template Name: Culture Page
 */
get_header(); ?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">School &amp; Organisation Culture</h2>
                <?php echo get_field('our_culture'); ?>
            </article>
        </section>

        <section class="section">
          <div class="section-content section-content-plain principles-container">

              <?php $number = 1; ?>
              <?php foreach( get_field('culture_principles') as $principle ): $principle = (object)$principle; ?>
                <div class="section-content-item section-content-item-third principle-card card-<?php echo $number; ?>">
                    <h2 class="number"><?php echo $number; ?></h2>
                    <h3><?php echo $principle->title; ?></h3>
                    <div class="small-divider"></div>
                    <?php echo $principle->description; ?>
                </div>
                <?php $number++; ?>
              <?php endforeach; ?>

          </div>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>
<?php get_footer(); ?>
