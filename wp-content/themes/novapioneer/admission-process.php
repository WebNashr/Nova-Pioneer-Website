<?php

/** 
 * Template Name: Admission Process
 */
get_header(); ?>


<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <section class="section section-hero admission-process-hero">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-admission-steps">
            <div class="card-container steps-container">
                <?php $step_number = 0; ?>
                <?php foreach( get_field('steps') as $step ): $step = (object)$step; $step_number++; ?>
                    <div class="card admission-step">
                        <div class="step-number"><?php echo $step_number; ?></div>
                        <h3><?php echo $step->title; ?></h3>
                        <?php echo $step->description; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section">
            <article class="article">
                <div class="cta-container">
                    <a href="<?php echo site_url('/apply-online'); ?>" class="button button-large button-primary" title="">Apply Online</a>
                </div>
            </article> 
        </section>

        <section class="section">
            <article class="article article-body general-content">
                <h2>Frequently Asked Questions</h2>

                <ul class="toggle-list">
                <?php foreach( get_field('faqs') as $faq ): $faq = (object)$faq; ?>
                    <li class="show">
                        <h3 class="toggle-list-title"><?php echo $faq->question; ?></h3>
                        
                        <div class="toggle-list-content">
                            <?php echo $faq->response; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
        </section>

        <section class="section">
            <article class="article article-body general-content">
                <h3>Admissions Contacts</h3>

                <address class="contact-info">
                    <?php foreach( get_field('admissions_contacts') as $contact ): $contact = (object)$contact; ?>
                        <?php if( $contact->contact_type == 'number' ): ?>
                            <p class="phone-contact-one"><?php echo $contact->label; ?>: <a href="tel:<?php echo $contact->contact_number; ?>"><?php echo $contact->contact_number; ?></a> </p>
                        <?php elseif( $contact->contact_type = 'email' ): ?>
                            <p class="phone-contact-one"> <?php echo $contact->label; ?>: <a href="mailto:<?php echo $contact->contact_email; ?>"><?php echo $contact->contact_email; ?></a></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </address>
            </article>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php endif; ?>


<?php get_footer(); ?>