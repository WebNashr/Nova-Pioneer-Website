<?php 
/**
* Template Name: Careers Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

    <article>
        <header>
            <h1><?php echo get_the_title(); ?></h1>
        </header>
        <section>
            <?php echo get_the_content(); ?>
        </section>

        <?php $careers_query = new WP_Query(array(
            "post_type" => "careers",
            "orderby" => "menu_order",
            "order" => "ASC",
            "posts_per_page" => -1,
        )); ?>

        <?php if( $careers_query->have_posts() ): ?>

        <div>
            <h1>Open Job Positions</h1>

            <?php while( $careers_query->have_posts() ): $careers_query->the_post();
                $description  = get_field('description');
                $application_deadline   = get_field('application_deadline');
            ?>

            <article>
                <header>
                    <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
                    <p>Apply By: <?php echo $application_deadline; ?></p>
                </header>
                <section>
                    <?php echo $description; ?>
                </section>                      
            </article>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <?php endif; ?>
    </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
