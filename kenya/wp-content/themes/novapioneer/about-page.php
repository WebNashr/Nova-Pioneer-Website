<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post();
        $our_vision = get_field('our_vision');
        $our_mission = get_field('our_mission');
        $our_culture = get_field('our_culture');
        $our_story = get_field('our_story');

        // Get the paragraphs in $our_mission for implementing the read-more functionality
        preg_match_all('|<p>(.+?)</p>|', $our_mission, $matches);
        $our_mission_paragraphs = $matches[1];
        preg_match_all('|<p>(.+?)</p>|', $our_story, $s_matches);
        $our_story_paragraphs = $s_matches[1];
        ?>
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section" id="readmoreScroll">
            <article class="article article-inner article-inner-alt mission-vision">
                <h2 class="centered-title">Our Story</h2>

                <!-- <input type="checkbox" class="read-more-state" id="post-121"/>-->
                <div class="read-more-wrap">
                    <p><?php $counter_s = 0;
                        echo array_shift($our_story_paragraphs); ?></p>
                    <span class="read-more-target-js" data-collapse="story">
                           <?php foreach ($our_story_paragraphs as $s_paragraph): $counter_s++ ?>
                               <p><?php echo $s_paragraph; ?></p>
                           <?php endforeach; ?>
                </span></div>
                <?php if ($counter_s > 0): ?>
                  <div class="button-wrap">
                    <button class="read-more-trigger-js button button-tiny button-primary" data-collapse="story">
                        Read More
                    </button>
                  </div>
                <?php endif; ?>
                <h2 class="centered-title">Our Vision</h2>
                <?php echo $our_vision; ?>

                <h2 class="centered-title" id="mission-scroll">Our Mission</h2>
                <!-- <input type="checkbox" class="read-more-state" id="post-<?php echo get_the_ID(); ?>"/>-->
                <div class="read-more-wrap">
                    <p><?php $counter_m = 0;
                        echo array_shift($our_mission_paragraphs); ?></p>
                  <span class="read-more-target-js" data-collapse="mission">
                      <?php foreach ($our_mission_paragraphs as $paragraph): $counter_m++; ?>
                          <p><?php echo $paragraph; ?></p>
                      <?php endforeach; ?>
                  </span>
                </div>
                <?php if ($counter_m > 0): ?>
                  <div class="button-wrap">
                    <button class="read-more-trigger-js button button-tiny button-primary" data-collapse="mission">
                        Read More
                    </button>
                  </div>
                <?php endif ?>


            </article>
        </section>


        <section class="full-width-image-container" data-enllax-type="foreground">
            <figure class="full-width-image parallax"
                    style="background-image: url(<?php echo get_field('our_culture_banner_image'); ?>);"
                    data-enllax-ratio="0.2">
                <div class="section-content full-image-caption animated caption slideInLeft">
                    <figcaption>
                        <?php echo get_field('our_culture_banner_image_caption'); ?>
                    </figcaption>
                </div>
            </figure>
        </section>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">Our Culture</h2>

                <?php echo $our_culture; ?>

            </article>
        </section>

        <section class="section">
            <div class="section-content section-content-plain principles-container">

                <?php $number = 1; ?>
                <?php foreach (get_field('culture_principles') as $principle): $principle = (object)$principle; ?>
                    <div
                        class="section-content-item section-content-item-third principle-card card-<?php echo $number; ?>">
                        <h2 class="number"><?php echo $number; ?></h2>
                        <h3><?php echo $principle->title; ?></h3>
                        <div class="small-divider"></div>
                        <?php echo $principle->description; ?>
                    </div>
                    <?php $number++; ?>
                <?php endforeach; ?>

            </div>
        </section>


    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>

<script>
    jQuery(document).ready(function ($) {
        var readmoreCounter = 1;
        jQuery('.read-more-target-js p').hide();
        jQuery(".read-more-trigger-js").click(function () {
            var collapse = $(this).data('collapse')
            readmoreCounter += 1 - 1;
            console.log(readmoreCounter++)
            var offset = 75; //Offset of 75px
            if (readmoreCounter % 2 === 0) {
                //  do some stuff if you want
                $(this).text('Read Less');

            }
            else {
                $(this).text('Read More');
                if (collapse == 'mission') {
                    jQuery('html, body').animate({
                        scrollTop: $('#mission-scroll').offset().top - offset
                    }, 2000);
                } else {
                    jQuery('html, body').animate({
                        scrollTop: $('#readmoreScroll').offset().top - offset
                    }, 2000);
                }

            }
            $('[data-collapse="' + collapse + '"] p').slideToggle("slow", function () {

            });

        });
    })
</script>


<?php get_footer(); ?>
