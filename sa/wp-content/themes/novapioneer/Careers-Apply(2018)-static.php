<?php
/**
* Template Name: Careers-Apply(2018)-static
*/

get_header();?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <section class="section-hero-ios">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-large')[0]; ?>">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        

        <section class="section">
            <article class="article">
                <h3>How to apply </h3> 
                <p>We believe that the typical interview only tells part of the story of who a person is. We
                therefore invest time in getting to know our candidates as well as possible. We also
                ensure that our candidates get the opportunity to interview us and find out if Nova
                Pioneer is the right place for them.</p>
            </article>
        </section>

        <section class="section ">
            <p>The interview process consists of the following components:</p>

            <ol>
                <li>Online application: submit your CV and answer questions related to the job
                you’re applying for.</li>
                <li>Phone interview: a short conversation to understand your skills and
                    experience a little better.</li>
                <li>Final interview: you’ll have a final conversation with the hiring manager before
                offer decisions are made.</li>
            </ol>
        </section>

        <section class="section ">
            <p>Note: The process may vary depending on the role you are applying for and whether
                you are applying in or out of the peak hiring season.</p>

            <p>If you think Nova Pioneer is the right place for you then see what jobs are available
                <a href="#">here</a>.</p>

        </section>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
