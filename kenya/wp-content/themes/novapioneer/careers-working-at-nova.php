<?php
/**
* Template Name: Careers - working at Nova
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <!--<h1><?php the_title(); ?></h1>-->
                    <h1><?php the_field('page_title') ?></h1>
                </div>
            </div>
        </section>

        <section class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <!--<h2 class="media-heading ribbon">&nbsp;</h2>-->

                <div class="main-callout-box">
                    <hr>
                    <!--<h1 class="animated-title"><?php the_title(); ?></h1>-->
                    <!--<h3>We're hiring!'</h3>-->
                    <h1 class="animated-title"><?php the_field('page_title') ?></h1>

                    <?php
                        $apply = get_field('apply_now');
                        if($apply):
                    ?>
                    <br>
                    <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
                    <?php endif;?>
                </div>
            </div>
        </section>


        <!--
        <section class="section section-no-bottom section-page-intro">
            <article class="article">
                <?php the_content();?>
            </article>
        </section>
        -->


        <?php
            $title = 'section_a';
            if(have_rows($title)):
        ?>
        <?php while(have_rows($title)): the_row();?>
        <section class="section section-no-bottom section-learning-content-XXX" style="display: none;">
            <div class="page-navigation-container">
                <div class="navigation-wrap" style="max-width: unset;">
                    <div class="section-title">
                        <h3>Join us</h3>
                    </div>

                    <?php
                        $subField = get_sub_field('careers_navigation');
                        //var_dump($subField[0]['text']);
                        if($subField):
                        $i = 1;
                        //echo sizeof($subField);
                    ?>
                    <div class="links-inner-wrap">
                        <?php foreach($subField as $s): ?>
                            <div class="section-content-item">
                                <div class="anchor-link">
                                    <a href="<?php echo $s['url'] ?>"><?php echo $s['text'] ?></a>
                                </div>
                            </div>
                            <?php
                                // if($i < sizeof($subField)) {
                                //     echo '-';
                                // }
                                // $i++;
                            ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
        <?php endwhile;?>
        <?php endif;?>


        <?php
            $intro = 'intro';
            if(have_rows($intro)):
            $i = 0;
        ?>
        <section class="section section-no-bottom" style="display: none;">
            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php while(have_rows($intro)): the_row();?>
                        <div class="card-XXX admission-step-XXX new-card-item new-card-item-plain new-card-item-centre new-card-item-quarter">
                            <figure class="new-card-img" style="margin: 1.5rem auto 0;">
                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                            </figure>

                            <div class="new-card-copy">
                                <!--
                                <span class="new-card-number"><?php echo $i + 1;?></span>
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <h6><?php the_sub_field('sub_heading'); ?></h6>
                                -->

                                <h3><?php the_sub_field('sub_heading'); ?></h3>
                                <p><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endwhile?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <?php
            $intro = 'intro';
            if(have_rows($intro)):
            $i = 0;
        ?>
        <section class="section section-no-bottom">
            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php while(have_rows($intro)): the_row();?>
                        <div class="card-XXX admission-step-XXX new-card-item new-card-item-transparent new-card-item-plain new-card-item-centre new-card-item-quarter">
                            <figure class="new-card-img" style="margin: 1.5rem auto 0;">
                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                            </figure>

                            <div class="new-card-copy">
                                <h3><?php the_sub_field('sub_heading'); ?></h3>
                                <p><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endwhile?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <!--<section class="section">-->
        <?php
            $opp = 'opportunities';
            if(have_rows($opp)):
        ?>
        <section class="section section-no-bottom-" style="display:none;">
            <?php
                $field = 'section_b';
                if(have_rows($field)):
            ?>
            <?php while(have_rows($field)): the_row(); ?>
            <h2><?php the_sub_field('heading');?></h2>
            <h4><?php the_sub_field('sub_heading');?></h4>
            <?php endwhile;?>
            <?php endif;?>
            <br>
            <br>

            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container-XXX alternating-container">
                    <?php while(have_rows($opp)): the_row();?>
                    <div class="card-XXX admission-step-XXX new-card-item-XXX alternating-item new-card-item-third-XXX">
                        <figure class="alternating-item-img">
                            <img src="<?php echo the_sub_field('image'); ?>">
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




        <section class="section section-no-bottom section-page-intro">
            <article class="article">
                <h2>We’re seeking future Novaneers to join our growing pan-African network of schools across a variety of roles</h2>
                <br>
            </article>
        </section>

        <?php
            $opp = 'opportunities';
            if(have_rows($opp)):
        ?>
        <section class="section section-no-top section-no-bottom-XXX">
            <article class="article">
                <div class="opportunities">
                    <?php $i = 0; ?>
                    <?php while(have_rows($opp)): the_row();?>
                    <!--<div class="opportunity-labels">-->
                        <input type="radio" name="opportunity" id="opportunity-<?php echo $i + 1;?>" hidden>
                        <label for="opportunity-<?php echo $i + 1;?>" class="opportunity-label"><?php the_sub_field('heading');?></label>
                    <!--</div>-->
                    <?php $i++; ?>
                    <?php endwhile;?>

                    <?php $i = 0 ; ?>
                    <?php while(have_rows($opp)): the_row();?>
                    <div class="opportunity opportunity-<?php echo $i + 1;?> alternating-item-xxx">
                        <figure class="opportunity-img">
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

                        <div class="opportunity-copy">
                            <h2><?php the_sub_field('heading');?></h2>
                            <p><?php the_sub_field('paragraph_text');?></p>
                            <a href="<?php the_sub_field('link_url');?>" title="" class="button button-small button-primary">Learn more</a>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endwhile;?>

                    <script>
                        $(document).ready(function () {
                            $("#opportunity-1").prop("checked", true);
                        });
                    </script>
                </div>
            </article>
        </section>
        <?php endif;?>


        <?php
            $title = 'section_c';
            if(have_rows($title)):
        ?>
        <section class="section section-no-top" style="display:none;">
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
        </section>
        <?php endif;?>


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
        <aside style="display:none;">
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


        <section class="section section-no-top">
            <article class="article article-video-embed">
                <div class="media youtube-video">
                    <?php the_field('working_video') ?>
                </div>
            </article>
        </section>


        <?php
            $apply = get_field('apply_now');
            //var_dump($apply);
            if($apply):
        ?>
        <section class="section section-no-top">
            <div class="button-wrap button-wrap-center">
                <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
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

