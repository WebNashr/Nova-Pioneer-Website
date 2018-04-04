<?php
/**
* Template Name: Careers-Working-at-Nova(2018)
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
                <h3>Why work at Nova Pioneer? </h3> 
                <h4> 
                    <a href="http://novaacademies.applytojob.com/">Opportunities at Nova Pioneer</a> - 
                    <a href="http://novapioneer.local/kenya/open-positions-2/what-were-looking-for/">What We're Looking For</a> - 
                <a href="http://novapioneer.local/kenya/open-positions-2/grow-with-us/">Grow With Us</a> - <a href="#">Apply</a> </h4>
            </article>
        </section>

        <div class="border"></div>

        <?php
            $intro = 'intro';
            if(have_rows($intro)):
        ?>

        <section class="section ">
            <div class="card-container">
                <?php while(have_rows($intro)): the_row();?>
                <div class="card">
                    <figure>
                    <img style="width:100%;" src="<?php the_sub_field('icon'); ?>"></img>
                    </figure>
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <h3><?php the_sub_field('sub_heading'); ?></h3>
                    <p>
                    <?php the_sub_field('paragraph'); ?>
                    </p>
                </div>
                 <?php endwhile;?>
            </div>
        </section>
            <?php endif;?>


        <?php 
            $opp = 'opportunities';
            if(have_rows($opp)):
        ?>
            <section class="section">
                <article class="article">
                    <h3>Opportunities:</h3> 
                    <h4>How do you want to help shape education on the African continent?</h4>
                </article><br>

                <div class="card-container">
                    <?php while(have_rows($opp)): the_row();?>
                    <div class="card">
                        <h1><?php the_sub_field('heading');?></h1>
                        <p>
                        <?php the_sub_field('paragraph_text');?>
                        </p>
                        <a href="<?php the_sub_field('link_url');?>">LEARN MORE</a>
                    </div>
            <?php endwhile;?>
                </div>
            </section>
            <?php endif;?>


        <?php 
           $fields = 'what_were_looking_for';
           if(have_rows($fields)):   
        ?>
            <section class="section">
                <article class="article">
                    <h3>What we're looking for</h3> 
                    <p>
                    Working at Nova Pioneer is for people who love a challenge and love to grow, get a kick out
                    of solving tough problems, and flourish in an environment where everyone works hard and
                    puts their whole heart into their work. IS THAT YOU?
                    </p>
                </article><br>

                <div class="card-container">
                    <?php while(have_rows($fields)): the_row();?>
                    <div class="card">
                        <h1><?php the_sub_field('heading');?></h1>
                        <p>
                        <?php the_sub_field('paragraph');?>
                        </p>
                        <a href="<?php the_sub_field('link_url');?>">LEARN MORE</a>
                    </div>
                     <?php endwhile;?>
                </div>
            </section>
           <?php endif;?>

        <section class="section">
            Stories from Nova
        </section>

        <?php 
            $apply = get_field('apply_now');
            //var_dump($apply);
            if($apply):
        ?>
        <section class="section">
            <div class="button-wrap">
            <a href="<?php echo $apply?>" target="_blank" class="button button-wrap button-default button-primary" title="">APPLY NOW</a>
            </div>
        </section>
            <?php endif;?>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
