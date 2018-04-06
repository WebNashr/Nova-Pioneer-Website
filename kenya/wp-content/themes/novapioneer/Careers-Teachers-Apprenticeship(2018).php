<?php
/**
* Template Name: Careers-Teachers-Apprenticeship (2018)
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


        <?php 
            $body= 'body';
            if(have_rows($body)):
        ?>
        <section class="section">
        <h1>What the program offers</h1>
            <div class="card-container steps-container">
            <?php while(have_rows($body)): the_row()?>
                <div class="card admission-step">
                <h1><?php the_sub_field('title');?></h1>
                <p><?php the_sub_field('paragraph');?>
                </p>
               </div>
            <?php endwhile;?>   

        </div>
        </section>
        <?php endif;?>

        <?php 
            $who_may_apply = 'who_may_apply';
            if(have_rows($who_may_apply)):
        ?>
        <section class="section">
                <h1>Who may apply?</h1>
                <p>You may apply if you:</p>   
            <div class="card-container steps-container">

            <?php while(have_rows($who_may_apply)): the_row()?>  
                <div class="card admission-step">
                    <h1><?php the_sub_field('title');?></h1>
                    <p><?php the_sub_field('paragraph');?></p>
                </div>
            <?php endwhile;?>   

             </div>
        </section>
        <?php endif;?>

        </section>

            <?php 
            $url = get_field('apply');
            ?>
                <section class="section">
                <?php if($url)?>
                    <div class="button-wrap">
                        <a href="<?php echo $url ?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY TO BE AN APPRENTICE NOW</a>
                    </div>
                </section>


        <?php
            $args = array(
                'post_type' => 'profile',   
                'post_status' => 'publish',    
                'tax_query' =>
                    array(
                        'taxonomy' => 'apprentice'               
                            )
                    
                );
            $acf_teachers = get_field('meet_our_teachers');        
            $featured_teacher = new WP_Query($args);


        if(!empty($acf_teachers) && (count($acf_teachers) > 0)):
            $ids = array();
            foreach($acf_teachers as $teacher):
            $ids[] = $teacher->ID;
            endforeach;
            $featured_teacher = new WP_Query(array_merge($args, array('posts_per_page' => 5,'post__in' => $ids)));
            else:
            $featured_teacher = new WP_Query(array_merge($args, array('posts_per_page' => 5,'orderby' => 'rand','post_status' => 'publish')));
            endif; 
        ?>
        <?php if($featured_teacher->have_posts() ): ?>
        <section class="section section-pair team-profile-container">

                <h2 class="centered-title">Meet our apprentice teachers</h2>
            <div class="section-content section-content-plain np-team-profiles">
                <?php while($featured_teacher->have_posts()): $featured_teacher->the_post(); ?>
                        <div class="section-content-item section-content-item-quarter profile">
                            <div class="image-wrap">
                                <img src="../../wp-admin/images/avatar_placeholder_large.png" alt="">
                            </div>
                            <h3 class="profile-name"><?php the_title();?></h3>
                            <h5 class="profile-role"><?php the_field('quote', $featured_teacher->ID);?></h5>
                            <a href="<?php echo get_permalink();?>">Link to full profile</a>
                        </div> 
                <?php endwhile; ?>
            </div>
        </section>
        <?php wp_reset_postdata();?>
        <?php endif;?>

       
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
