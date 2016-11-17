<?php 

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $description            = get_field('description');
        $requirements           = get_field('requirements');
        $application_deadline   = get_field('application_deadline');
        $application_link       = get_field('application_link');    
    
    ?>

    <article>
        <header>
            <h1><?php echo get_the_title(); ?></h1>
        </header>

        <section>
            <h2>Description</h2>
            <div>
                <?php echo $description; ?>
            </div>
        </section>
        
        <section>
            <h2>Requirements</h2>
            <div>
                <?php echo $requirements; ?>
            </div>
        </section>

        <section>
            <h2>How to apply</h2>
            <p>
                <a href="<?php echo $application_deadline; ?>"> Apply here</a>
            </p>
            <p>You should apply by <?php echo $application_deadline; ?> </p>
        </section>
    </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>



