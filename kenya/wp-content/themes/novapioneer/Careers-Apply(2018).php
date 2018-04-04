<?php
/**
* Template Name: Careers-Apply(2018)-static
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

        

        <?php //if(the_content()):?>
        <section class="section">
            <article class="article">
                <h3>How to apply </h3> 
                <p><?php echo the_content();?></p>
            </article>
        </section>
        <?php //endif;?>

        <?php
        $interview_process = 'interview_process';
        $title = the_sub_field('title');
        $paragraph = the_sub_field('paragraph');
        ?>
        <?php if(have_rows($interview_process)):?>
        <section class="section ">
            <p>The interview process consists of the following components:</p>

            <ol>
                <?php while(have_rows($interview_process)): the_row()?>
                <li><?php the_sub_field('title'); echo ': '; the_sub_field('paragraph') ?></li>
                <?php endwhile?>
            </ol>
        </section>
        <?php endif;?>


        <?php 
            $url = get_field('link_url');
        ?>
        <section class="section ">
            <?php if($url):?>
            <p>Note: The process may vary depending on the role you are applying for and whether
                you are applying in or out of the peak hiring season.</p>

            <p>If you think Nova Pioneer is the right place for you then see what jobs are available
                <a href="<?php echo $url?>">here</a>.</p>

                <?php endif;?>    
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
