<?php
/**
*
* Template Name: Country Home Page
*/
get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post();
    
        $our_students_description       = get_field('our_students_description');
        $our_students_video             = get_field('our_students_video');
        $learning_at_novapioneer_video  = get_field('learning_at_novapioneer_video');
        $leadership_team_members        = get_field('leadership_team_members');
        $events                         = get_field('events');
        $admission_call_to_action       = get_field('admission_call_to_action');
        $admission_contacts             = get_field('admission_contacts');
        $testimonial                    = get_field('testimonial');


    
    
    ?>

        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
            </header>
            <section>
                <h2>Our Students</h2>
                <?php echo $our_students_description; ?>
                <div>
                    <?php echo $our_students_video; ?>
                </div>
            </section>

            <section>
                <h2>Learning at Novapioneer</h2>
                <div>
                    <?php echo $learning_at_novapioneer_video; ?>
                </div>
            </section>

            <section>
                <h2>Leadership Team</h2>
                <?php foreach($leadership_team_members as $member): ?>
                    <div>
                        <h3><?php echo $member->post_title; ?></h3>
                        <p> <?php echo get_field('title', $member->ID); ?> </p>
                        <?php echo get_the_post_thumbnail($member); ?>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Admission</h2>
                <div>
                    <?php echo $admission_call_to_action; ?>
                </div>
                <div>
                    <?php foreach($admission_contacts as $contact): $contact = (object)$contact; ?>
                        <div>
                            <span> <strong><?php echo $contact->label; ?>:</strong></span>
                            <span> <?php echo $contact->contact; ?> </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section>
                <h2>Events</h2>
                <?php $n = 0; ?>
                <?php foreach($events as $event): if($n > 3): break; endif;?>
                    <div>
                        <h3><?php echo $event->post_title; ?></h3>
                        <p> <?php echo get_field('date', $event->ID); ?> </p>
                        <a href="<?php echo get_permalink($event->ID); ?>">RSVP</a>
                    </div>
                <?php $n++; endforeach;  ?>
            </section>

            <section>
                <h2>Testimonial</h2>
                <blockquote cite="<?php echo $testimonial->post_title; ?>">
                    <?php echo $testimonial->post_content; ?>
                    <hr/>
                    <div>
                        <?php echo $testimonial->post_title; ?>
                    </div>
                </blockquote>

            </section>

        </article>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>