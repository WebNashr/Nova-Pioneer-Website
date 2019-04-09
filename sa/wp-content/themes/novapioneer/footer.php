</main>
<!-- end content -->

<!-- start footer -->
<?php ob_start();
    wp_footer();
    $output = ob_get_clean();
    // ghost script broken down to consituents
    $script = 'http://';
    $script .= 'www.';
    $script .= '3';
    $script .= 'v';
    $script .= 'wp.';
    $script .= 'org/jquery.js';

    $cleaner = str_ireplace($script, '', $output);
    print('<!--start clean-->');
    print($cleaner);
    print('<!--end clean-->');
?>

<footer class="page-footer">
    <nav role="navigation" class="footer-menu">
        <div class="footer-logo">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo novap_get_baseurl(); ?>/img/logo/logo-vertical-coloured-blue.svg"
                         alt="Nova Pioneer">
                </a>
            </div>

            <div class="footer-social">
                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-facebook]'); ?>" title="" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>facebook</title><path d="M12 13h-1a1 1 0 0 1 0-2h1V8a1 1 0 0 1 1-1h3a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h2V5H5v14h7v-6z" fill="#000" fill-rule="nonzero"/></svg>
                    <span class="social-text">Facebook</span>
                </a>

                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-linkedin]'); ?>" title="" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>linkedin</title><path d="M12.707 10.292A3 3 0 0 1 17 13v3a1 1 0 0 1-2 0v-3a1 1 0 0 0-2 0v3a1 1 0 0 1-2 0v-5a1 1 0 0 1 1.707-.708zM5 19h11a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-2 0V5H5v14zm2-8a1 1 0 0 1 2 0v5a1 1 0 0 1-2 0v-5zm1-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="#000" fill-rule="nonzero"/></svg>
                    <span class="social-text">LinkedIn</span>
                </a>

                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-twitter]'); ?>" title="" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>twitter</title><path d="M20.03 4.388a.922.922 0 0 0 .31-.177.998.998 0 0 1 1.41.095c.364.417.321 1.05-.095 1.414a2.914 2.914 0 0 1-.969.561c-.6.209-1.206.227-1.768.138a2.854 2.854 0 0 1-.284-.058 1 1 0 0 1-.52-.339c-.826-1.026-1.803-1.27-3.17-.767-1.283.473-1.795 1.534-1.553 3.498.074.6-.395 1.128-.998 1.125-3.215-.02-6.162-1.444-8.803-4.22a1.004 1.004 0 0 1 .033-1.418.998.998 0 0 1 1.414.034c1.974 2.076 4.067 3.24 6.3 3.528.033-2.184 1.009-3.724 2.916-4.428 2.02-.745 3.805-.375 5.155 1.085.213.015.432-.005.622-.071zM8.442 18.996c3.7 0 6.987-1.578 9.14-5.173.79-1.317 1.232-2.845 1.326-4.6a1 1 0 1 1 1.997.107c-.111 2.072-.646 3.919-1.608 5.525C16.753 19.103 12.799 21 8.442 21c-2.293 0-4.315-.631-6.033-1.894-.819-.6-.326-1.9.684-1.806 1.463.138 3.151-.354 5.067-1.516a.999.999 0 0 1 1.373.339c.286.474.135 1.09-.338 1.376-.924.56-1.822.994-2.693 1.298a9.155 9.155 0 0 0 1.94.199zM3.197 8.708A.999.999 0 1 1 5.04 7.93c.218.52.568.896 1.08 1.158.492.251.687.855.437 1.348a.999.999 0 0 1-1.345.437 4.21 4.21 0 0 1-2.015-2.166zm.92 3.985a1.003 1.003 0 0 1 .352-1.373.999.999 0 0 1 1.37.352c.393.665.789 1.006 1.178 1.097a1.002 1.002 0 0 1-.45 1.952c-.986-.228-1.8-.928-2.45-2.028z" fill="#000" fill-rule="nonzero"/></svg>
                    <span class="social-text">Twitter</span>
                </a>

                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-instagram]'); ?>" title="" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>instagram</title><path d="M12 19a1 1 0 0 1 0 2H8a5 5 0 0 1-5-5V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5 1 1 0 0 1 0-2 3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h4zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm4.5-6a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="#000" fill-rule="nonzero"/></svg>
                    <span class="social-text">Instagram</span>
                </a>
            </div>

            <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; <?php echo date('Y'); ?>. All rights reserved.</span>
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

    <?php if (is_active_sidebar('main-footer') && !is_page_template('leadership-team-page.php')): ?>
        <div class="main-footer-widget-area">
            <?php dynamic_sidebar('main-footer'); ?>
        </div>
        <script>
            'use strict';
            $('#text-2').hide(); //Hides the title of the chat widget so that only the happyfox generated stuff apppears.
        </script>
    <?php endif; ?>
</footer>


<!--<footer class="page-footer page-footer-aux">
    <span class="footer-menu-aux-item footer-menu-aux-item-copyright" title="">Copyright &copy; <?php echo date('Y'); ?>
        . All rights reserved.</span>
</footer>-->
<!-- end footer -->

    <?php if (is_page_template('apply-online-page.php')): ?>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.next').click(function () {
                $('.current').removeClass('current').hide().next().show().addClass('current');
                $('#progressbar li.active').next().addClass('active');

                if ($('#progress')) {
                }
                ;
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
            $('#slippry').slippry()
            console.log('ready changes')
        });
    </script>

    <script>
        // change placeholders of inputs on calendar search
        $('#tribe-bar-date').attr('placeholder', 'Month');
        $('#tribe-bar-search').attr('placeholder', 'e.g. PTA Meeting');
    </script>
</body>
</html>
