<?php
/**
 * Front page
 */

 get_header('home');?>

<section class="section section-hero homepage">
    <div class="container hero-container">
        <div class="main-callout-box home-page-callout">
            <hr>
            <h1><?php echo get_field('callout_box'); ?></h1>
        </div>
    </div>
</section>
<!-- <footer class="page-footer page-footer-home">
   <nav role="navigation" class="footer-menu-aux">
       <a href="#" class="footer-menu-aux-item footer-menu-aux-item-page footer-menu-aux-item-current" title="">Home</a>
       <a href="#" class="footer-menu-aux-item footer-menu-aux-item-page" title="">About Nova Pioneer</a>
       <a href="#" class="footer-menu-aux-item footer-menu-aux-item-page" title="">Careers</a>
       <a href="#" class="footer-menu-aux-item footer-menu-aux-item-page" title="">Site Map</a>
       <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; 2016. All right reserved.</span>
   </nav>
</footer> -->
<!-- <div class="trigger"></div> -->


<?php get_footer('home'); ?>


 <?php wp_footer(); ?>

 </main> <!-- end content -->

 </body>
</html>
