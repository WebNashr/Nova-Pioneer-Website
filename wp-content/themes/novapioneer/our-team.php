<?php 
/**
* Template Name: Our Team
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero leadership-team">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-pair section-school-leadership">
            <div class="section-navigation">
                <?php $school_head = get_field('head_of_school'); ?>
                <figure class="">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $school_head->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $school_head->post_title; ?>" />
                    <h3><?php echo $school_head->post_title; ?></h3>
                    <p>Head of School</p>
                </figure>
            </div>

            <div class="section-content">
                <div class="letter-from-principal">
                    <h1>A Note from Our Head of School</h1>
                    <?php echo get_field('note_from_head_of_school'); ?>
                </div>
            </div>
        </section>

        <section class="section section-pair team-profile-container">

            <div class="section-content section-content-plain">

                <?php foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                    <div class="section-content-item section-content-item-quarter profile">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                        <h1 class="profile-name"><?php echo $member->post_title; ?></h1>
                        <h2 class="profile-role"><?php echo get_field('title', $member->ID); ?></h2>
                        <div class="profile-description">
                            <input type="checkbox" class="read-more-state" id="post-1" />
                            <?php
                                // Get the paragraphs in the post content for implementing the read-more functionality
                                preg_match_all('|<p>(.+?)</p>|', $member->post_content, $matches);
                                $description_paragraphs = $matches[1];
                            ?>
                            <div class="read-more-wrap">
                                <p><?php echo array_shift($description_paragraphs); ?></p>
                                <span class="read-more-target">
                                    <?php foreach($description_paragraphs as $paragraph): ?>
                                        <p><?php echo $paragraph; ?></p>
                                    <?php endforeach; ?>
                                </span> 
                            </div>
                            <label for="post-1" class="read-more-trigger button button-tiny button-primary"></label>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
