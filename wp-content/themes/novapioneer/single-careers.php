<?php 

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

    <section class="section trigger-offset">
        <header class="article-header">
            <h1><?php the_title(); ?></h1>
        </header>

        <div class="article-container">
            <div class="article-aside">
                <h2 class="current">Operations</h2>
                <a href="<?php echo site_url('/careers'); ?>" >Back to Careers</a>
            </div>

            <div class="article-inner">
                <div class="section-content-item">
                    <article class="job-details-container">
                        <div class="job-details">
                            <header class="job-details-header">
                                <h3>About this position</h3>
                                <h6 class="job-location">Location: <?php echo get_field('job_location'); ?></h6>
                                <h6 class="job-type">Job Type: <span><?php echo get_field('job_type'); ?></span></h6>
                                <h6 class="job-experience">Experience: <span><?php echo get_field('experience'); ?></span></h6>
                                <h6 class="job-deadline">Application Deadline: <span><?php echo get_field('application_deadline'); ?></span></h6>
                            </header>

                            <?php echo get_field('description'); ?>

                            <?php echo get_field('requirements'); ?>

                            <p>Does working at Nova Pioneer excite you? If you’re a great fit, we will drop everything and call you immediately.</p>
                            <p>Applications will be reviewed on an ongoing basis until the right candidate is identified. Only qualified candidates will be invited for interviews. If you do not hear from us within 8 weeks of submitting your application, please consider your application unsuccessful.</p>
                            <p class="note"><em><strong>Please note:</strong> Where a copy of your resume is required, copying and pasting from a formatted document e.g. Microsoft Word® may not result in the formatting transferring correctly to the final resume. You are encouraged to attach your resume in Microsoft Word® or PDF format to protect formatting.</em></p>

                            <p><a href="<?php echo get_field('application_link'); ?>" class="button button-default button-secondary">Apply Now</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <?php endwhile; ?>
    
    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    
<?php endif; ?>

<?php get_footer(); ?>



