<?php 
/**
* Template Name: A Day in the Life
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
            </header>
            <section>
                <?php the_content(); ?>
            </section>
        </article>

    <?php endwhile; ?>


    <?php $articles_query = new WP_Query(array(
        "post_type" => "articles",
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    )); ?>

    <?php if( $articles_query->have_posts() ): ?>

        <h1>Articles</h1>

        <?php while( $articles_query->have_posts() ): $articles_query->the_post(); ?>

            <article>
                <header>
                    <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
                </header>
                <section>
                    <?php the_excerpt(); ?>
                </section>
            </article>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    <?php endif; ?>


    <?php $videos_query = new WP_Query(array(
        "post_type" => "student_video",
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    )); ?>

    <?php if( $videos_query->have_posts() ): ?>

        <h1>Videos</h1>

        <?php while( $videos_query->have_posts() ): $videos_query->the_post(); ?>

            <article>
                <header>
                    <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
                    <p> <?php echo get_field('student_name'); ?> - <?php echo get_field('student_grade'); ?>  </p>
                </header>
                <section>
                    <?php echo get_field('video'); ?>
                    <p><?php echo get_field('video_caption'); ?></
                </section>
            </article>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    <?php endif; ?>


<?php endif; ?>

<?php get_footer(); ?>
