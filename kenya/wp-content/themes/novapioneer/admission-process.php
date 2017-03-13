<?php

/**
 * Template Name: Admission Process
 */
get_header(); ?>


<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <section class="section section-hero admission-process-hero" <?php echo set_post_new_bg()?> data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
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
                        <h4><?php echo $step->title; ?></h4>
                        <?php echo $step->description; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- <section class="section" style="padding-top: 0; padding-bottom: 0;">
            <article class="article">
                <div class="cta-container">
                    <a href="<?php echo site_url('/apply-online'); ?>" class="button button-large button-primary" title="">Apply Online</a>
                </div>
            </article>
        </section> -->
        <section class="call-to-action">
            <article class="article">
                <div class="cta-wrapper">
                  <p>Start your journey with Nova Pioneer today</p>
                    <div class=""><a href="<?php echo site_url('/apply-online'); ?>" class="button button-large button-primary-alt" title="">Apply Online</a></div>
                </div>
            </article>
        </section>

        <!--<section class="section">
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
        </section>-->

        <!-- <section class="section">
            <article class="article article-body general-content-XXX">
                <h3>Admissions Contacts</h3>

                <address class="contact-info">
                    <p class="phone-contact-one">
                        <?php foreach( get_field('admissions_contacts') as $contact ): $contact = (object)$contact; ?>
                            <?php if( $contact->contact_type == 'number' ): ?>
                                <?php echo $contact->label; ?>: <a href="tel:<?php echo $contact->contact_number; ?>"><?php echo $contact->contact_number; ?></a> <br/>
                            <?php elseif( $contact->contact_type = 'email' ): ?>
                                <?php echo $contact->label; ?>: <a href="mailto:<?php echo $contact->contact_email; ?>"><?php echo $contact->contact_email; ?></a> <br/>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>
                </address>
            </article>
        </section> -->
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
