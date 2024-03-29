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
        <!-- <section class="section section-hero corporate-hero" <?php echo set_post_new_bg()?>>
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div> -->
        <section class="section trigger-offset"> <!-- $$$ ### ^^^ remove trigger-offset class if using hero & trigger -->
            <article class="article article-inner article-inner-alt">
                <header class="article-header">
                    <h1>Nova Pioneer Education Group</h1>
                </header>

                <!-- <div class="article-container"> -->
                    <!-- <aside class="article-aside"> -->

                        <!-- client requests we disable this until they are in a position to publish documents -->
                        <!-- <div class="article-meta">
                            <p class="article-meta-title">Reports</p>
                            <small>Our Annual Reports give a concise overview of our operations in a given year. Download them as a PDF document below:</small>
                        </div>

                        <?php foreach( get_field('annual_reports') as $report ): $report = (object)$report; ?>
                       <div class="downloads">
                            <h4><?php echo $report->title; ?></h4>
                            <a download="<?php echo $report->title; ?>" href="<?php echo $report->file; ?>" class="button button-tiny button-secondary">Download PDF</a>
                        </div>
                        <?php endforeach; ?> -->
                    <!-- </aside> -->

                    <!-- <div class="article-inner"> -->
                        <!-- <hr class="article-mark"> -->
                        <!-- <p class="article-excerpt"><?php echo get_field('intro'); ?></p> -->
                        <?php the_content(); ?>
                    <!-- </div> -->
                </div>
            </article>
        </section>
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
