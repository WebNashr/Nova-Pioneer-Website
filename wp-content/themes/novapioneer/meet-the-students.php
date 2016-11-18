<?php 
/**
* Template Name: Meet The Students
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); 
        $days_in_the_life = get_field('a_day_in_the_life');
    ?>

        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
            </header>

            <section>
                <?php echo get_the_content(); ?>
            </section>

            <?php foreach($days_in_the_life as $day): $day = (object)$day; ?>
                <section>
                    <header>
                        <h1> <a href="<?php echo get_permalink($day->ID); ?>"> <?php echo $day->post_title; ?> </a> </h1>
                    </header>
                    <div>
                        <?php echo get_field('video', $day->ID); ?>
                        <h4><?php echo get_field('student_name', $day->ID); ?> - <?php echo get_field('student_grade', $day->ID); ?></h4>
                        <?php echo get_field('video_caption', $day->ID); ?>
                    </div>                     
                </section>
            <?php endforeach; ?>
        </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
