<?php
/**
 * Single Profile Template
 */
get_header(); ?>


<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<section class="section trigger-offset">
    <article class="article article-profile">
        <header class="article-header-XXX">
            <h1><?php the_title(); ?></h1>
            <!--<h6><?php the_field('role', $featured_teacher->ID);?></h6>-->
        </header>

        <figure class="new-card-img-XXX">
            <?php the_post_thumbnail('square-small', array('class' => '')); ?>

            <figcaption>
                <blockquote><?php the_field('quote', $featured_teacher->ID);?></blockquote>
                <cite><?php the_field('quote_cite', $featured_teacher->ID);?></cite>
            </figcaption>
        </figure>

        <!-- <div class="article-excerpt"> <?php the_excerpt(); ?> </div> -->
        <!--<h6><?php the_field('role', $featured_teacher->ID);?></h6>-->
        <!--<h6><?php the_field('quote', $featured_teacher->ID);?></h6>-->
        <?php the_content(); ?>

        <?php
            $questions = 'profile_questions';
            if(have_rows($questions)):
        ?>
        <div class="profile-questions">
            <?php while(have_rows($questions)): the_row();?>
            <div class="profile-question-item">
                <h3><?php the_sub_field('question'); ?></h3>
                <?php the_sub_field('answer'); ?>
                <!--<br>-->
            </div>
            <?php endwhile?>
        </div>
        <?php endif;?>
    </article>
</section>

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
