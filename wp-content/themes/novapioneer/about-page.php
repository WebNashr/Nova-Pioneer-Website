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
        $members = get_field('leadership_team_members');
    
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

        <?php foreach($members as $member): $member = (object)$member; ?>
            <section>
                <header>
                    <h1> <a href="<?php echo get_permalink($member->ID); ?>"> <?php echo $member->post_title; ?> </a> </h1>
                    <p><?php echo get_field('title'); ?></p>
                    <?php $headshot_url = wp_get_attachment_image_src(get_post_thumbnail_id($member->ID, 'single-post-thumbnail')); ?>
                    <?php if(!empty($headshot_url)): ?>
                        <img src="<?php echo $headshot_url; ?>" />
                    <?php endif; ?>
                </header>                        
            </section>
        <?php endforeach; ?>


        </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
