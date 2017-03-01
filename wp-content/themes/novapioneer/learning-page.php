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

        <section class="section section-hero" <?php if(has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0] . ');"'; endif; ?> data-type="background" data-speed="4">
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

            <!-- <article class="article article-container">

                <div class="article-body learning-content intro-paragraph">
                    <?php echo $introduction; ?>
                </div>

            </article> -->
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
            <figure class="full-width-image parallax" style="background-image: url(<?php echo $stage->banner_image; ?>);" data-type="background" data-speed="7">
                <div class="section-content full-image-caption animated caption">
                    <figcaption>
                        <p><?php echo $stage->banner_image_caption; ?></p>
                    </figcaption>
                </div>
            </figure>

            <section class="education-stage">
                <div class="section-title anchor-link">
            <section class="section last-stage">
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

        <!-- <section class="section even-section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">School &amp; Organisation Culture</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </article>
        </section> -->

        <!-- <section class="section even-section">
          <div class="section-content section-content-plain principles-container">

              <div class="section-content-item section-content-item-third principle-card card-1">
                  <h2 class="number">1</h2>
                  <h3>Joy of Learning</h3>
                  <div class="small-divider"></div>
                  <p>We are life-long learners and we are fueled by curiosity and discovery</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-2">
                  <h2 class="number">2</h2>
                  <h3>Greater Together</h3>
                  <div class="small-divider"></div>
                  <p>We constantly support our teammates because we know that we can achieve more together.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-3">
                  <h2 class="number">3</h2>
                  <h3>Always Growing</h3>
                  <div class="small-divider"></div>
                  <p>We constantly seek out difficult challenges, share and receive feedback as a gift, and see every failure as an opportunity to grow.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-4">
                  <h2 class="number">4</h2>
                  <h3>Servant Leadership</h3>
                  <div class="small-divider"></div>
                  <p>Great leaders always put others before themselves and engage their community with humility and generosity. We see leadership as a way of improving the world, not simply promoting ourselves.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-5">
                  <h2 class="number">5</h2>
                  <h3>Solutions First</h3>
                  <div class="small-divider"></div>
                  <p>Everything is possible when we are creative and think critically about the problem. We are always thinking of new solutions when faced with difficult challenges.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-6">
                  <h2 class="number">6</h2>
                  <h3>High Expectations</h3>
                  <div class="small-divider"></div>
                  <p>We sweat the small stuff and take pride in what we do.We set goals that others think are impossible and never stop until we achieve them.</p>
              </div>

          </div>
        </section> -->


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
