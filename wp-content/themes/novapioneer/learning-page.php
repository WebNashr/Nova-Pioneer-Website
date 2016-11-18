<?php 
/**
* Template Name: Learning Page
*
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $education_stages = get_field('education_stages');
        $first_intro = get_field('intro_1');
        $second_intro = get_field('intro_2');
        $second_intro_cards = get_field('second_intro_cards');
        $main_hero_section_title = get_field('main_hero_section_title');
        $our_learning_approach = get_field('our_learning_approach');
    
    ?>
        <article>
            <header>
                <figure>
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" />
                    <figcaption><?php echo !empty($main_hero_section_title) ? $main_hero_section_title : ""; ?></figcaption>
                </figure>
            </header>

            <section>
                <h2>Our Learning Approach</h2>
                <?php echo !empty($our_learning_approach) ? $our_learning_approach : ""; ?>
            </section>

            <section>
                <div>
                    <?php echo $first_intro; ?>
                </div>

                <div>
                    <?php echo $second_intro; ?>
                </div>

                <div>
                    <?php foreach($second_intro_cards as $card): $card = (object)$card; ?>
                        <div>
                            <h5><?php echo $card->title; ?></h5>
                            <figure>
                                <img src="<?php echo $card->image; ?>" />
                            </figure>
                            <?php echo $card->contents; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section>

                <h3>Education Stages</h3>
                
                <?php foreach($education_stages as $stage): $stage = (object)$stage; ?>
                    <div>
                        <h4><?php echo $stage->title; ?></h4>

                        <?php foreach($stage->hero_section as $hero_section): $hero_section = (object)$hero_section; ?>
                            <figure>
                                <img src="<?php echo $hero_section->image; ?>" />
                                <figcaption><?php echo $hero_section->caption; ?></figcaption>
                            </figure>
                        <?php break; // break because we only need one section?>
                        <?php endforeach; ?>

                        <?php foreach($stage->video_section as $vid_section): $vid_section = (object)$vid_section; ?>
                            <div>
                                <?php echo $vid_section->video; ?>
                                <p><?php echo $vid_section->video_quote; ?></p>
                                <h6><?php echo $vid_section->video_narrator; ?></h6>
                            </div>
                        <?php break; // break because we only need one vid_section?>
                        <?php endforeach; ?>

                        <?php foreach($stage->content as $content): $content = (object)$content; ?>
                            <div>
                                <div class="paragraph_1">
                                    <?php echo $content->paragraph_1; ?>
                                </div>
                                <div class="paragraph_2">
                                    <?php echo $content->paragraph_2; ?>
                                </div>
                            </div>
                        <?php break; // break because we only need one section?>
                        <?php endforeach; ?>
                        
                    </div>
                <?php endforeach; ?>

            </section>
        </article>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
