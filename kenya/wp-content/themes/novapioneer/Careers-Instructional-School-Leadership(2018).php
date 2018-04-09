<?php
/**
* Template Name: Careers-Instructional-School-Leadership (2018)
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


        <?php
            $args = array(
                'post_type' => 'profile',   
                'post_status' => 'publish',    
                'tax_query' =>
                    array(
                        'taxonomy' => 'leader'               
                            )
                    
                );
            $acf_leaders = get_field('our_leaders');        
            $featured_leader = new WP_Query($args);


        if(!empty($acf_leaders) && (count($acf_leaders) > 0)):
            $ids = array();
            foreach($acf_leaders as $leader):
            $ids[] = $leader->ID;
            endforeach;
            $featured_leader = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
            $featured_leader = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif; 
            

            //var_dump($featured_leader);
        ?>
        <?php if($featured_leader->have_posts() ): ?>
        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our leaders</h2>
            <div class="section-content section-content-plain np-team-profiles">
            <?php while($featured_leader->have_posts()): $featured_leader->the_post(); ?>
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="<?php if(has_post_thumbnail()) {echo get_the_post_thumbnail_url();}?>" alt="">
                            </div>
                            <h3 class="profile-name"><?php the_title(); ?></h3>
                           
                            <h5 class="profile-role"><?php the_field('quote', $featured_leader->ID); the_field('quote', $featured_leader->ID); ?></h5>
                            <a href="<?php echo get_permalink();?>">Link to full profile</a>
                        </div> 
            <?php endwhile; ?>
            </div>
        </section>
        <?php wp_reset_postdata();?>
            <?php endif;?>


            <?php 
            $url = get_field('apply');
            ?>
                <section class="section">
                <?php if($url)?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
                    </div>
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
