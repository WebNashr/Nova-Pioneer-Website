<?php 

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

        <section class="section trigger-offset">
        <header class="article-header">
            <h1>Nova Pioneer Careers</h1>
        </header>

            <div class="section-pair">
            <div class="section-navigation">
                <h1 class="current">Operations</h1>
                <a href="<?php echo site_url('/careers'); ?>" >Back to Job List</a>
            </div>
            <div class="section-content">
                <div class="section-content-item">
                    <article class="job-details-container">
                        <div class="job-details">
                            <header>
                                <h2><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?></a></h1>
                                <h4 class="job-location"><?php echo get_field('job_location'); ?></h5>
                                <h5 class="job-type">Job Type: <span><?php echo get_field('job_type'); ?></span></h5>
                                <h5 class="job-experience">Experience: <span><?php echo get_field('experience'); ?></span></h5>
                                <h5 class="job-deadline">Application Deadline: <span><?php echo get_field('application_deadline'); ?></span></h5>
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



