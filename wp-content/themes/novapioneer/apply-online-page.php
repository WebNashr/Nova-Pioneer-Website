<?php 
/**
* Template Name: Apply Online
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>




                <section class="section trigger-offset">
                    <article class="article article-body general-content">
                        <h1 class="page-title">Nova Pioneer Application</h1>
                        <?php the_content(); ?>
                    </article>
                </section>

                <!-- <section class="section">
                    <div class='fees-container'>
                        <table class='fees-table'>
                            <thead>
                                <th class='text'></th>
                                <th class='text'>Round 1</th>
                                <th class='text'>Round 2</th>
                                <th class='text'>Round 3</th>
                                <th class='text'>Round 4</th>
                                <th class='text'>Round 5</th>
                            </thead>

                            <tbody>
                                <tr class=''>
                                    <td class='text row-title' data-title='First'>Submit Application by:</td>
                                    <td class='text ' data-title='Round 1'>12th April</td>
                                    <td class='text ' data-title='Round 2'>2nd July</td>
                                    <td class='text ' data-title='Round 3'>30th September</td>
                                    <td class='text ' data-title='Round 4'>18th November</td>
                                    <td class='text ' data-title='Round 5'>8th December</td>
                                </tr>

                                <tr class=''>
                                    <td class='text row-title' data-title='First'>Assessed by:</td>
                                    <td class='text ' data-title='Round 1'>22nd April</td>
                                    <td class='text ' data-title='Round 2'>9th July</td>
                                    <td class='text ' data-title='Round 3'>6th October</td>
                                    <td class='text ' data-title='Round 4'>25th November</td>
                                    <td class='text ' data-title='Round 5'>15th December</td>
                                </tr>

                                <tr class=''>
                                    <td class='text row-title' data-title='First'>Notification Date:</td>
                                    <td class='text ' data-title='Round 1'>15th June</td>
                                    <td class='text ' data-title='Round 2'>1st September</td>
                                    <td class='text ' data-title='Round 3'>12th October</td>
                                    <td class='text ' data-title='Round 4'>1st December</td>
                                    <td class='text ' data-title='Round 5'>19th December</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="section">
                    <article class="article article-body general-content">
                        <p>After filling out the application, you will receive a confirmation email shortly notifying you receipt of the application. We will contact qualified applicants regarding next steps. Submission of this form does not guarantee acceptance into Nova Academies – we have a limited places in our first class and we will further assess applicants to determine if they meet the criteria for those places.</p>

                        <p>We currently only accept applications for scholars entering Form 1 in 2017.</p>
                    </article>
                </section> -->

                <section class="section">
                    <article class="article article-body general-content">
                        <?php 
                        if( !empty( get_field('application_form') ) ): 
                            echo do_shortcode( get_field('application_form') );
                        endif; ?>
                    </article>
                </section>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>

<?php get_footer(); ?>
