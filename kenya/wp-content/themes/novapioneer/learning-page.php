<?php
/**
* Template Name: Learning Page
*
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $introduction       = get_field('introduction');
        $intro_cards        = get_field('intro_cards');
        $education_stages   = get_field('education_stages');

    ?>

        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
            </div>
        </section>


        <div class="trigger"></div>


        <section class="section section-learning-content">

            <div class="page-navigation-container">
                <div class="navigation-wrap">
                    <div class="section-title">
                        <h3>Our Learning Approach</h3>
                    </div>
                    <div class="links-inner-wrap">
                        <?php foreach($education_stages as $stage): $stage = (object)$stage; ?>
                            <div class="section-content-item">
                                <div class="anchor-link">
                                    <a href="#<?php echo strtolower($stage->title); ?>"><?php echo $stage->title; ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-content section-content-plain">
                <?php foreach($intro_cards as $card): $card = (object)$card; ?>
                    <div class="section-content-item section-content-item-quarter learning-approach">
                        <figure>
                            <img src="<?php echo $card->image; ?>" />
                        </figure>
                        <h5><?php echo $card->title; ?></h5>
                        <?php echo $card->body; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <?php foreach($education_stages as $stage): $stage = (object)$stage; ?>
            <!-- <span class="anchor-link" id="<?php echo strtolower($stage->title); ?>"></span> -->
            <section class="full-width-image-container" data-enllax-type="foreground">
            <figure class="full-width-image parallax" style="background-image: url(<?php echo $stage->banner_image; ?>);" data-enllax-ratio="0.2" >
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php echo $stage->banner_image_caption; ?></p>
                    </figcaption>
                </div>
            </figure>
            </section>

            <section class="section education-stage">

                <div class="anchor-link">
            <!-- <section class="section"> -->
                <article class="article article-inner article-inner-alt">
                    <h2 id="<?php echo strtolower($stage->title); ?>"><?php echo $stage->title; ?></h2>
                    <?php echo $stage->description; ?>
                    <?php
                        $vid_caption = get_field('video_caption', $stage->video->ID);
                        $type = get_field('type', $stage->video->ID);
                        $video = get_field('video', $stage->video->ID);
                        $speaker = "";
                        $speaker_title ="";

                        if($type === "general"){
                            $speaker = get_field('caption_speaker', $stage->video->ID);
                            $speaker_title = get_field('caption_speaker_title', $stage->video->ID);
                        }

                        if($type === "student"){
                            $speaker = get_field('student_name', $stage->video->ID);
                            $speaker_title = "Nova Pioneer Student";
                        }
                    ?>


                      <div class="testimonial pull-quote article-quote">
                        <blockquote>
                            <svg aria-hidden="true">
                                <use xlink:href="<?php echo novap_get_baseurl(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                            <?php echo $vid_caption; ?>
                            <!-- <hr> -->
                            <cite><span><strong><?php echo $speaker; ?></strong>, <?php echo $speaker_title; ?></span></cite>
                        </blockquote>
                      </div>

                    <div class="media youtube-video">
                        <?php echo $video; ?>
                    </div>
                </article>
            <!-- </section> -->
            </div>

        </section>
        <?php endforeach; ?>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>

<?php get_footer(); ?>

<!-- <script>
  (function($){
      //Plugin activation
      $(window).enllax();

//            $('#some-id').enllax();

//            $('selector').enllax({
//                type: 'background', // 'foreground'
//                ratio: 0.5,
//                direction: 'vertical' // 'horizontal'
//            });

  })(jQuery);

  </script> -->
