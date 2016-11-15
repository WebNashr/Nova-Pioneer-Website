<?php
get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    <article>
        <header>
            <?php the_title(); ?>
        </header>
        <?php the_content(); ?>
    </article>

<?php endwhile; ?>