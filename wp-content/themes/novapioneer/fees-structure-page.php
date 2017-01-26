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

    <?php while( have_posts() ): the_post();?>


        <section class="section trigger-offset">
          <div>
            <div class="page-navigation-container">
              <div class="navigation-wrap">
                <div class="section-title"><h3>Fees &amp; Tuition </h3></div>
                  <div class="links-inner-wrap"
                    <div class="section-content-item">
                        <div class="anchor-link">
                          <a href="#fees-table" class="" title="">Fees Per School</a>
                        </div>
                        <div class="link-separator">&nbsp;</div>
                        <div class="anchor-link">
                            <a href="#payment" class="" title="">How to make payment</a>
                        </div>
                        <div class="link-separator">&nbsp;</div>
                        <div class="anchor-link">
                             <a href="#faqs" class="" title="">FAQs</a>
                        </div>

                  </div>
                </div>
              </div>
              <div class="article cta-container"><a href="#" class="button button-default button-primary" title="">Download The 2017 Fees Structure</a></div>
            </div>

          </div>

        </section>



                <section class="section school-fees">

                  <article class="article article-inner article-inner-alt">
                      <h1 class="page-title">Fees Structure</h1>
                      <?php the_content(); ?>
                  </article>


                <?php foreach( get_field('sections') as $section ): $section = (object)$section; ?>

                    <?php if( !empty($section->fees) ): ?>

                    <article class="article article-inner article-inner-alt">
                      <form action="" method="" class="table-filter">
                        <div class="selector">
                            <select class="dropdown">
                                    <option value=">Select a School">Select a School</option>
                                    <option value="Ondiri">Ondiri</option>
                                    <option value="Tatu Girls">Tatu Girls</option>

                            </select>
                        </div>
                          <div class="selector">
                              <select class="dropdown">
                                      <option value="Select a Grade">Select a Grade</option>
                                      <option value=">Standard 1">Standard 1</option>
                                      <option value=">Standard 2">Standard 2</option>
                                      <option value=">Standard 3">Standard 3</option>
                              </select>
                          </div>
                          <div class="selector">
                              <select class="dropdown">
                                      <option value="Please Select Your Area of Interest">Select a Year</option>
                                      <option value=">2017">2017</option>
                                      <option value=">2016">2016</option>
                                      <option value=">2015">2015</option>
                              </select>
                          </div>
                          <input name="View Fees" value="View Fees" class="button button-default button-primary" style="" type="submit">
                      </form>
                        <div class="fees-container" id="fees-table">
                            <div class="schedule-content">
                                <header class="table-header"><?php echo $section->title; ?></header>
                                <table class="fees-table">
                                    <thead>
                                        <th class="text">Item</th>
                                        <th class="text">Term 1</th>
                                        <th class="text">Term 2</th>
                                        <th class="text">Term 3</th>
                                    </thead>

                                    <tbody>
                                        <?php foreach( $section->fees as $fee ): $fee = (object)$fee; ?>
                                            <tr class="">
                                                <td class="text row-title"><?php echo $fee->item_name; ?></td>
                                                <td class="text" data-title="Term 1"><?php echo $fee->term_1; ?></td>
                                                <td class="text" data-title="Term 2"><?php echo $fee->term_2; ?></td>
                                                <td class="text" data-title="Term 3"><?php echo $fee->term_3; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>


                                <?php if( !empty($section->additional_fees) ): ?>
                                    <table class="fees-table">
                                        <thead class="secondary">
                                            <th class="text">Other fees</th>
                                            <th class="text"></th>
                                            <th class="text"></th>
                                        </thead>

                                        <tbody>
                                            <?php foreach( $section->additional_fees as $fee ): $fee = (object)$fee; ?>
                                                <tr class="">
                                                    <td class="text row-title" data-title="First"><?php echo $fee->item_name; ?></td>
                                                    <td class="text cost" data-title="Term 1"><?php echo $fee->fee; ?></td>
                                                    <td class="text" data-title="Term 2"><?php echo $fee->notes; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            <a href="<?php echo $section->fees_document; ?>" class="button button-small button-primary" title="">Download the Fees Structure</a>
                            </div>
                        </div>
                    </article>
                </section>
            <?php endif; ?>


        <?php endforeach ?>


        <section class="section">
            <div class="fees-container">
                <div class="schedule-content" id="payment">
                    <header class="table-header">How to make payment</header>

                    <table class="fees-table">
                        <thead>

                            <th class="text"></th>
                            <th class="text">Payment method</th>
                            <th class="text">Instructions</th>
                            <th class="text">Proof of payment</th>

                        </thead>

                        <tbody>
                            <?php $x = 1; ?>
                            <?php foreach( get_field('payment_methods') as $method ): $method = (object)$method; ?>
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
            </div>
        </section>

        <section class="section">
            <article class="article article-inner article-inner-alt" id="faqs">
                <h2>Frequently Asked Questions</h2>

                <ul class="toggle-list">
                    <?php $n = 0; ?>
                    <?php foreach( get_field('faqs') as $faq ): $faq = (object)$faq; ?>
                        <li class="<?php if($n <= 0): echo 'show'; endif; ?>">
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
    <!-- smooth scroll -->
    <script>
       $('a[href^="#"]').on('click', function(event) {
           var target = $(this.getAttribute('href'));
           if( target.length ) {
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
   $('a[href^="#"]').on('click', function(event) {
       var target = $(this.getAttribute('href'));
       if( target.length ) {
           event.preventDefault();
           $('html, body').stop().animate({
               scrollTop: target.offset().top
           }, 1000);
       }
   });
</script>
