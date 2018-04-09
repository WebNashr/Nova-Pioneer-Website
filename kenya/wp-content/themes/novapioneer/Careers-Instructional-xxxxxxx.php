<?php
/**
* Template Name: Careers-Instructional-xxxxxxx
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

        
        <!-- Intro -->
        <?php 
        
        ?>

        <section class="section">
            <?php //while(); ?>
                <article class="article">
                <p><?php echo the_content(); ?></p>
                </article>
            <?php //endwhile; wp_reset_postdata(); ?>
        </section>

        <?php 
            $body = 'body';
        ?>

        <section class="section ">
            <?php if(have_rows($body)):?>
            <div class="card-container">
                <?php while(have_rows($body)): the_row();?>
                <div class="card">
                    <h2><?php the_sub_field('title') ?></h2>
                    <p>
                    <?php the_sub_field('paragraph') ?>
                    </p>
                </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        </section>

        <?php 
            $school_leaders = 'why_become_nova_leader';
            $title = 'title';
            $paragraph = 'paragraph';
        ?>
        <section class="section">
            <article class="article">
                <h3>Why become a school leader at Nova Pioneer?</h3> 
            </article>
            <?php if(have_rows($school_leaders)):?>

            <ol>
                <?php while(have_rows($school_leaders)): the_row();?>
                <li>
                <b> <?php the_sub_field($title)?></b>
                    <?php the_sub_field($paragraph) ?>
                </li>

            <? endwhile;?>

            </ol>
            
            <? endif;?>
        </section>
 



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
