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
       <div class="section-navigation">
         <h2>Event Details</h2>
       </div>
        <div class="section-content">

            <div class="section-content-item">
                <div class="event-details-container">

                    <?php the_content(); ?>
                </div>

            </div>

        </div>

    </section>

<?php endwhile; ?>
