<?php 
/**
* Template Name: Fees Structure Page
*/

$data = (object)$_REQUEST;
if(isset($data->fee_structure)):
    novap_download_file($data->fee_structure);
endif;

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); $n=0; ?>

        <?php foreach( get_field('sections') as $section ): $section = (object)$section; ?>
            <section class="section trigger-offset">
                <article class="article article-body general-content">
                    <?php if($n == 0): ?>
                        <h1 class="page-title">Fees Structure</h1>
                    <?php endif; ?>

                    <h2><?php echo $section->title; ?></h2>
                    <?php echo $section->description; ?>
                </article>
            </section>

            <?php if( !empty($section->fees) ): ?>
                <section class="section">
                    <div class='fees-container'>
                        <div class='schedule-content'>
                            <header class='table-header'>Fees</header>
                            <table class='fees-table'>
                                <thead>
                                    <th class='text'>Item</th>
                                    <th class='text'>Term 1</th>
                                    <th class='text'>Term 2</th>
                                    <th class='text'>Term 3</th>
                                </thead>

                                <tbody>
                                    <?php foreach( $section->fees as $fee ): $fee = (object)$fee; ?>
                                        <tr class=''>
                                            <td class='text row-title'><?php echo $fee->item_name; ?></td>
                                            <td class='text ' data-title='Term 1'><?php echo $fee->term_1; ?></td>
                                            <td class='text ' data-title='Term 2'><?php echo $fee->term_2; ?></td>
                                            <td class='text ' data-title='Term 3'><?php echo $fee->term_3; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if( !empty($section->additional_fees) ): ?>
                <section class="section">
                    <div class='fees-container'>
                        <header class='table-header'>Additional Fees</header>
                        <table class='fees-table'>
                            <thead>
                                <th class='text'>Item</th>
                                <th class='text'>Fee</th>
                                <th class='text'>Notes</th>
                            </thead>

                            <tbody>
                                <?php foreach( $section->additional_fees as $fee ): $fee = (object)$fee; ?>
                                    <tr class=''>
                                        <td class='text row-title' data-title='First'><?php echo $fee->item_name; ?></td>
                                        <td class='text cost' data-title='Term 1'><?php echo $fee->fee; ?></td>
                                        <td class='text ' data-title='Term 2'><?php echo $fee->notes; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            <?php endif; ?>
        <?php  $n++; endforeach ?>

        <section class="section">
            <div class='fees-container'>
                <a href="#" class="button button-large button-primary" title="">Download the Fees Structures</a>
            </div>
        </section>

        <section class="section">
            <article class="article article-body general-content">
                <h2>Frequently Asked Questions</h2>

                <ul class="toggle-list">
                    <?php foreach( get_field('faqs') as $faq ): $faq = (object)$faq; ?>
                        <li>
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
                <?php the_content(); ?>
            </article>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <script>
        $(document).ready(function(){

            $('form.fees-structures-form').submit(function(event){

                var file_to_download = $(this).children('select').find(':selected').val();

                if(file_to_download === "")
                {
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
