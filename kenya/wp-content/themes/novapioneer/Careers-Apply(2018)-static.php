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
        <section class="section">
            <article class="article ">

            <p>The interview process consists of the following components:</p>
            <div class="card-container steps-container">
                <div class="card admission-step">
                <h1>-1-</h1>
                <h2>Online application:</h2>
                <p> submit your CV and answer questions related to the job
                you’re applying for.
                </p>
               </div>
                <div class="card admission-step">
                <h1>-2-</h1>
                <h2>Phone interview:</h2>
                <p>
                 a short conversation to understand your skills and
                experience a little better.
                </p>
               </div>
                <div class="card admission-step">
                <h1>-3-</h1>
                <h2>Practical demonstration of what you can do:</h2>
                <p>
                 you will complete a written
                task or a demonstration related to the role you are applying for. Teachers
                participate in a half-day selection event at one of our campuses as well as
                deliver a lesson to a class.
                </p>
               </div>
                <div class="card admission-step">
                <h1>-4-</h1>
                <h2>Meet the team:</h2>
                <p>
                 along the way, you’ll get to interact with various people from
                across the organisation and experience our culture for yourselves.
                </p>
               </div>
                <div class="card admission-step">
                <h1>-5-</h1>
                <h2>Final interview:</h2>
                <p> you’ll have a final conversation with the hiring manager before
                offer decisions are made.
                </p>
               </div>

        </div>
        </article>
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
