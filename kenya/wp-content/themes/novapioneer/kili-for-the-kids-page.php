<?php
/**
* Template Name: Kilimanjaro for the kids
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <div class="faux-h1"><?php the_title(); ?></div>
                    <p>Kilimanjaro for the Kids</p>
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
                    <p>Kilimanjaro for the Kids</p>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2>What are we doing? </h2>
                <?php echo get_field('why_work_at_novap'); ?>
            </article>
        </section>

        <!-- <section class="full-width-image-container hide-on-small-screens" data-enllax-type="foreground">
        <figure class="full-width-image parallax" style="background-image: url(<?php echo $stage->banner_image; ?>);" data-enllax-ratio="0.2" >
            <div class="section-content full-image-caption animated caption">
                <figcaption>
                    <p><?php echo $stage->banner_image_caption; ?></p>
                </figcaption>
            </div>
        </figure>
        </section> -->

        <section class="full-width-image-container small-screens">
            <figure class="full-width-image">
                <?php if(get_field('banner_image')): ?>
                    <img src="<?php the_field('banner_image'); ?>" />
                <?php endif; ?>

                <div class="section-content full-image-caption">
                    <figcaption>
                      <?php echo get_field('banner_text'); ?>
                    </figcaption>
                </div>
            </figure>
        </section>

        <section class="full-width-image-container large-screens" data-enllax-type="foreground">
            <figure class="full-width-image <?php echo isOnMobile()->parallax ?>" style="background-image: url(<?php echo get_field('banner_image'); ?>);" data-enllax-ratio="<?php echo isOnMobile()->ratio ?>" >
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <?php echo get_field('banner_text'); ?>
                        <!--<a href="<?php echo site_url('/careers'); ?>" >Learn More</a>-->
                    </figcaption>
                </div>
            </figure>
        </section>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2>Why are we doing it?</h2>

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

                    <div class="button-wrap">
                        <a href="https://www.generosity.com/education-fundraising/kilimanjaro-4-the-kids-innovative-stem-programmes" target="_blank" class="button button-default button-primary" title="">Donate to Kilimanjaro 4 The Kids</a>
                    </div>
                </div>
            </article>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_template_part('includes/partials/content', 'stay-updated'); ?>


<?php get_footer(); ?>
