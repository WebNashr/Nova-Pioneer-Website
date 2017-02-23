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

        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="trigger"></div>


        <section class="section section-learning-content">

            <div class="page-navigation-container">
                <div class="navigation-wrap">
                    <div class="section-title">
                        <h3>Our Education Stages</h3>
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


            <article class="article article-container">

                <div class="article-body learning-content intro-paragraph">
                    <?php echo $introduction; ?>
                </div>

            </article>
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
            <figure class="full-width-image parallax" style="background-image: url(<?php echo $stage->banner_image; ?>);">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php echo $stage->banner_image_caption; ?></p>
                    </figcaption>
                </div>
            </figure>

            <section class="education-stage even-section">
                <div class="section-title anchor-link">
            <section class="section">
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

                    <blockquote>
                        <!-- <svg aria-hidden="true">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                        </svg> -->
                        <?php echo $vid_caption; ?>
                        <!-- <hr> -->
                        <span><?php echo $speaker; ?>, <?php echo $speaker_title; ?></span>
                    </blockquote>

                    <div class="media youtube-video">
                        <?php echo $video; ?>
                    </div>
                </article>
            </section>
            </div>
        </section>
        <?php endforeach; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>


<!-- smooth scroll
<script>
   $('a[href^="#"]').on('click', function(event) {
       var target = $(this.getAttribute('href'));
       if( target.length ) {
           event.preventDefault();
           $('html, body').stop().animate({
               scrollTop: target.offset().top
           }, 1000);
       }
   });
</script>-->
<!-- caption animation-->
<script>

   $(document).ready(function(){

     var captionWaypoint = $('.caption').waypoint(function(direction) {

         if(direction == 'down') {

             $(this.element).addClass('slideInLeft');

             this.destroy();
         }
     }, {
         offset: '95%'
     });
 });

</script>
