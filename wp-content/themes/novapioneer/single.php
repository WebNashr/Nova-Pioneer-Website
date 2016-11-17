<?php
/**
 * Single Post Template
 */

 get_header();?>

 <?php if(have_posts()): ?>

   <?php while(have_posts()): the_post();?>

    <?php if( has_post_format('gallery') ): ?>

      <?php get_template_part('includes/partials/content', 'gallery'); ?>

    <?php else: ?>
      <article>
        <header>
          <h1><?php echo get_the_title(); ?></h1>
        </header>
        <?php echo get_the_content(); ?>
      </article>

    <?php endif; ?>

   <?php endwhile; ?>

 <?php endif; ?>

 <?php get_footer(); ?>
