<?php
/**
 * Template Name: Building Blocks and Prospectus Page
 */

get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <section class="section section-hero " <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php  the_title()?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-inner article-inner-alt">

                <?php $i = 0;
                if (have_rows('building_blocks_and_prospectus')):
                    while (have_rows('building_blocks_and_prospectus')) : the_row(); ?>
                        <h2 class="centered-title"> <?php the_sub_field('title') ?></h2>
                        <?php the_sub_field('content') ?>
                        <div class="image-wrap"
                        <img class=""
                        style="background-image: url(<?php the_sub_field('image') ?>);"
                        alt="<?php the_sub_field('title') ?>">
                        </div>
                        <!-- <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>"> -->
                        <br><br>
                        <?php $i++; endwhile; endif; ?>

            </article>
        </section>
    <?php endwhile; endif; ?>



<?php get_template_part('includes/partials/content', 'stay-updated'); ?>


<?php get_footer(); ?>
