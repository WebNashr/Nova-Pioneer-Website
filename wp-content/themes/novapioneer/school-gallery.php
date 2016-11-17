<?php

/**
*
* Template Name: School Gallery Template
*
*/

get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <article>
            <header>
                <h1> <?php echo get_the_title(); ?> </h1>
            </header>
            <section>
                <?php echo get_the_content(); ?>
            </section>
        </article>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>