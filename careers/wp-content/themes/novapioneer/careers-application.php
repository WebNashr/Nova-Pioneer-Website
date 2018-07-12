<?php
/**
* Template Name: Careers - application
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

                    <?php
                        $apply = get_field('apply_to_jobs');
                        if($apply):
                    ?>
                    <br>
                    <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">See open jobs</a>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>

                    <?php
                        $apply = get_field('apply_to_jobs');
                        if($apply):
                    ?>
                    <br>
                    <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-grosse button-primary" title="">See open jobs</a>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <?php
            $field = get_field('section_a');
        ?>
        <section class="section section-no-bottom section-page-intro">
            <article class="article">
                <?php if($field):?>
                    <h2><?php echo $field;?></h2>
                <?php endif; ?>

                <!--<h2><?php the_content();?></h2>-->
            </article>
        </section>
        <br>

        <section class="section section-no-top section-no-bottom">
            <article style="max-width: 1024px">
                <?php the_field('introduction') ?>
                <br>
            </article>
        </section>


        <section class="section section-no-bottom" style="display: none;">
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
                    <div class="new-card-container">
                        <?php $i = 0 ; ?>
                        <?php while(have_rows($interview_process)): the_row()?>
                            <div class="new-card-item new-card-item-coloured new-card-item-third">
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


        <section class="section">
            <article class="article article-interview">
                <?php
                    $interview_process = 'interview_process';
                    $title = the_sub_field('title');
                    $paragraph = the_sub_field('paragraph');
                ?>
                <?php if(have_rows($interview_process)):?>

                <div class="interview-steps">
                    <?php $i = 0 ; ?>
                    <?php while(have_rows($interview_process)): the_row()?>
                    <div class="interview-step interview-step-<?php echo $i + 1;?>">
                    <input type="radio" name="interview-step-progress" id="interview-step-<?php echo $i + 1;?>" hidden>
                    <label for="interview-step-<?php echo $i + 1;?>" class="interview-step-label">
                        <div class="interview-number"><?php echo $i + 1;?></div>
                        <heading class="interview-heading">
                            <h3 class="interview-title"><?php the_sub_field('title'); echo '';?></h3>
                            <p class="interview-description"><?php  the_sub_field('paragraph') ?></p>
                        </heading>
                    </label>
                    </div>
                    <?php $i++; ?>
                    <?php endwhile?>

                    <!--<a href="" title="" class="interview-step-apply">Apply</a>-->
                </div>
                <?php endif;?>

                <div class="interview-timeline"></div>

                <script>
                    $(document).ready(function () {
                        $("#interview-step-1").prop("checked", true);
                    });
                </script>
            </article>
        </section>


        <?php
            //$url = get_field('link_url');
            $nfield = get_field('note');
            $nfield2 = get_field('note_2');
        ?>
        <section class="section section-no-top">
            <?php if($nfield):?>
            <p><?php echo $nfield; ?></p>
            <?php endif;?>

            <?php if($nfield2):?>
            <p><?php echo $nfield2; ?></p>
            <?php endif;?>
        </section>


        <?php
            $apply = get_field('apply_to_jobs');
        ?>
        <section class="section section-no-top">
            <?php if($apply)?>
            <div class="button-wrap button-wrap-center">
                <a href="<?php echo $apply ?>" target="_blank" class="button button-large button-primary" title="">See open jobs</a>
            </div>
        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
