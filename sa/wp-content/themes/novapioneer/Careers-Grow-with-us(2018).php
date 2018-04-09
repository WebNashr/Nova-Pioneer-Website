<?php
/**
* Template Name: Careers-Grow-with-us (2018)
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


        <section class="section">
            <article class="article">
                <p><?php the_content(); ?></p>
            </article>
        </section>

        <div class="border"></div>
        
        <?php 
            $body = 'body';
            if(have_rows($body)):
        ?>
        <section class="section">
            <article class="article ">
            <div class="card-container steps-container">
                <?php while(have_rows($body)): the_row();?>
                <div class="card admission-step">
                <h3><?php the_sub_field('title');?></h3>
                <p>
                    <?php the_sub_field('paragraph');?>
                </p>
               </div>
            <?php endwhile;?>

            </div>
            </article>
        </section>
            <?php endif;?>

        <?php 
            $dev_programs = 'development_programs';
            if(have_rows($dev_programs)):
        ?>
        <section class="section">
            <article class="article">
                <h3>PROFESSIONAL DEVELOPMENT PROGRAMS</h3> 
                <ol>
                <?php while(have_rows($dev_programs)): the_row();?>
                    <li><?php the_sub_field('title'); ?> – <?php the_sub_field('text'); ?></li>

                <?php endwhile; ?>    
                </ol>
            </article>

            <div class="card-container">
            </div>

        </section>
            <?php endif;?>


            <?php 
            $url = get_field('apply_url');
            ?>
                <section class="section">
                <?php if($url)?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
                </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
