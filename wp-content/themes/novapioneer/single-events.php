<?php
get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>


        <section class="section section-hero events-hero">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1>Event Details</h1>
                </div>
            </div>
        </section>

        <section class="section section-pair">

        <!-- Upcoming Events Navigation -->
        <?php novap_upcoming_events_navigation_calendar(); ?>
        <!-- End Upcoming Events -->


            <div class="section-content">

                <div class="section-content-item">
                    <div class="event-container">

                            <?php if( has_post_thumbnail() ): ?>
                                <div class="event-thumbnail-image">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' )[0]; ?>" alt="<?php the_title(); ?>"/>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="event-inner-wrap">

                                <div class="event-details">
                                    <p>Contact Email: <a href="mailto:<?php echo get_field('contact_email'); ?>"><?php echo get_field('contact_email'); ?></a> </p>
                                    <p>Contact Number: <a href="tel:<?php echo get_field('contact_number'); ?> "><?php echo get_field('contact_number'); ?> </a> </p>
                                    <p>
                                        Location:<br />
                                        <span>
                                            <?php echo get_field('venue'); ?>
                                        </span>
                                    </p>
                                </div>

                                <div class="event-summary">
                                    <h2><?php the_title(); ?></h2>
                                    <h4 class="date"><?php echo get_field('date'); ?></h4>
                                    <h5 class="time"><?php echo get_field('time'); ?></h4>
                                    <?php the_content(); ?>
                                    <a href="#" id="rsvp-node" class="modal-toggle button button-tiny button-secondary" title="">Send an RSVP</a>
                                </div>

                            </div>
                    </div>

                </div>

            </div>

        </section>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <?php get_template_part('includes/partials/content', 'rsvp-modal'); ?>
<?php endif; ?>


<?php get_footer(); ?>