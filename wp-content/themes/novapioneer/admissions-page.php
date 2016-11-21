<?php 
/**
* Template Name: Admissions Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); 
        $faqs = get_field('faqs');
        $fee_structure = get_field('fee_structure');
        $admission_events = get_field('admission_events');
        $admission_contacts = get_field('admission_contacts');
        $application_form = get_field('application_form');
    ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <section>
                <?php the_content(); ?>
            </section>
            <?php if(!empty($faqs)): ?>
                <section>
                    <h2>FAQ's</h2>
                    <?php echo $faqs; ?>
                </section>
            <?php endif; ?>

            <?php if(!empty($admission_events)): ?>
                <section>
                    <h2>Admission Events</h2>
                    <?php foreach($admission_events as $event): $event = (object)$event; ?>
                        <div>
                            <h3><a href="<?php echo get_permalink($event->ID); ?>"><?php echo $event->post_title; ?></a></h3>
                            <p><?php echo get_field('date', $event->ID); ?></p>
                            <?php echo $event->post_excerpt; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>

            <?php if(!empty($admission_contacts)): ?>
                <section>
                    <h2>Admission Events</h2>
                    <?php foreach($admission_contacts as $contact): $contact = (object)$contact; ?>
                        <div>
                            <p><?php echo $contact->label; ?>&nbsp;<?php echo $contact->contact; ?></p>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>

            <section>
                <h2>Apply Online</h2>
                <?php echo do_shortcode($application_form); ?>
            </section>

        </article>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
