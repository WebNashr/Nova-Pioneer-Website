<section class="section section-hero admission-process-hero">
    <div class="container hero-container">
        <div class="main-callout-box">
            <hr>
            <h1>Calendar</h1>
        </div>
    </div>
</section>

<div class="trigger"></div>


<?php $admission_events_query = new WP_Query(array(
    'post_type'      => 'tribe_events',
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'tax_query'      => array(
        array(
            'taxonomy'  => 'tribe_events_cat',
            'field'     => 'slug',
            'terms'     => 'admission'
        )
    ),
    'posts_per_page' => 5
)); ?>

<section class="section section-pair">
    <div class="section-navigation section-navigation-admissions">
        <h1>Upcoming Admissions</h1>
        <div class="even-list-container">
            <?php while( $admission_events_query->have_posts() ): $admission_events_query->the_post(); ?>

                <div class="event-item">
                    <div class="event-day">
                        <div class="date">  <?php echo tribe_get_start_date(null, false, 'j'); ?> </div>
                        <div class="month"> <?php echo tribe_get_start_date(null, false, 'F'); ?> </div>
                    </div>
                    <div class="event-details">
                        <h2><?php the_title(); ?></h2>
                        <div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" target="_blank">View Details</a> 
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

<?php while( have_posts() ): the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; ?>

</section>

<section class="section">
    <article class="article article-body general-content">
        <h3>Admissions Contacts</h3>

        <address class="contact-info">
            <p class="phone-contact-one">South Africa Admission Enquiries: <a href="tel:011 496 1201 ">+27 11 496 1201</a><br>
            Kenya Admission Enquiries: <a href="tel:011 496 1202 ">+254 20 123 4567</a><br>
            Email us: <a href="mailto:learn@novapioneer.com">learn@novapioneer.com</a></p>
        </address>
    </article>
</section>