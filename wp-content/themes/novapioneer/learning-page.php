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
                <div class="section-title"><h1>Our Education Stages</h1></div>
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
                        <h3><?php echo $card->title; ?></h3>
                        <?php echo $card->body; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <?php foreach($education_stages as $stage): $stage = (object)$stage; ?>

            <span class="anchor-link" id="<?php echo strtolower($stage->title); ?>"></span>
            <figure class="full-width-image" style="background-image: url(<?php echo $stage->banner_image; ?>);">
                <div class="section-content full-image-caption">
                    <figcaption>
                        <p><?php echo $stage->banner_image_caption; ?></p>
                    </figcaption>
                </div>
            </figure>

            <section class="section section-pair education-stage">
                <div class="section-content-item section-content-item-half">
                    <h1><?php echo $stage->title; ?></h1>
                    
                    <?php echo $stage->description; ?>

                    <div class="testimonial pull-quote">
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
                            <svg aria-hidden="true">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                            <?php echo $vid_caption; ?>
                            <cite><span><?php echo $speaker; ?>,</span> <?php echo $speaker_title; ?></cite>
                        </blockquote>
                    </div>

                </div>

                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video">
                        <?php echo $video; ?>
                    </div>
                </div>
            </section>

        <?php endforeach; ?>

        <section class="section section-pair section-subscribe">
            <div class="section-navigation">
                <h1>Stay Updated</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-full">
                    <header>
                        <p>Enter your email address below and receive the latest Nova Pioneer news, upcoming events and admission opportunities.</p>
                    </header>

                    <form action="" method="POST">
                        <fieldset class="sign-up" >
                            <input name="email" placeholder="Your Email Address" class="" type="text">

                            <select id="select-option">
                                    <option value="Please Select Your Area of Interest">Please Select Your Area of Interest</option>
                                    <option value="School Admissions">School Admissions</option>
                                    <option value="School Events">School Events</option>
                                    <option value="Latest News">Latest News</option>
                            </select>
                            <input name="Sign Up" value="Sign Up" class="button button-large button-primary" style="" type="submit">

                        </fieldset>
                    </form>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
