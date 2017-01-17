
  </main> <!-- end content -->
  
<!-- start footer -->
  <footer class="page-footer">
      <nav role="navigation" class="footer-menu">
          <a href="<?php echo site_url(); ?>" class="footer-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg" alt="Nova Pioneer">
          </a>

          <div class="footer-boxes">

                <?php wp_nav_menu( array(
                    'walker' => new NovaPioneer\NovapMenuWalker,
                    'items_wrap' => '%3$s',
                    'theme_location' => 'novap-footer-menu',
                    'container' => ''
                ) ); ?>

          </div>
      </nav>
  </footer>

  <footer class="page-footer page-footer-aux">

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

  <?php if( is_page_template('apply-online-page.php') ): ?>

        <script type="text/javascript">
          $(document).ready(function () {

              $('.next').click(function () {
                  $('.current').removeClass('current').hide().next().show().addClass('current');
                  $('#progressbar li.active').next().addClass('active');

                  if ($('#progress')) {};

              });

              $('.previous').click(function () {
                  $('.current').removeClass('current').hide().prev().show().addClass('current');
                  $('#progressbar li.active').removeClass('active').prev().addClass('active');
              });
          });
        </script>

  <?php endif; ?>
  
  </body>
</html>
