<?php
/**
* Template Name: Careers-Working-at-Nova(2018)
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


        <?php
           $title = 'section_a';
           if(have_rows($title)):
        ?>
        <?php while(have_rows($title)): the_row();?>
        <section class="section">
            <article class="article">
                <h3><?php the_sub_field('heading');?></h3>

        <?php
           $subField = get_sub_field('careers_navigation');
           //var_dump($subField[0]['text']);
           if($subField):
           $i = 1;
           //echo sizeof($subField);
        ?>
                <h4>
                <?php foreach($subField as $s): ?>
                    <a href="<?php echo $s['url'] ?>"> <?php echo $s['text'] ?> </a>
                    <?php

                    if($i < sizeof($subField)) {
                        echo '-';
                    }

                    $i++; ?>
                <?php endforeach; ?>
                </h4>

                 <?php endif;?>

            </article>
        </section>
        <?php endwhile;?>
        <?php endif;?>

        <!--<div class="border"></div>-->

        <?php
            $intro = 'intro';
            if(have_rows($intro)):
            $i = 0;
        ?>
        <section class="section section-no-bottom">
            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php while(have_rows($intro)): the_row();?>
                        <div class="card-XXX admission-step-XXX new-card-item new-card-item-plain new-card-item-quarter">
                            <figure class="new-card-img">
                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                            </figure>

                            <div class="new-card-copy">
                                <!--<span class="new-card-number"><?php echo $i + 1;?></span>-->
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <h6><?php the_sub_field('sub_heading'); ?></h6>
                                <p><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endwhile?>
                </div>
            </article>
        </section>
        <?php endif;?>



        <section class="section">
           <?php
            $field = 'section_b';
            if(have_rows($field)):
           ?>

            <article class="article">
                <?php while(have_rows($field)): the_row(); ?>
                <h3><?php the_sub_field('heading');?></h3>
                <h4><?php the_sub_field('sub_heading');?></h4>
                <?php endwhile;?>
            </article>
            <br>
            <?php endif;?>

        <?php
            $opp = 'opportunities';
            if(have_rows($opp)):
        ?>
        <section class="section section-no-bottom-">
            <h2>Opportunities</h2>
            <h4>How do you want to help shape education on the African continent?</h4>
            <br>
            <br>

            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container-XXX alternating-container">
                    <?php while(have_rows($opp)): the_row();?>
                    <div class="card-XXX admission-step-XXX new-card-item-XXX alternating-item new-card-item-third-XXX">
                        <figure class="alternating-item-img"><!--!!! Young: this needs an image -->
                            <img src="https://placeimg.com/480/320/people">
                        </figure>

                        <div class="alternating-item-copy">
                            <h2><?php the_sub_field('heading');?></h2>
                            <p><?php the_sub_field('paragraph_text');?></p>
                            <a href="<?php the_sub_field('link_url');?>" title="" class="button button-small button-primary">Learn more</a>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <section class="section section-no-top">

        <?php
           $title = 'section_c';
           if(have_rows($title)):
        ?>
            <?php while(have_rows($title)): the_row();?>
            <article class="article">
                <h3><?php the_sub_field('heading'); ?></h3>
                <p><?php the_sub_field('sub-heading'); ?></p>
            </article>
           <?php endwhile;?>
        <?php endif;?>

            <br>

        <?php
           $fields = 'what_were_looking_for';
           if(have_rows($fields)):
        ?>

            <div class="card-container-XXX new-card-container">
                <?php while(have_rows($fields)): the_row();?>
                <div class="card-XXX new-card-item new-card-item-coloured new-card-item-third">
                    <div class="new-card-copy new-card-copy-only">
                        <h3><?php the_sub_field('heading');?></h3>
                        <p><?php the_sub_field('paragraph');?></p>
                        <a href="<?php the_sub_field('link_url');?>" title="" class="button button-small button-primary new-card-button">Learn more</a>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        </section>


            <?php
            $args = array(
                'post_type' => 'stories',
                'post_status' => 'publish'
                );
            $acf_stories = get_field('stories');
            $featured_story = new WP_Query($args);


        if(!empty($acf_stories) && (count($acf_stories) > 0)):
            $ids = array();
            foreach($acf_stories as $story):
            $ids[] = $story->ID;
            endforeach;
            $featured_story = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
            $featured_story = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif;

            if($featured_story->have_posts()):
            ?>
          <aside>
            <div class=" testimonial full-width-quote ">
                <div class=" section content-slider-container testimonials">
                    <ul id="testimonial-slider" class="content-slider">
                            <?php while($featured_story->have_posts()): $featured_story->the_post() ?>
                            <li class="single-testimonial">
                                <figure class="full-width-figure">
                                    <img src="<?php if(has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } ?>">
                                </figure>
                                <blockquote>
                                    <svg aria-hidden="true">
                                        <use xlink:href
                                        ="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                                    </svg>

                                    <p style="width:100%;">
                                    <?php substr(the_content(), 0,45); ?>
                                    </p>

                                    <p style="width:100%;">
                                        <cite>
                                            <!-- <span><strong><?php echo "Name"; ?></strong>, </span> <?php echo "TITLE" ?> -->
                                            <span><a style="color:#efff00;" href="<?php echo get_permalink();?>">Link to full story</a></span>
                                        </cite>
                                    </p>
                                </blockquote>
                            </li>
                            <?php endwhile; ?>

                    </ul>
                </div>
            </div>
        </aside>
                        <?php wp_reset_postdata();?>
            <?php endif;?>

        <?php
            $apply = get_field('apply_now');
            //var_dump($apply);
            if($apply):
        ?>
        <section class="section">
            <div class="button-wrap">
            <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
            </div>
        </section>
            <?php endif;?>


    <?php endwhile; ?>
<?php endif; ?>


<script>
    (function ($) {
        $(document).ready(function (){


            $("#testimonial-slider").lightSlider({
                item: 1,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                // slideMargin: 300, //500
                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////
                speed: 400, //ms'
                auto: false,
                loop: true,
                // slideEndAnimation: true,
                pause: 2000,
                keyPress: false,
                controls: true,
                prevHtml: '',
                nextHtml: '',
                addClass: 'content-slider',
                // currentPagerPosition: 'middle',
                enableTouch: false,
                enableDrag: false,
                freeMove: false,
                // swipeThreshold: 40,
                responsive: [
                    // {
                    //     breakpoint: 1024,
                    //     settings: {
                    //         slideMargin: 500,
                    //     }
                    // },
                    //   {
                    //       breakpoint: 800,
                    //       settings: {
                    //           slideMargin: 500,
                    //       }
                    //   },

                    {
                        breakpoint: 800,
                        settings: {
                            auto: false,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            auto: false,
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            auto: false,
                            slideMargin: 245,
                        }
                    }
                ]
            });

        })
    })(jQuery);

</script>

<?php get_footer(); ?>
