<?php
/**
 * Front page
 */

 get_header();?>

 <?php if(have_posts()): ?>

    <?php $testimonials = get_field('testimonials'); ?>

    <?php if( !is_null($testimonials) && !empty($testimonials) ): ?>

        <?php foreach ($testimonials as $testimonial): ?>

            <article>
                <i>
                    <blockquote cite="<?php echo $testimonial->post_title; ?>">
                        <strong><?php echo $testimonial->post_content; ?></strong><br/>
                        <span <style="display:block; width: 100px; border-top: solid 1px #777;"></span>
                        <span><?php echo $testimonial->post_title; ?> </span>
                    </blockquote>
                </i>
            </article>

        <?php endforeach; ?>

    <?php endif; ?>

 <?php endif; ?>

  <?php get_footer(); ?>