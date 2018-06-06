<?php
/**
* Template Name: Careers-Instructional-School-Leadership (2018)
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


        <!-- Intro -->
        <?php $title = get_field('intro'); ?>
        <section class="section section-no-bottom section-page-intro">
            <article class="article">
                <?php if($title):?>
                <h2><?php echo $title ?></h2>
                <?php endif;?>
                <?php echo the_content(); ?>
            </article>
        </section>


        <?php
            $field = 'why_become_nova_leader';
            $_title = 'title';
            $_paragraph = 'paragraph';
        ?>
        <?php if(have_rows($field)): ?>
        <section class="section">
            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container-XXX alternating-container">
                    <?php while(have_rows($field)): the_row();?>
                    <div class="card-XXX admission-step-XXX new-card-item-XXX alternating-item new-card-item-third-XXX">
                        <figure class="alternating-item-img">
                            <?php $image = get_sub_field('image'); ?>

                            <?php if( !empty($image) ):
                                // vars
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];

                                // thumbnail
                                $size = '4-3-large';
                                $thumb = $image['sizes'][ $size ];
                            ?>

                            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                        </figure>

                        <div class="alternating-item-copy">
                            <h2><?php the_sub_field('title');?></h2>
                            <p><?php the_sub_field('paragraph');?></p>
                            <!--<blockquote><?php the_sub_field('quote') ?></blockquote>-->
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <?php
            $leader_hero = get_field('leadership_text');
        ?>
        <section class="full-width-image-container small-screens">
            <figure class="full-width-image">
                <?php if(get_field('leadership_image')): ?>
                    <img src="<?php the_field('leadership_image'); ?>" />
                <?php endif; ?>

                <?php if($leader_hero):?>
                <div class="section-content full-image-caption">
                    <figcaption>
                        <p><?php echo get_field('leadership_text'); ?></p>
                    </figcaption>
                </div>
                <?php endif; ?>
            </figure>
        </section>

        <section class="full-width-image-container large-screens" data-enllax-type="foreground">
            <figure
                class="full-width-image secondary-bgd-image <?php echo isOnMobile()->parallax ?>" <?php if (get_field('leadership_image')): echo 'style="background-image: url(' . get_field('leadership_image') . ');"'; endif; ?>
                data-enllax-ratio="<?php echo isOnMobile()->ratio ?>">
                <?php if($leader_hero):?>
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php the_field('leadership_text') ?></p>
                    </figcaption>
                </div>
                <?php endif; ?>
                <span class="anchor-link" id="preprimary"></span>
            </figure>
        </section>


        <?php
            $body = 'body';
            $sub_field_1 = 'title';
            $sub_field_2 = 'paragraph';
        ?>
        <section class="section">
            <section class="faqs-container">
                <article class="article article-inner article-inner-alt ">
                    <h2 id="faqs">We provide professional development and support across various levels and areas of school leadership</h2>

                    <?php if(have_rows($body)): $i = 0;?>
                    <ul class="toggle-list toggle-list-plus">
                        <?php while(have_rows($body)):  the_row();?>
                        <li class= '<?php if($i == 0){ echo 'show'; } ?>' >
                            <h3 class="toggle-list-title"><?php the_sub_field($sub_field_1);?></h3>
                            <div class="toggle-list-content">
                            <?php the_sub_field($sub_field_2);?>
                            </div>
                        </li>
                        <?php $i += 1; ?>
                        <?php endwhile; wp_reset_postdata();?>
                    </ul>
                    <?php endif; ?>
                </article>
            </section>
        </section>


        <?php
            $args = array(
                'post_type' => 'profile',
                'post_status' => 'publish',
                'tax_query' =>
                    array(
                        'taxonomy' => 'leader'
                            )
                );
            $acf_leaders = get_field('our_leaders');
            $featured_leader = new WP_Query($args);

            if(!empty($acf_leaders) && (count($acf_leaders) > 0)):
                $ids = array();
            foreach($acf_leaders as $leader):
                $ids[] = $leader->ID;
            endforeach;
                $featured_leader = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
            $featured_leader = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif;
            //var_dump($featured_leader);
        ?>
        <?php if($featured_leader->have_posts() ): ?>
        <section class="section section-pair team-profile-container">
            <h2 class="centered-title">Meet our leaders</h2>
            <br>

            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php while($featured_leader->have_posts()): $featured_leader->the_post(); ?>
                    <div class="new-card-item new-card-item-plain new-card-item-quarter">
                        <figure class="new-card-img">
                            <img src="<?php if(has_post_thumbnail()) {echo get_the_post_thumbnail_url();}?>" alt="">
                        </figure>

                        <div class="new-card-copy">
                            <h3><?php the_title();?></h3>
                            <h6><?php the_field('quote', $featured_leader->ID);?></h6>
                            <a href="<?php echo get_permalink();?>">Read my story</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </article>
        </section>
        <?php wp_reset_postdata();?>
        <?php endif;?>


        <?php $url = get_field('apply'); ?>
        <section class="section">
        <?php if($url)?>
            <div class="button-wrap">
                <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
            </div>
        </section>


        <!--hide this for now-->
        <?php
            $field = 'faq';
            $sub_field_1 = 'question';
            $sub_field_2 = 'answer';
        ?>
        <section class="section" style="display: none;">
            <section class="faqs-container">
                <article class="article article-inner article-inner-alt ">
                    <h2 id="faqs">Frequently Asked Questions</h2>
                    <?php if(have_rows($field)): $i = 0;?>

                    <ul class="toggle-list">
                        <?php while(have_rows($field)):  the_row();?>
                        <li class= '<?php if($i == 0){ echo 'show'; } ?>' >
                            <h3 class="toggle-list-title"><?php the_sub_field($sub_field_1);?></h3>
                            <div class="toggle-list-content">
                            <?php the_sub_field($sub_field_2);?>
                            </div>
                        </li>
                        <?php $i += 1; ?>
                        <?php endwhile; wp_reset_postdata();?>
                    </ul>
                <?php endif; ?>
                </article>
            </section>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
