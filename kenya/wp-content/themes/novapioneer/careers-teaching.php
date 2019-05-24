<?php
/**
* Template Name: Careers - teaching
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
            $body = 'body';
            if(have_rows($body)):
        ?>
        <section class="section">
            <article class="article">
                <div class="alternating-container">
                    <?php while(have_rows($body)): the_row();?>
                    <div class="alternating-item">
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

                            <figcaption>
                                <blockquote>
                                    <?php the_sub_field('quote') ?>
                                    <cite><?php the_sub_field('quote_by') ?></cite>
                                </blockquote>
                            </figcaption>
                        </figure>

                        <div class="alternating-item-copy">
                            <h2><?php the_sub_field('title');?></h2>
                            <?php the_sub_field('paragraph');?>
                            <!--<blockquote><?php the_sub_field('quote') ?></blockquote>-->
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <!--hide this for now-->
        <?php
            $app_program = 'teacher_apprentice_program';
            if(have_rows($app_program)):
        ?>
        <section class="section" style="display: none;">
            <h1>Teacher Apprentice Program</h1>
            <br>
            <div class="card-container" style="width:90%;">
            <?php while(have_rows($app_program)): the_row(); ?>
                <div class="card">
                    <figure>
                    <img style="width:100%;" src="<?php the_sub_field('icon')?>"></img>
                    </figure>
                </div>

                <div class="card">
                    <p><?php the_sub_field('paragraph');?>
                    </p>
                    <a href="<?php the_sub_field('link_url');?>">Learn more about the Teacher Apprentice Programme here</a>
                </div>

            <?php endwhile; ?>

            </div>
            <?php $url = get_field('apply_now');  if($url)?>
                <div class="button-wrap">
                    <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                </div>
            <?php endif;?>
        </section>


        <!--hide this for now-->
        <section class="section section-no-bottom" style="display: none;">
            <figure class="interrupter-image">
                <img src="<?php the_field('teacher_apprentice_programme_image') ?>" alt="">
            </figure>

            <div style="max-width: 1024px">
                <h2><?php the_field('teacher_apprentice_programme_title') ?></h2>
                <br>
                <?php the_field('teacher_apprentice_programme_text') ?>
                <br>
                <br>

                <h3>Who may apply</h3>
                <br>
                <?php the_field('teacher_apprentice_programme_apply') ?>
            </div>
        </section>



        <?php
            $args = array(
                'post_type' => 'profile',
                'post_status' => 'publish',
                'tax_query' =>
                    array(
                        'taxonomy' => 'teacher'
                    )
            );
            $acf_teachers = get_field('meet_our_teacher');
            $featured_teacher = new WP_Query($args);
            if(!empty($acf_teachers) && (count($acf_teachers) > 0)):
                $ids = array();
            foreach($acf_teachers as $teacher):
                $ids[] = $teacher->ID;
            endforeach;
                $featured_teacher = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
                $featured_teacher = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif;
        ?>
        <?php if($featured_teacher->have_posts() ): ?>
        <section class="section section-no-bottom">
            <h2>Meet our teachers</h2>
            <br>

            <article class="article">
                <div class="new-card-container">
                    <?php while($featured_teacher->have_posts()): $featured_teacher->the_post(); ?>
                    <div class="new-card-item new-card-item-plain new-card-item-quarter">
                        <figure class="new-card-img">
                            <img
                                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'square-medium')[0]; ?>"
                                alt="<?php the_title();?>"
                            >
                        </figure>

                        <div class="new-card-copy">
                            <h3><?php the_title();?></h3>
                            <h6><?php the_field('quote', $featured_teacher->ID);?></h6>
                            <a href="<?php echo get_permalink();?>">Read my story</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </article>
        </section>
        <?php wp_reset_postdata();?>
        <?php endif;?>


        <?php
            $field = 'faq';
            $sub_field_1 = 'question';
            $sub_field_2 = 'answer';
        ?>
        <section class="section">
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
                        <?php  endwhile; wp_reset_postdata();?>
                    </ul>

            <?php endif; ?>
                </article>
            </section>
        </section>


        <?php
            $apply = get_field('apply_now_link');
        ?>
        <section class="section section-no-top">
            <?php if($apply)?>
            <div class="button-wrap button-wrap-center">
                <a href="<?php echo $apply ?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
