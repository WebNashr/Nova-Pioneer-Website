<?php
/**
* Template Name: Careers - teams and support
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <div class="faux-h1"><?php the_title(); ?></div>

                    <?php
                        $apply = get_field('apply_now_link');
                        if($apply):
                    ?>
                    <br>
                    <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <section class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>

                    <?php
                        $apply = get_field('apply_now_link');
                        if($apply):
                    ?>
                    <br>
                    <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <?php
            $field = get_field('intro');
        ?>
        <section class="section section-no-bottom section-page-intro">
                <article class="article">
                    <?php if($field):?>
                        <h2><?php echo $field;?></h2>
                    <?php endif; ?>
                    <h2><?php the_content();?></h2>
                </article>
        </section>


        <?php
            $info = 'info';
            if(have_rows($info)):
        ?>
        <section class="section section-no-bottom">
            <article class="article">
                <?php while(have_rows($info)): the_row();?>
                    <figure class="team-item">
                        <?php $image = get_sub_field('image'); ?>

                        <?php if( !empty($image) ):
                            // vars
                            $url = $image['url'];
                            $title = $image['title'];
                            $alt = $image['alt'];

                            // thumbnail
                            $size = 'square-small';
                            $thumb = $image['sizes'][ $size ];
                        ?>

                        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                        <?php endif; ?>

                        <figcaption>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('paragraph'); ?></p>
                        </figcaption>
                    </figure>
                <?php endwhile?>
            </article>
        </section>
        <?php endif;?>


        <?php
            $args = array(
                'post_type' => 'profile',
                'post_status' => 'publish'
                );
            $acf_teams = get_field('meet_our_team');
            $featured_team = new WP_Query($args);

            if(!empty($acf_teams) && (count($acf_teams) > 0)):
                $ids = array();
            foreach($acf_teams as $team):
                $ids[] = $team->ID;
            endforeach;
                $featured_team = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
                $featured_team = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif;
        ?>
        <?php if($featured_team->have_posts()):?>
        <section class="section section-no-bottom">
            <h2>Meet our team</h2>
            <br>

            <article class="article">
                <div class="new-card-container">
                    <?php while($featured_team->have_posts()): $featured_team->the_post();?>
                    <div class="new-card-item new-card-item-plain new-card-item-quarter">
                        <figure class="new-card-img">
                            <img
                                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'square-medium')[0]; ?>"
                                alt="<?php the_title();?>"
                            >
                        </figure>

                        <div class="new-card-copy">
                            <h3><?php the_title(); ?></h3>
                            <h6><?php the_field('quote', $featured_team->ID); ?></h6>
                            <a href="<?php echo get_permalink();?>">Read my story</a>
                        </div>
                    </div>
                    <?php endwhile?>
                </div>
            </article>
        </section>
        <?php wp_reset_postdata();?>
        <?php endif;?>


        <?php
            $apply = get_field('apply_now_link');
        ?>
        <section class="section">
            <?php if($apply)?>
            <div class="button-wrap button-wrap-center">
                <a href="<?php echo $apply ?>" target="_blank" class="button button-grosse button-primary" title="">APPLY NOW</a>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
