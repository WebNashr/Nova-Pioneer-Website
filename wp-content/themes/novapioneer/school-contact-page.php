<?php 
/**
* Template Name: School Contact Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $contacts       = get_field('contacts');
        $latitude       = get_field('latitude');
        $longitude      = get_field('longitude');
        $info_text      = get_field('info_text');
    
    ?>

    <article>
        <header><?php echo get_the_title(); ?></header>
        <section>
            <?php echo $contacts; ?>
        </section>
        <section>
            <?php novap_render_google_map($latitude, $longitude, $info_text); ?>
        </section>
    </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
