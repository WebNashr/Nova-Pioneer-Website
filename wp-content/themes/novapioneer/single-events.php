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
            <div class="section-navigation">
                <h1>Upcoming Events</h1>
                <div class="cal">
                    <table class="cal-table">
                    <caption class="cal-caption">
                        <a href="#" class="prev">&laquo;</a>
                        <a href="#" class="next">&raquo;</a>
                        <p>November 2016</p>
                    </caption>
                    <tbody class="cal-body">
                        <tr>
                        <td class="cal-off"><a href="#">30</a></td>
                        <td><a href="#">1</a></td>
                        <td><a href="#">2</a></td>
                        <td class="cal-today"><a href="#">3</a></td>
                        <td><a href="#">4</a></td>
                        <td><a href="#">5</a></td>
                        <td><a href="#">6</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">7</a></td>
                        <td class="cal-selected"><a href="#">8</a></td>
                        <td><a href="#">9</a></td>
                        <td><a href="#">10</a></td>
                        <td><a href="#">11</a></td>
                        <td class="cal-check"><a href="#">12</a></td>
                        <td><a href="#">13</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">14</a></td>
                        <td><a href="#">15</a></td>
                        <td><a href="#">16</a></td>
                        <td class="cal-check"><a href="#">17</a></td>
                        <td><a href="#">18</a></td>
                        <td><a href="#">19</a></td>
                        <td><a href="#">20</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">21</a></td>
                        <td><a href="#">22</a></td>
                        <td><a href="#">23</a></td>
                        <td><a href="#">24</a></td>
                        <td><a href="#">25</a></td>
                        <td><a href="#">26</a></td>
                        <td><a href="#">27</a></td>
                        </tr>
                        <tr>
                        <td><a href="#">28</a></td>
                        <td><a href="#">29</a></td>
                        <td><a href="#">30</a></td>
                        <td><a href="#">31</a></td>
                        <td class="cal-off"><a href="#">1</a></td>
                        <td class="cal-off"><a href="#">2</a></td>
                        <td class="cal-off"><a href="#">3</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>


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