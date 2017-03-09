<?php
get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    <article>
        <header>
            <h1> <?php echo get_the_title(); ?> </h1>
            <?php if(has_post_thumbnail()): the_post_thumbnail(); endif;?>
        </header>
        <?php the_content(); ?>
    </article>

<?php endwhile; ?>