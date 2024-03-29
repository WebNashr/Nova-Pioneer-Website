<?php
/**
* Template Name: Careers - professional development
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
            $title = get_field('section_a');
        ?>
        <section class="section section-page-intro">
            <article class="article">
                <?php if($title):?>
                <h2><?php echo $title ?></h2>
                <?php endif;?>

                <?php the_content();?>
            </article>
        </section>



        <?php
            $body = 'body';
            if(have_rows($body)):
        ?>
            <?php $p = 0 ; ?>
            <?php while(have_rows($body)): the_row();?>
        <section class="section section-no-bottom section-interrupter">
            <figure class="interrupter-image">
                <?php $image = get_sub_field('image'); ?>

                <?php if( !empty($image) ):
                    // vars
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];

                    // thumbnail
                    $size = '16-9-large';
                    $thumb = $image['sizes'][ $size ];
                ?>

                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                <?php endif; ?>

                <span class="interrupter-bg"></span>

                <figcaption>
                    <div class="interrupter-number"><?php echo $p + 1;?></div>
                </figcaption>
            </figure>

            <div class="interrupter-text">
                <h2><?php the_sub_field('title');?></h2>
                <p><?php the_sub_field('paragraph');?></p>
            </div>
        </section>
            <?php $p++; ?>
            <?php endwhile;?>
        <?php endif;?>



        <section class="section section-interrupter section-interrupter-quote">
            <figure class="interrupter-image">
                <?php $qimage = get_field('quote_image'); ?>

                <?php if( !empty($qimage) ):
                    // vars
                    $url = $qimage['url'];
                    $title = $qimage['title'];
                    $alt = $qimage['alt'];

                    // thumbnail
                    $size = 'square-small';
                    $thumb = $qimage['sizes'][ $size ];
                ?>

                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                <?php endif; ?>

                <figcaption>
                    <blockquote><?php $qtext = get_field('quote_text'); echo $qtext; ?></blockquote>

                    <cite><?php $qcite = get_field('quote_cite'); echo $qcite; ?></cite>
                </figcaption>
            </figure>
        </section>


        <!--hide this for now-->
        <?php
            $title = get_field('section_c');
        ?>
        <section class="section section-no-bottom" style="display: none;">
            <article class="article">
                <?php if($title):?>
                <h2><?php echo $title ?></h2>
                <?php endif; ?>
                    <br>
                <?php
                    $dev_programs = 'development_programs';
                    if(have_rows($dev_programs)):
                ?>
                <ol>
                    <?php while(have_rows($dev_programs)): the_row();?>
                        <li><?php the_sub_field('title'); ?> – <?php the_sub_field('text'); ?></li>
                    <?php endwhile; ?>
                </ol>
                <?php endif;?>
            </article>

            <div class="card-container">
            </div>
        </section>


        <?php
            $apply = get_field('apply_now_link');
        ?>
        <section class="section">
            <?php if($apply)?>
            <div class="button-wrap button-wrap-center">
                <a href="<?php echo $apply ?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">APPLY NOW</a>
            </div>
        </section>

        <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>
