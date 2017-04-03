<?php
/**
 * Template Name: Fees Structure Page
 */

$data = (object)$_REQUEST;
if (isset($data->fee_structure)):
    novap_download_file($data->fee_structure);
endif;

get_header(); ?>

<?php if (have_posts()): ?>

<?php while (have_posts()):
the_post(); ?>


<section class="section trigger-offset">
    <div class="page-navigation-container general-nav">
        <div class="navigation-wrap">
            <div class="section-title"><h3>Fees &amp; Tuition </h3></div>
            <div class="links-inner-wrap">
                <div class="section-content-item">
                    <div class="anchor-link">
                        <a href="#fees-table" class="" title="">Fees Per School</a>
                    </div>
                </div>
                <div class="section-content-item">
                    <div class="anchor-link">
                        <a href="#payment" class="" title="">How to make payment</a>
                    </div>
                </div>
                <div class="section-content-item">
                    <div class="anchor-link">
                        <a href="#faqs" class="" title="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section cta-container" style="padding-bottom:0;"><a href="<?php echo get_field('combined_fees_structure'); ?>" class="button button-default button-primary" title="">Download <?php echo get_field('combined_fees_structure_title'); ?></a></div>-->


</section>


<section class="section school-fees">

    <article class="article article-inner article-inner-alt">
        <h1 class="page-title" id="fees-table">Fees Structure</h1>
        <?php the_content(); ?>
    </article>


    <?php
    $schools = get_field('schools');
    $selected_school = $_GET['school'];
    $selected_grade = $_GET['grade'];
    $selected_year = $_GET['school_year'];

    ?>

    <article class="article article-inner article-inner-alt table-container">
        <form class="table-filter">
            <div class="selector">
                <select name="school" class="dropdown">
                    <option value=">Select a School">Select a School</option>
                    <?php foreach ($schools as $school): $school = (object)$school; ?>
                        <option <?php if ($selected_school === $school->post_title): echo "selected";
                            $selected_school = $school; endif; ?>
                            value="<?php echo $school->post_title; ?>"><?php echo $school->post_title; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="selector">
                <select name="grade" class="dropdown">
                    <option value="Select a Grade">Select a Grade</option>
                    <?php if (!empty($selected_school) && is_object($selected_school)): ?>
                        <?php foreach (get_field('fees_structure_per_grade', $selected_school->ID) as $grade): $grade = (object)$grade; ?>
                            <option <?php if ($selected_grade === $grade->grade): echo "selected";
                                $selected_grade = $grade; endif; ?>
                                value="<?php echo $grade->grade; ?>"><?php echo $grade->grade; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="selector">
                <select name="school_year" class="dropdown">
                    <option value="Please Select Your Area of Interest">Select a Year</option>
                    <?php if (!empty($selected_grade) && is_object($selected_grade)): ?>
                        <?php foreach ($selected_grade->fees_by_year as $year): $year = (object)$year; ?>
                            <option <?php if ($selected_year === $year->year): echo "selected";
                                $selected_year = $year; endif; ?>
                                value="<?php echo $year->year; ?>"><?php echo $year->year; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <input name="view" value="View Fees" class="button button-small button-primary fees-button" style="" type="submit"/>
        </form>
        <?php if (!empty($selected_school) && !empty($selected_grade) && !empty($selected_year) && ($_GET["view"] === "true")): ?>
            <div class="fees-container">
                <h2><?php echo $selected_school->post_title; ?> Fee Structure for
                    Grade <?php echo $selected_grade->grade; ?> <?php echo $selected_year->year; ?></h2>
                <div class="schedule-content">
                    <header class="table-header"></header>
                    <table class="fees-table">
                        <thead>
                        <th class="text">Item</th>
                        <th class="text">Term 1</th>
                        <th class="text">Term 2</th>
                        <th class="text">Term 3</th>
                        </thead>

                        <tbody>
                        <?php foreach ($selected_year->fees as $fees): $fees = (object)$fees; ?>
                            <tr class="">
                                <td class="text row-title"><?php echo $fees->item_name; ?></td>
                                <td class="text" data-title="Term 1"><?php echo $fees->term_1; ?></td>
                                <td class="text" data-title="Term 2"><?php echo $fees->term_2; ?></td>
                                <td class="text" data-title="Term 3"><?php echo $fees->term_3; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>


                    <table class="fees-table">
                        <thead class="secondary">
                        <th class="text">Other fees</th>
                        <th class="text"></th>
                        <th class="text"></th>
                        </thead>

                        <tbody>
                        <?php foreach ($selected_year->additional_fees as $additional_fees): $additional_fees = (object)$additional_fees; ?>
                            <tr class="">
                                <td class="text row-title"
                                    data-title="First"><?php echo $additional_fees->item_name; ?></td>
                                <td class="text cost" data-title="Term 1"><?php echo $additional_fees->fee; ?></td>
                                <td class="text" data-title="Term 2"><?php echo $additional_fees->notes; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo $selected_year->fees_structure; ?>" class="button button-small button-primary"
                       download>Download the Fees Structure</a>
                </div>
            </div>
        <?php endif; ?>
    </article>
</section>


<section class="payment-container">
    <article class="article article-inner article-inner-alt fees-container">
        <div class="schedule-content">
            <header class="table-header" id="payment">How to make payment</header>

            <table class="fees-table">
                <thead>

                <th class="text"></th>
                <th class="text">Payment method</th>
                <th class="text">Instructions</th>
                <th class="text">Proof of payment</th>

                </thead>

                <tbody>
                <?php $x = 1; ?>
                <?php foreach (get_field('payment_methods') as $method): $method = (object)$method; ?>
                    <tr>
                        <td class="text row-title row-title-alt" data-title='First'><?php echo $x; ?></td>
                        <td class="text" data-title='Term 1'><?php echo $method->method; ?></td>
                        <td class="text" data-title='Term 2'>
                            <?php echo $method->instructions; ?>
                        </td>
                        <td class="text" data-title='Term 3'><?php echo $method->proof_of_payment; ?></td>
                    </tr>
                    <?php $x++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>

            <table class="fees-table">
                <tbody>
                <tr class="">
                    <td><?php echo get_field('foot_note'); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
    <section>

        <section class="faqs-container">
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

        <?php endwhile; ?>

        <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

        <script>
            $(document).ready(function () {

                $('form.fees-structures-form').submit(function (event) {

                    var file_to_download = $(this).children('select').find(':selected').val();

                    if (file_to_download === "") {
                        alert("You need to choose a fee structure.");
                        event.preventDefault();
                        return false;
                    }

                    return true;

                });
            });
        </script>
        <!-- smooth scroll -->
        <script>
            $('a[href^="#"]').on('click', function (event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        </script>

        <?php endif; ?>

        <?php get_footer(); ?>
        <!-- smooth scroll -->
        <script>
            $('a[href^="#"]').on('click', function (event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        </script>

        <script>

            (function ($) {

                $('form.table-filter .dropdown').change(function () {

                    let name = $(this).prop("name");
                    let value = $(this).val();

                    if ((window.location.search === "") || (name === "school") || (window.location.search === null) || (window.location.search === undefined)) {
                        location.search = "?" + name + "=" + value;
                    } else {
                        location.search += "&" + name + "=" + value;
                    }
                });

                $('form.table-filter').submit(function (event) {
                    event.preventDefault();
                    location.search += "&view=true";
                });

            })(jQuery);

        </script>
