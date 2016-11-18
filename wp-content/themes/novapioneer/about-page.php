<?php 
/**
* Template Name: About Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $our_essence = get_field('our_essence');
        $our_culture = get_field('our_culture');
        $our_brand_message = get_field('our_brand_message');
    
    ?>

        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
                <?php echo get_the_content(); ?>
            </header>

            <section>
                <h2>Our Essence</h2>
                <?php echo $our_essence; ?>
            </section>

            <section>
                <h2>Our Culture</h2>
                <?php echo $our_culture; ?>
            </section>

            <section>
                <h2>Our Brand Message</h2>
                <?php echo $our_brand_message; ?>
            </section>

            <?php $leadership_team_query = new WP_Query(array(
                "post_type" => "team",
                "orderby" => "menu_order",
                "order" => "ASC",
                "posts_per_page" => -1,
                "tax_query" => array(
                    array(
                        "taxonomy" => "team_member_category",
                        "field"    => "slug",
                        "terms"    => "leadership-team"
                    )
                )
            )); ?>

            <?php if( $leadership_team_query->have_posts() ): ?>

            <div>
                <h1>Leadership Team</h1>
                <?php while( $leadership_team_query->have_posts() ): $leadership_team_query->the_post(); ?>

                    <article>
                        <header>
                            <h1> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h1>
                            <p><?php echo get_field('title'); ?></p>
                            <?php if(has_post_thumbnail()): the_post_thumbnail(); endif;?>
                        </header>                        
                    </article>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <?php endif; ?>


        </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
