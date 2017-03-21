<?php
/**
* Template Name: Our Team
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>



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

        <div class="trigger"></div>

        <section class="section section-pair section-school-leadership">
            <div class="section-navigation">
                <?php $school_head = get_field('head_of_school'); ?>
                <figure class="profile">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $school_head->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $school_head->post_title; ?>" />
                    <h3 class="profile-name"><?php echo $school_head->post_title; ?></h3>
                    <h6 class="profile-role">Head of School</h6>
                </figure>
            </div>

            <div class="section-content">
                <div class="letter-from-principal">
                    <h1>A Note from Our Head of School</h1>

                    <input type="checkbox" class="read-more-state" id="post-<?php echo get_the_ID(); ?>" />

                    <?php
                        // Get the paragraphs in the post content for implementing the read-more functionality
                        preg_match_all('|<p>(.+?)</p>|', get_field('note_from_head_of_school'), $matches);
                        $letter_paragraphs = $matches[1];
                    ?>
                    <span class="read-more-wrap">
                        <p><?php echo array_shift($letter_paragraphs); ?></p>
                        <p><?php echo array_shift($letter_paragraphs); ?></p>
                        <br/>
                        <span class="read-more-target">
                            <?php foreach($letter_paragraphs as $paragraph): ?>
                                <p><?php echo $paragraph; ?></p>
                            <?php endforeach; ?>
                        </span>
                    </span>
                    <br/>
                    <label for="post-<?php echo get_the_ID(); ?>" class="read-more-trigger button button-tiny button-primary"></label>
                </div>
            </div>
        </section>

        <section class="section section-pair team-profile-container">

                <div class="section-content section-content-plain np-management-profiles">
                    <?php $i=1; foreach( get_field('team_members') as $member): $member = (object)$member; ?>
                        <div class="section-content-item section-content-item-quarter profile">
                            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $member->ID ), 'single-post-thumbnail' )[0]; ?>" alt="<?php echo $member->post_title; ?>">
                            <h3 class="profile-name"><?php echo $member->post_title; ?></h3>
                            <h5 class="profile-role"><?php echo get_field('title', $member->ID); ?></h5>
                            <div class="profile-description">

                                <?php echo $member->post_content; ?>

                            </div>
                        </div>
                    <?php $i++; endforeach; ?>
                </div>
            </section>
        </main>
        <!-- end content -->

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
