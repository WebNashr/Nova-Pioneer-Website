
  </main> <!-- end content -->

<!-- start footer -->

<?php wp_footer(); ?>

<?php if( !is_front_page() ): ?>
  <footer class="page-footer">
    <nav role="navigation" class="footer-menu">
        <div class="footer-logo">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-vertical-coloured-blue.svg" alt="Nova Pioneer">
                </a>
            </div>
        </div>

        <div class="footer-boxes">

            <?php wp_nav_menu( array(
                'walker' => new NovaPioneer\NovapMenuWalker,
                'items_wrap' => '%3$s',
                'theme_location' => 'novap-footer-menu',
                'container' => ''
            ) ); ?>

        </div>
    </nav>

    <?php if( is_active_sidebar('main-footer') && !is_page_template('leadership-team-page.php') ): ?>
        <div class="main-footer-widget-area">
            <?php dynamic_sidebar('main-footer'); ?>
        </div>
        <script>
            'use strict';
            $('#text-2').hide(); //Hides the title of the chat widget so that only the happyfox generated stuff apppears.
        </script>
    <?php endif; ?>

  </footer>
<?php endif; ?>

  <?php if( !is_front_page() ): ?>
  <footer class="page-footer page-footer-aux">
    <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; <?php echo date('Y'); ?>. All right reserved.</span>
  </footer>
  <?php endif; ?>
  <!-- end footer -->

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
  <!-- slippry -->
  <script type="text/javascript">
    $(document).ready(function () {
      jQuery(document).ready(function(){
        jQuery('#slippry').slippry()
      });
    });
  </script>

    <script>
        // change placeholders of inputs on calendar search
        $('#tribe-bar-date').attr('placeholder', 'Month');
        $('#tribe-bar-search').attr('placeholder', 'e.g. PTA Meeting');
    </script>
    <!-- <script>
        $(document).ready(function () {

            var captionWaypoint = $('.caption').waypoint(function (direction) {

                if (direction == 'down') {

                    $(this.element).addClass('slideInLeft');

                    this.destroy();
                }
            }, {
                offset: '95%'
            });

            var inview = new Waypoint.Inview({
              element: $('.animated-title')[0],

              entered: function(direction) {
                $(this.element).addClass('slideInLeft');

                this.destroy();
              }

              });
        });
    </script> -->
  </body>
</html>
