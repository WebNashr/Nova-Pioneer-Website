<?php 
/**
* Template Name: Learning Approach
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $culture    = get_field('culture');
        $curriculum = get_field('curriculum');
    
    ?>

    <?php endwhile; ?>

    <article>
        <header>
            <h1><?php echo get_the_title(); ?></h1>
            <?php echo get_the_content(); ?>
        </header>

        <section>
            <h2>Culture</h2>
            <?php echo $culture; ?>
        </section>

        <section>
            <h2>Curriculum</h2>
            <?php echo $curriculum; ?>
        </section>
    </article>

<?php endif; ?>

<?php get_footer(); ?>
