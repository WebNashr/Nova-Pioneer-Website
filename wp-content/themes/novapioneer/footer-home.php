


<!-- start footer -->


  <footer class="page-footer page-footer-home">

    <!-- start navigation -->
        <?php wp_nav_menu( array(
            'menu_class' => 'footer-menu-aux',
            'walker' => new NovaPioneer\NovapMenuWalker,
            'items_wrap' => '<nav role="navigation" id="%1$s" class="%2$s">%3$s <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; ' . date('Y') . '. All right reserved.</span></nav>',
            'theme_location' => 'novap-footer-aux-menu',
            'container' => ''
        ) ); ?>
    <!-- end navigation -->
  </footer>
  <!-- end footer -->


  <?php wp_footer(); ?>

  </main> <!-- end content -->

  </body>
</html>
