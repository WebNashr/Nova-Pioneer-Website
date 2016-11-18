<?php 
/**
* Template Name: Corporate Page
*
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $school_mission = get_field('school_mission');
        $school_vision  = get_field('school_vision');
        $company_structure = get_field('company_structure');
    
    ?>

    <article>
        <header>
            <h1><?php echo get_the_title(); ?></h1>
        </header>

        <section>
            <h2>School Mission</h2>
            <?php echo $school_mission; ?>
        </section>

        <section>
            <h2>School Vision</h2>
            <?php echo $school_vision; ?>
        </section>

        <section>
            <h2>Company Structure</h2>
            <?php echo $company_structure; ?>
        </section>
    </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
