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
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>


        <section class="section section-no-bottom section-page-intro">
            <article class="article">
                <h2>How to apply</h2>
                <?php echo the_content();?>
            </article>
        </section>


        <?php
            $interview_process = 'interview_process';
            $title = the_sub_field('title');
            $paragraph = the_sub_field('paragraph');
        ?>
        <?php if(have_rows($interview_process)):?>
        <section class="section section-no-bottom">
            <h2>The Interview Process</h2>
            <p>The interview process consists of the following components:</p><!--!!! Young: this text has to be dynamic-->
            <br>

            <article class="article">
                <div class="card-container-XXX steps-container-XXX new-card-container">
                    <?php $i = 0 ; ?>
                    <?php while(have_rows($interview_process)): the_row()?>
                        <div class="card-XXX admission-step-XXX new-card-item new-card-item-third">
                            <div class="new-card-copy new-card-copy-only">
                                <span class="new-card-number"><?php echo $i + 1;?></span>
                                <h3><?php the_sub_field('title'); echo '';?></h3>
                                <p><?php  the_sub_field('paragraph') ?></p>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endwhile?>
                </div>
            </article>
        </section>
        <?php endif;?>


        <!--!!! Young: content in this section needs to be handled on the back-end, not static in the template-->
        <?php
            $url = get_field('link_url');
        ?>
        <section class="section ">
            <?php if($url):?>
            <p><b>Note: The process may vary depending on the role you are applying for and whether
                you are applying in or out of the peak hiring season.</b></p>

            <p>If you think Nova Pioneer is the right place for you then see what jobs are available <a href="<?php echo $url?>">here</a>.</p>

            <?php endif;?>
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
