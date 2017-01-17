<?php 
/**
* Template Name: Corporate Page
*
*/

get_header();?>


<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();
        $school_mission = get_field('school_mission');
        $school_vision  = get_field('school_vision');
        $company_structure = get_field('company_structure');
    ?>
        <section class="section section-hero corporate-hero" <?php echo set_post_new_bg()?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>
        <section class="section">
            <article class="article">
                <header class="article-header">
                    <h1>Nova Pioneer Education Group</h1>
                </header>

                <div class="article-container">
                    <aside class="article-aside">
                        <div class="downloads">
                            <p>Our Annual Reports give a concise overview of our operations in a given year. Download them as a PDF document below:</p>
                        </div>
                        <?php foreach( get_field('annual_reports') as $report ): $report = (object)$report; ?>
                        <div class="downloads">
                            <h4><?php echo $report->title; ?></h4>
                            <a download="<?php echo $report->title; ?>" href="<?php echo $report->file; ?>" class="button button-tiny button-secondary">Download PDF</a>
                        </div>
                        <?php endforeach; ?>
                    </aside>

                    <div class="article-inner">
                        <p class="article-excerpt"><?php echo get_field('intro'); ?></p>
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        </section>
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
