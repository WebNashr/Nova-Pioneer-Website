<?php
    /**
    * Template Name: Admissions Process
    */
    get_header();
?>


<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
<div class="wrapper">
    <!--<section class="section section-hero">
        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-large')[0]; ?>" alt="">

        <div class="container hero-container">
            <h1 class="animated-title"><?php the_title(); ?></h1>
        </div>
    </section>-->

    <section class="section section-no-top">
        <figure class=""  <?php if (has_post_thumbnail()): echo 'style="height: 500px;display: flex;flex-direction: column;border-radius: 8px; background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-banner')[0] . ');"'; endif; ?>>
            <!--img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-banner')[0]; ?>" alt=""-->
            <figcaption style="margin-top: auto;background: white;padding: var(--space-2);padding-left: 0;width: 92%;border-radius: 0 12px 0 0;margin-bottom: calc(-1 * var(--space-6));">
                <h1 class=""><?php the_title(); ?></h1>
                <p>kashg fjw vkwrkvu gwrvkwbkvb kwvk gwiu bwkv wiug bwe jbkwjkb og ougb wb kashg fjw vkwrkvu gwrvkwbkvb kwvk gwiu bwkv wiug bwe jbkwjkb og ougb wb kashg fjw vkwrkvu gwrvkwbkvb kwvk gwiu bwkv wiug bwe jbkwjkb og ougb wb</p>
            </figcaption>
        </figure>
    </section>

    <!--<div class="trigger"></div>-->

    <section class="section section-admissions">
        <div class="card-container">
            <figure class="card card-admissions">
                <h4>Admissions process</h4>
                <p>kashg fjw vkwrkvu gwrvkwbkvb kwvk gwiu bwkv wiug bwe jbkwjkb og ougb wb</p>
            </figure>

            <?php $step_number = 0; ?>
            <?php foreach( get_field('steps') as $step ): $step = (object)$step; $step_number++; ?>
                <figure class="card card-admissions">
                    <img
                        class="school-photo"
                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($step->image), '16-9-tall')[0]; ?>"
                        alt="<?php echo $step->title; ?>"
                    >
                    <figcaption>
                        <div class="step-number"><?php echo $step_number; ?></div>
                        <h4><?php echo $step->title; ?></h4>
                        <?php echo $step->description; ?>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section section-divider"></section>

    <section class="section section-centered">
        <h2>Start your journey with Nova Pioneer today</h2>
        <p>bdak bkjvsjv bkjsbkjsbkj bksj dbvjsvj bosub jb o u hwe bvjwevouw</p>
        <a href="" class="button button-large">Apply now</a>
    </section>

    <section class="section section-divider"></section>

    <section class="section section-faq faqs-container">
        <article class="article article-inner article-inner-alt ">
            <h2 id="faqs">Frequently Asked Questions</h2>

            <ul class="toggle-list">
                <?php $n = 0; ?>
                <?php foreach (get_field('faqs') as $faq): $faq = (object)$faq; ?>
                    <li class="<?php if ($n <= 0): echo 'show'; endif; ?>">
                        <h3 class="toggle-list-title"><?php echo $faq->question; ?></h3>

                        <div class="toggle-list-content">
                            <?php echo $faq->response; ?>
                        </div>
                    </li>
                    <?php $n++; ?>
                <?php endforeach; ?>
            </ul>
        </article>
    </section>

    <section class="section section-divider"></section>
</div>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>


