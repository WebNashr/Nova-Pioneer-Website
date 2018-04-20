<?php
/**
* Template Name: Careers-Support-Functions (2018)
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <section class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>


        <section class="section section-no-bottom section-page-intro">
                <article class="article">
                    <?php if($field):?>
                        <h2><?php echo $field;?></h2>
                    <?php endif; ?>
                    <?php echo the_content(); ?>
                </article>
        </section>


        <?php
            $info = 'info';
            if(have_rows($info)):
        ?>
        <section class="section section-no-bottom">
            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php while(have_rows($info)): the_row();?>
                        <div class="card-XXX admission-step-XXX new-card-item new-card-item-plain new-card-item-third">
                            <figure class="new-card-img">
                                <!--<img src="<?php the_sub_field('icon'); ?>" alt=""> -->
                                <!--!!! Young: this needs an image --><!--!!! Young: this needs an image -->
                                <img src="http://www.kipp.org/wp-content/uploads/2016/09/Careers-Tab-TeachingAtKIPP-720x600.jpg" alt="">
                                <!--<img src="https://placeimg.com/480/320/any">-->
                        </figure>

                            <div class="new-card-copy">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php endwhile?>
                </div>
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
        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our team</h2>
            <div class="section-content section-content-plain np-team-profiles">
                <?php while($featured_team->have_posts()): $featured_team->the_post();?>
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="<?php if(has_post_thumbnail()) {echo get_the_post_thumbnail_url();}?>" alt="">
                            </div>
                            <h3 class="profile-name"><?php the_title(); ?></h3>
                            <h5 class="profile-role"><?php the_field('quote', $featured_team->ID); ?></h5>
                            <a href="<?php echo get_permalink();?>">Link to full profile</a>
                        </div>
                <?php endwhile;?>
            </div>
        </section>
        <?php wp_reset_postdata();?>
        <?php endif;?>


            <?php
            $url = get_field('apply');
            ?>
                <section class="section">
                <?php if($url)?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
                </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
