</main> <!-- end content -->

<!-- start footer -->

<?php wp_footer(); ?>

<footer class="page-footer">
    <nav role="navigation" class="footer-menu">
        <div class="footer-logo">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo novap_get_baseurl(); ?>/img/logo/logo-vertical-coloured-blue.svg"
                         alt="Nova Pioneer">
                </a>
            </div>
        </div>

        <div class="footer-boxes">

            <?php wp_nav_menu(array(
                'walker' => new NovaPioneer\NovapFooterMenuWalker,
                'items_wrap' => '%3$s',
                'theme_location' => 'novap-footer-menu',
                'container' => ''
            )); ?>

        </div>
    </nav>

</footer>


<footer class="page-footer page-footer-aux">
    <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; <?php echo date('Y'); ?>
        . All rights reserved.</span>
</footer>
<!-- end footer -->


<!-- slippry -->
<script type="text/javascript">

    $(document).ready(function () {
        $('#slippry').slippry()
        console.log('ready changes')

    });

</script>

<script>
    // change placeholders of inputs on calendar search
    $('#tribe-bar-date').attr('placeholder', 'Month');
    $('#tribe-bar-search').attr('placeholder', 'e.g. PTA Meeting');
</script>
<!-- <script>
    $(document).ready(function () {


    <script>
        // change placeholders of inputs on calendar search
        $('#tribe-bar-date').attr('placeholder', 'Month');
        $('#tribe-bar-search').attr('placeholder', 'e.g. PTA Meeting');
    </script>
    <<script>
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
