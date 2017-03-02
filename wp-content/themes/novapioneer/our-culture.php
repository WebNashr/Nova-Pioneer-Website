<?php
/**
* Template Name: Our Culture
*
*/

get_header();?>

<?php if( have_posts() ): ?>



        <section class="section section-hero about-np" data-type="background" data-speed="4">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title"><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <article class="article article-inner article-inner-alt">
                <h2 class="centered-title">Our School &amp; Organisation Culture</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </article>
        </section>

      <section class="section">
          <div class="section-content section-content-plain principles-container">
              <div class="section-content-item section-content-item-third principle-card card-1">
                  <h2 class="number">1</h2>
                  <h3>Joy of Learning</h3>
                  <div class="small-divider"></div>
                  <p>We are life-long learners and we are fueled by curiosity and discovery</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-2">
                  <h2 class="number">2</h2>
                  <h3>Greater Together</h3>
                  <div class="small-divider"></div>
                  <p>We constantly support our teammates because we know that we can achieve more together.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-3">
                  <h2 class="number">3</h2>
                  <h3>Always Growing</h3>
                  <div class="small-divider"></div>
                  <p>We constantly seek out difficult challenges, share and receive feedback as a gift, and see every failure as an opportunity to grow.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-4">
                  <h2 class="number">4</h2>
                  <h3>Servant Leadership</h3>
                  <div class="small-divider"></div>
                  <p>Great leaders always put others before themselves and engage their community with humility and generosity. We see leadership as a way of improving the world, not simply promoting ourselves.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-5">
                  <h2 class="number">5</h2>
                  <h3>Solutions First</h3>
                  <div class="small-divider"></div>
                  <p>Everything is possible when we are creative and think critically about the problem. We are always thinking of new solutions when faced with difficult challenges.</p>
              </div>
              <div class="section-content-item section-content-item-third principle-card card-6">
                  <h2 class="number">6</h2>
                  <h3>High Expectations</h3>
                  <div class="small-divider"></div>
                  <p>We sweat the small stuff and take pride in what we do.We set goals that others think are impossible and never stop until we achieve them.</p>
              </div>

          </div>
        </section>


    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>


<?php endif; ?>

<?php get_footer(); ?>


<!-- smooth scroll
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
</script>-->
