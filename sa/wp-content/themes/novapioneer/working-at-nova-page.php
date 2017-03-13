<?php
/**
* Template Name: Working At Nova Pioneer
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section section-hero working-at-np" <?php echo set_post_new_bg()?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title">Working at Nova Pioneer</h1>
                    <p>Building the future of African talent and global education</p>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2>Why work at NovaPioneer? </h2>
                <?php echo get_field('why_work_at_novap'); ?>
            </article>
        </section>


        <section class="full-width-image-container" data-enllax-type="foreground">
          <figure class="full-width-image parallax" style="background-image: url(<?php echo get_field('banner_image'); ?>);" data-enllax-ratio="0.2">
              <div class="section-content full-image-caption animated caption">
                  <figcaption>
                      <?php echo get_field('banner_text'); ?>
                      <a href="<?php echo site_url('/careers'); ?>" >Learn More</a>
                  </figcaption>
              </div>
          </figure>
        </section>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2>Career Pathways</h2>

                <?php echo get_field('education_pathways'); ?>
                <!-- <div class="section-content section-content-plain section-card-container"> -->
                <div class="xxx-section-content xxx-section-content-plain">
                    <!-- <?php foreach( get_field('education_pathways_cards') as $pathway): $pathway = (object)$pathway; ?>
                    <div class="section-content-item section-content-item-half section-card">
                        <h3> <?php echo $pathway->title; ?> </h3>
                        <div class="small-divider"></div>
                        <p class="card-description"> <?php echo $pathway->description; ?> </p>
                    </div>
                    <?php endforeach; ?> -->

                    <div class="button-container">
                        <a href="<?php echo site_url('/open-positions'); ?>" class="button button-default button-primary" title="">View Open Positions</a>
                    </div>
                </div>
            </article>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_template_part('includes/partials/content', 'stay-updated'); ?>


<?php get_footer(); ?>
