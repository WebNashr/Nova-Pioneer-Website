<?php
/**
* Template Name: Careers-Apply(2018)
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
                <h2>How to apply </h2> 
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

         <section class="section">
                <h2>The Interview Process</h2>
            <p>The interview process consists of the following components:</p><br>

            <article class="article">
            <div class="card-container steps-container">
                    <?php $i = 0 ; ?>
                <?php while(have_rows($interview_process)): the_row()?>
                    <div class="card admission-step">
                    <h1>-<?php echo $i + 1;?>-</h1>
                    <h1><?php the_sub_field('title'); echo ': ';?></h1>
                    <p><?php  the_sub_field('paragraph') ?></p>
                    </div>
                    <?php $i++; ?>
                <?php endwhile?>    
            </div>
            </article>
            </section>

        <?php endif;?>


        <?php 
            $url = get_field('link_url');
        ?>
        <section class="section ">
            <?php if($url):?>
            <p><b>Note: The process may vary depending on the role you are applying for and whether
                you are applying in or out of the peak hiring season.</b></p>

            <p>If you think Nova Pioneer is the right place for you then see what jobs are available
                <a href="<?php echo $url?>">here</a>.</p>

                <?php endif;?>    
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
