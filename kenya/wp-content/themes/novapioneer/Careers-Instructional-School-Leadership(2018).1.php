<?php
/**
* Template Name: Careers-Instructional-School-Leadership (2018)-xxxxxx
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
                <h3>Why I become a school leader at Nova Pioneer?</h3> <br>
            </article>
         <?php if(have_rows($school_leaders)):?>
            <div class="card-container">
            <?php while(have_rows($school_leaders)): the_row();?>
                <div class="card">
                    <h1><?php the_sub_field($title)?></h1>
                    <p>
                    <?php the_sub_field($paragraph) ?>
                    </p>
                </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        </section>




            <?php 
            $url = get_field('apply');
            ?>
                <section class="section">
                <?php if($url):?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>

                <?php endif;?>
                </section>
                
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


            <?php endwhile; ?>
            <?php endif; ?>
        <?php get_footer(); ?>
