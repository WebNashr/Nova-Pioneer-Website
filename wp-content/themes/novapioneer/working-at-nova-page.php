<?php 
/**
* Template Name: Working At Nova
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();
        $teaching_at  = get_field('teaching_at');
        $educator_pathways = get_field('educator_pathways');    
    ?>
        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
                <?php echo get_the_content(); ?>
            </header>

            <section>
                <h2>Teaching at Novapioneer</h2>
                <?php echo $teaching_at; ?>
            </section>

            <section>
                <h2>Educator Pathways</h2>
                <?php echo $educator_pathways; ?>
            </section>
        </article>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
