
<?php //while( have_posts() ): the_post(); ?>
    <!-- <section class="section section-hero events-hero">
        <div class="container hero-container">
            <div class="main-callout-box">
                <hr>
                <h1>Event Details</h1>
            </div>
        </div>
    </section>

    <section class="section section-pair">
        <div class="section-navigation">
            <h2>Event Details</h2>
            <a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
        </div>

        <div class="section-content">
            <div class="section-content-item">
                <div class="event-details-container">
                    <?php //the_content(); ?>
                </div>
            </div>
        </div>
    </section> -->
<?php //endwhile; ?>





<?php while(have_posts()): the_post(); ?>

    <section class="section trigger-offset">
        <article class="article">
            <?php the_content(); ?>
        </article>
    </section>

<?php endwhile; ?>