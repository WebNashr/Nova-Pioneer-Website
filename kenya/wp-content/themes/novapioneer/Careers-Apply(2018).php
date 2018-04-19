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


        <section class="section section-no-bottom">
            <?php 
                $field = 'section_b';
                if(have_rows($field)):
            ?>
             <?php while(have_rows($field)): the_row();?>
            <h2><?php the_sub_field('heading');?></h2>
            <p><?php the_sub_field('sub_heading');?></p>
            <br>

            <?php endwhile;?>
            <?php endif;?>

        <?php
            $interview_process = 'interview_process';
            $title = the_sub_field('title');
            $paragraph = the_sub_field('paragraph');
        ?>
        <?php if(have_rows($interview_process)):?>
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
        <?php endif;?>
        </section>


        <?php
            //$url = get_field('link_url');
            $nfield = get_field('note');
            $nfield2 = get_field('note_2');
        ?>
        <section class="section ">
            <?php if($nfield):?>
            <p><b><?php echo $nfield; ?></b></p>
            <?php endif;?>

            <?php if($nfield2):?>
            <p><?php echo $nfield2; ?></p>
            <?php endif;?>
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
