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
        <h1 class="page-title" id="fees-table">Fee Structure</h1>
        <?php the_content(); ?>
    </article>
    
    <?php
        $schools = get_field('fee_structures');
        // $schools = get_field('fee_structures');

    if(have_rows('fee_structures')):
    ?>

    <article class="article article-inner article-inner-alt table-container">

        <table class="fees-table fees-download" style="">
            <tbody>
                <?php while (have_rows('fee_structures')) : the_row(); ?>
                    <tr class="">
                        <td class="text">
                            <p class="text"><?php echo get_sub_field('school_name')->post_title; ?></p>
                        
                        </td>
                        <td>
                            <a class="button-fees-dl" 
                            href="<?php echo get_sub_field('fee_structure')["url"]; ?>" 
                            download="<?php echo get_sub_field('fee_structure')["filename"]; ?>">
                            Download fees guide</a>
                        </td>
                    </tr>   
                    <?php endwhile; ?> 
            </tbody>
        </table>   
    </article>
    <?php endif;?>
</section>


<section class="payment-container">
    <article class="article article-inner article-inner-alt fees-container">
        <div class="schedule-content">
            <header class="table-header" id="payment">How to make payment</header>

            <table class="fees-table">
                <tbody>
                <tr class="">
                    <td><?php echo get_field('foot_note'); ?></td>
                </tr>
                </tbody>
            </table>

            <table class="fees-table">
                <thead>

                <th class="text"></th>
                <th class="text">Nova Pioneer School</th>
                <th class="text">Banking Details</th>
                <th class="text">Admissions email to send your proof of payment</th>

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
    </section>
</section>


<?php endwhile; ?>


<?php if (isset($_REQUEST['school']) && isHandHeld()): ?>
    <script>
        $(document).ready(function () {
            // Handler for .ready() called.
            $('html, body').animate({
                scrollTop: $('#scroll-back-here').offset().top
            }, 'slow');
        });
    </script>
<?php endif; ?>

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


<?php endif; ?>


<?php get_footer(); ?>

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
