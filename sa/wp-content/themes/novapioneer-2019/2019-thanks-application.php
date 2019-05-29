<?php
    /**
    * Template Name: Thanks - application
    */
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="<?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    <meta name="google-site-verification" content="dxXfAuVAfmpb9RcBxI58DB_IIDMCFigXHQqrkIa33Rc" />
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W89TX54');</script>
    <!-- End Google Tag Manager -->


    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-97642297-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    <!-- Add the slick-theme.css if you want default styling -->
    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>-->
    <!-- Add the slick-theme.css if you want default styling -->
    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>-->
</head>

<body <?php body_class('body-sa'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W89TX54" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- start content -->
    <main role="main">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="updates-2019">
            <section class="section section-banner-thanks">
                <figure class="">
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-banner')[0]; ?>" alt="">

                    <figcaption class="flex-row">
                        <div class="figcaption-holder">
                            <a href="<?php echo home_url(); ?>" class="logo header-logo">
                                <!-- mark and text -->
                                <svg version="1.1" id="Layer_1.2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="714.234px" height="203.368px" viewBox="0 0 714.234 203.368"
                                    enable-background="new 0 0 714.234 203.368"
                                    xml:space="preserve" class="logo-mark-text">
                                    <g id="coloured">
                                        <g class="logo-mark">
                                            <linearGradient id="SVGID_1_1" gradientUnits="userSpaceOnUse" x1="10" y1="65.9565"
                                                            x2="146.5885" y2="65.9565"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#188EBF"/>
                                                <stop offset="0.2459" style="stop-color:#1D7AAA"/>
                                                <stop offset="0.7761" style="stop-color:#1C5184"/>
                                                <stop offset="1" style="stop-color:#1D3F75"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_1_1)" points="15.169,44.127 4,74.316 72.662,34.613 93.689,47.434 140.765,74.614 140.912,49.504
                                                73.908,10.209       "/>

                                            <linearGradient id="SVGID_2_1" gradientUnits="userSpaceOnUse" x1="196.8643" y1="54.0454"
                                                            x2="127.9901" y2="-63.9692"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#F68B1F"/>
                                                <stop offset="1" style="stop-color:#FFCF01"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_2_1)" points="163.25,117.336 140.765,128.983 93.689,156.165 115.268,168.629 184.343,130.163
                                                184.343,63.148 163.25,37.922        "/>

                                            <linearGradient id="SVGID_3_1" gradientUnits="userSpaceOnUse" x1="92.2236" y1="-101.4985"
                                                            x2="25.2814" y2="18.4553"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#6CBE45"/>
                                                <stop offset="1" style="stop-color:#0D9046"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_3_1)" points="25.506,86.729 25.506,166.145 81.765,199.237 113.611,193.866 46.606,154.157
                                                46.606,128.983 46.606,74.614        "/>

                                            <linearGradient id="SVGID_4_1" gradientUnits="userSpaceOnUse" x1="107.9985" y1="113.8979"
                                                            x2="174.5499" y2="-4.8876"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#F68B1F"/>
                                                <stop offset="1" style="stop-color:#FFCF01"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_4_1)" points="73.908,10.209 140.912,49.504 140.765,74.614 140.765,128.983 163.25,117.336
                                                163.25,37.922 105.75,4      "/>

                                            <linearGradient id="SVGID_5_1" gradientUnits="userSpaceOnUse" x1="3.5342" y1="-41.5581"
                                                            x2="72.4751" y2="77.3456"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#6CBE45"/>
                                                <stop offset="0.2554" style="stop-color:#67B945"/>
                                                <stop offset="0.5116" style="stop-color:#59AE45"/>
                                                <stop offset="0.7672" style="stop-color:#40A046"/>
                                                <stop offset="1" style="stop-color:#0D9046"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_5_1)" points="4,74.316 4,141.745 25.506,166.145 25.506,86.729 46.606,74.614 93.689,47.434
                                                72.666,34.613       "/>

                                            <linearGradient id="SVGID_6_1" gradientUnits="userSpaceOnUse" x1="191.687" y1="-53.647"
                                                            x2="52.3961" y2="-52.8733"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#188EBF"/>
                                                <stop offset="0.2459" style="stop-color:#1D7AAA"/>
                                                <stop offset="0.7761" style="stop-color:#1C5184"/>
                                                <stop offset="1" style="stop-color:#1D3F75"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_6_1)" points="46.602,154.157 113.616,193.866 172.35,161.176 184.338,130.154 115.268,168.629
                                                93.689,156.165 46.602,128.993       "/>
                                        </g>

                                        <g class="logo-text">
                                            <g>
                                                <polygon fill="#1D3F75" points="218.295,63.378 227.97,63.378 250.326,92.758 250.326,63.378 260.689,63.378 260.689,111.096
                                                    251.762,111.096 228.654,80.766 228.654,111.096 218.295,111.096          "/>
                                                <path fill="#1D3F75" d="M265.941,87.371v-0.135c0-13.562,10.701-24.674,25.425-24.674c14.724,0,25.285,10.976,25.285,24.539
                                                    v0.135c0,13.564-10.702,24.679-25.421,24.679C276.506,111.915,265.941,100.935,265.941,87.371 M305.68,87.371v-0.135
                                                    c0-8.18-5.998-14.994-14.449-14.994c-8.455,0-14.318,6.679-14.318,14.859v0.135c0,8.182,6.002,15.005,14.454,15.005
                                                    C299.821,102.241,305.68,95.557,305.68,87.371"/>
                                                <polygon fill="#1D3F75" points="314.748,63.378 326.336,63.378 338.81,96.984 351.287,63.378 362.597,63.378 343.314,111.438
                                                    334.039,111.438             "/>
                                                <path fill="#1D3F75" d="M375.423,63.041h9.674l20.448,48.055h-10.976l-4.355-10.701H370.03l-4.359,10.701h-10.702L375.423,63.041
                                                    z M386.465,91.125l-6.345-15.473l-6.336,15.473H386.465z"/>
                                                <path fill="#1D3F75" d="M425.183,63.378h19.489c11.386,0,18.271,6.75,18.271,16.497v0.135c0,11.043-8.586,16.775-19.291,16.775
                                                    h-7.976v14.311h-10.494V63.378L425.183,63.378z M443.997,87.443c5.242,0,8.312-3.137,8.312-7.227V80.08
                                                    c0-4.706-3.272-7.227-8.52-7.227h-8.113v14.589L443.997,87.443L443.997,87.443z"/>
                                                <rect x="467.101" y="63.378" fill="#1D3F75" width="10.498" height="47.718"/>
                                                <path fill="#1D3F75" d="M483.327,87.371v-0.135c0-13.562,10.701-24.674,25.426-24.674c14.724,0,25.289,10.976,25.289,24.539
                                                    v0.135c0,13.564-10.701,24.679-25.426,24.679C493.89,111.915,483.327,100.935,483.327,87.371 M523.067,87.371v-0.135
                                                    c0-8.18-5.999-14.994-14.451-14.994c-8.455,0-14.312,6.679-14.312,14.859v0.135c0,8.182,5.998,15.005,14.449,15.005
                                                    S523.067,95.557,523.067,87.371"/>
                                                <polygon fill="#1D3F75" points="539.294,63.378 548.974,63.378 571.329,92.758 571.329,63.378 581.688,63.378 581.688,111.096
                                                    572.761,111.096 549.653,80.766 549.653,111.096 539.294,111.096          "/>
                                                <polygon fill="#1D3F75" points="589.054,63.378 625.046,63.378 625.046,72.719 599.481,72.719 599.481,82.402 621.979,82.402
                                                    621.979,91.736 599.481,91.736 599.481,101.758 625.384,101.758 625.384,111.096 589.054,111.096           "/>
                                                <polygon fill="#1D3F75" points="630.635,63.378 666.626,63.378 666.626,72.719 641.066,72.719 641.066,82.402 663.562,82.402
                                                    663.562,91.736 641.066,91.736 641.066,101.758 666.972,101.758 666.972,111.096 630.635,111.096           "/>
                                                <path fill="#1D3F75" d="M672.22,63.378h21.812c6.065,0,10.77,1.705,13.905,4.841c2.659,2.66,4.095,6.409,4.095,10.909v0.135
                                                    c0,7.7-4.157,12.541-10.229,14.791l11.66,17.042h-12.275l-10.225-15.269h-8.244v15.269H672.22V63.378z M693.347,86.557
                                                    c5.112,0,8.052-2.727,8.052-6.75v-0.135c0-4.495-3.138-6.817-8.255-6.817h-10.426v13.702H693.347z"/>
                                            </g>

                                            <g>
                                                <path fill="#1D3F75" d="M217.679,149.013l2.223-2.664c1.539,1.265,3.149,2.069,5.103,2.069c1.539,0,2.471-0.612,2.471-1.61
                                                    v-0.045c0-0.954-0.585-1.449-3.447-2.179c-3.441-0.881-5.665-1.836-5.665-5.229v-0.049c0-3.101,2.493-5.154,5.985-5.154
                                                    c2.492,0,4.621,0.783,6.35,2.171l-1.953,2.834c-1.518-1.05-3.007-1.683-4.446-1.683c-1.44,0-2.2,0.655-2.2,1.489v0.05
                                                    c0,1.125,0.733,1.489,3.694,2.25c3.464,0.899,5.423,2.151,5.423,5.13v0.05c0,3.397-2.593,5.3-6.283,5.3
                                                    C222.345,151.743,219.73,150.84,217.679,149.013"/>
                                                <path fill="#1D3F75" d="M233.24,142.991v-0.046c0-4.858,3.662-8.846,8.918-8.846c3.227,0,5.152,1.08,6.746,2.642l-2.399,2.764
                                                    c-1.318-1.201-2.659-1.93-4.373-1.93c-2.885,0-4.96,2.389-4.96,5.326v0.044c0,2.931,2.025,5.374,4.96,5.374
                                                    c1.952,0,3.154-0.777,4.5-1.999l2.394,2.419c-1.764,1.879-3.717,3.055-7.016,3.055
                                                    C236.979,151.793,233.24,147.907,233.24,142.991"/>
                                                <polygon fill="#1D3F75" points="251.537,134.396 255.299,134.396 255.299,141.165 262.237,141.165 262.237,134.396
                                                    266.004,134.396 266.004,151.497 262.237,151.497 262.237,144.629 255.299,144.629 255.299,151.497 251.537,151.497             "/>
                                                <path fill="#1D3F75" d="M268.856,142.991v-0.046c0-4.858,3.835-8.846,9.118-8.846c5.273,0,9.058,3.938,9.058,8.802v0.044
                                                    c0,4.86-3.829,8.849-9.112,8.849C272.646,151.793,268.856,147.86,268.856,142.991 M283.104,142.991v-0.046
                                                    c0-2.933-2.15-5.37-5.184-5.37c-3.029,0-5.126,2.389-5.126,5.326v0.044c0,2.931,2.151,5.374,5.181,5.374
                                                    C281.002,148.319,283.104,145.926,283.104,142.991"/>
                                                <path fill="#1D3F75" d="M289.134,142.991v-0.046c0-4.858,3.839-8.846,9.116-8.846c5.275,0,9.064,3.938,9.064,8.802v0.044
                                                    c0,4.86-3.834,8.849-9.113,8.849C292.923,151.793,289.134,147.86,289.134,142.991 M303.377,142.991v-0.046
                                                    c0-2.933-2.143-5.37-5.176-5.37c-3.028,0-5.13,2.389-5.13,5.326v0.044c0,2.931,2.151,5.374,5.179,5.374
                                                    C301.279,148.319,303.377,145.926,303.377,142.991"/>
                                                <polygon fill="#1D3F75" points="310.167,134.396 313.934,134.396 313.934,148.077 322.461,148.077 322.461,151.497
                                                    310.167,151.497             "/>
                                                <path fill="#1D3F75" d="M323.631,149.013l2.223-2.664c1.539,1.265,3.155,2.069,5.108,2.069c1.538,0,2.466-0.612,2.466-1.61
                                                    v-0.045c0-0.954-0.585-1.449-3.442-2.179c-3.447-0.881-5.666-1.836-5.666-5.229v-0.049c0-3.101,2.489-5.154,5.985-5.154
                                                    c2.488,0,4.617,0.783,6.351,2.171l-1.953,2.834c-1.518-1.05-3.011-1.683-4.451-1.683c-1.438,0-2.195,0.655-2.195,1.489v0.05
                                                    c0,1.125,0.732,1.489,3.689,2.25c3.47,0.899,5.423,2.151,5.423,5.13v0.05c0,3.397-2.587,5.3-6.282,5.3
                                                    C328.303,151.743,325.684,150.84,323.631,149.013"/>
                                                <polygon fill="#1D3F75" points="346.793,134.396 359.816,134.396 359.816,137.816 350.555,137.816 350.555,141.454
                                                    358.713,141.454 358.713,144.877 350.555,144.877 350.555,151.497 346.793,151.497             "/>
                                                <path fill="#1D3F75" d="M361.571,142.991v-0.046c0-4.858,3.833-8.846,9.116-8.846c5.273,0,9.062,3.938,9.062,8.802v0.044
                                                    c0,4.86-3.84,8.849-9.113,8.849C365.359,151.793,361.571,147.86,361.571,142.991 M375.817,142.991v-0.046
                                                    c0-2.933-2.15-5.37-5.181-5.37c-3.033,0-5.134,2.389-5.134,5.326v0.044c0,2.931,2.155,5.374,5.184,5.374
                                                    C373.716,148.319,375.817,145.926,375.817,142.991"/>
                                                <path fill="#1D3F75" d="M382.608,134.396h7.815c2.174,0,3.861,0.608,4.986,1.737c0.953,0.955,1.463,2.295,1.463,3.906v0.045
                                                    c0,2.764-1.49,4.5-3.664,5.311l4.182,6.102h-4.396l-3.667-5.472h-2.961v5.472h-3.758V134.396L382.608,134.396z M390.182,142.704
                                                    c1.831,0,2.886-0.98,2.886-2.422v-0.044c0-1.61-1.13-2.444-2.957-2.444h-3.743v4.91H390.182z"/>
                                                <rect x="406.791" y="134.396" fill="#1D3F75" width="3.763" height="17.101"/>
                                                <polygon fill="#1D3F75" points="414.342,134.396 417.812,134.396 425.827,144.926 425.827,134.396 429.539,134.396
                                                    429.539,151.497 426.34,151.497 418.054,140.625 418.054,151.497 414.342,151.497          "/>
                                                <polygon fill="#1D3F75" points="433.152,134.396 436.622,134.396 444.642,144.926 444.642,134.396 448.349,134.396
                                                    448.349,151.497 445.149,151.497 436.864,140.625 436.864,151.497 433.152,151.497             "/>
                                                <path fill="#1D3F75" d="M451.206,142.991v-0.046c0-4.858,3.839-8.846,9.112-8.846c5.283,0,9.066,3.938,9.066,8.802v0.044
                                                    c0,4.86-3.838,8.849-9.117,8.849C454.991,151.793,451.206,147.86,451.206,142.991 M465.448,142.991v-0.046
                                                    c0-2.933-2.146-5.37-5.181-5.37c-3.026,0-5.129,2.389-5.129,5.326v0.044c0,2.931,2.15,5.374,5.18,5.374
                                                    C463.347,148.319,465.448,145.926,465.448,142.991"/>
                                                <polygon fill="#1D3F75" points="469.675,134.396 473.828,134.396 478.301,146.443 482.773,134.396 486.829,134.396
                                                    479.916,151.62 476.586,151.62           "/>
                                                <path fill="#1D3F75" d="M492.396,134.275h3.473l7.326,17.222h-3.934l-1.564-3.834h-7.229l-1.568,3.834h-3.833L492.396,134.275z
                                                    M496.36,144.342l-2.277-5.549l-2.273,5.549H496.36z"/>
                                                <polygon fill="#1D3F75" points="507.128,137.861 501.926,137.861 501.926,134.396 516.092,134.396 516.092,137.861
                                                    510.89,137.861 510.89,151.497 507.128,151.497           "/>
                                                <path fill="#1D3F75" d="M516.997,142.991v-0.046c0-4.858,3.838-8.846,9.111-8.846c5.277,0,9.071,3.938,9.071,8.802v0.044
                                                    c0,4.86-3.839,8.849-9.116,8.849C520.79,151.793,516.997,147.86,516.997,142.991 M531.243,142.991v-0.046
                                                    c0-2.933-2.146-5.37-5.181-5.37c-3.027,0-5.129,2.389-5.129,5.326v0.044c0,2.931,2.146,5.374,5.175,5.374
                                                    C529.142,148.319,531.243,145.926,531.243,142.991"/>
                                                <path fill="#1D3F75" d="M538.034,134.396h7.815c2.174,0,3.86,0.608,4.99,1.737c0.945,0.955,1.463,2.295,1.463,3.906v0.045
                                                    c0,2.764-1.49,4.5-3.668,5.311l4.176,6.102h-4.392l-3.667-5.472h-2.957v5.472h-3.762L538.034,134.396L538.034,134.396z
                                                    M545.612,142.704c1.825,0,2.875-0.98,2.875-2.422v-0.044c0-1.61-1.12-2.444-2.957-2.444h-3.734v4.91H545.612z"/>
                                                <path fill="#1D3F75" d="M554.03,149.013l2.229-2.664c1.543,1.265,3.15,2.069,5.107,2.069c1.539,0,2.462-0.612,2.462-1.61v-0.045
                                                    c0-0.954-0.581-1.449-3.442-2.179c-3.442-0.881-5.666-1.836-5.666-5.229v-0.049c0-3.101,2.489-5.154,5.984-5.154
                                                    c2.494,0,4.618,0.783,6.354,2.171l-1.958,2.834c-1.512-1.05-3.003-1.683-4.445-1.683c-1.439,0-2.195,0.655-2.195,1.489v0.05
                                                    c0,1.125,0.729,1.489,3.681,2.25c3.479,0.899,5.433,2.151,5.433,5.13v0.05c0,3.397-2.593,5.3-6.278,5.3
                                                    C558.702,151.743,556.087,150.84,554.03,149.013"/>
                                                <path fill="#1D3F75" d="M586.724,149.836c-1.395,1.147-3.031,1.906-5.008,1.906c-3.274,0-5.742-1.906-5.742-4.936v-0.045
                                                    c0-2.18,1.17-3.717,3.316-4.698c-0.828-1.17-1.193-2.246-1.193-3.42V138.6c0-2.35,1.884-4.5,5.182-4.5
                                                    c2.906,0,4.813,1.908,4.813,4.302v0.05c0,2.295-1.472,3.641-3.595,4.469l2.271,2.275c0.562-0.881,1.125-1.879,1.666-2.933
                                                    l2.759,1.517c-0.662,1.191-1.392,2.467-2.25,3.613l2.52,2.52l-2.758,1.926L586.724,149.836z M584.622,147.689l-3.275-3.33
                                                    c-1.125,0.595-1.588,1.423-1.588,2.255v0.049c0,1.197,1.002,1.998,2.396,1.998C583.007,148.661,583.835,148.301,584.622,147.689
                                                    M584.816,138.67v-0.043c0-0.981-0.657-1.594-1.616-1.594c-0.998,0-1.66,0.711-1.66,1.736v0.046c0,0.754,0.297,1.322,1.004,2.123
                                                    C584.036,140.381,584.816,139.747,584.816,138.67"/>
                                                <polygon fill="#1D3F75" points="600.552,134.396 604.31,134.396 604.31,148.077 612.837,148.077 612.837,151.497
                                                    600.552,151.497             "/>
                                                <polygon fill="#1D3F75" points="615.182,134.396 628.084,134.396 628.084,137.745 618.921,137.745 618.921,141.209
                                                    626.981,141.209 626.981,144.558 618.921,144.558 618.921,148.148 628.21,148.148 628.21,151.497 615.182,151.497           "/>
                                                <path fill="#1D3F75" d="M636.926,134.275h3.475l7.33,17.222h-3.941l-1.557-3.834H635l-1.564,3.834H629.6L636.926,134.275z
                                                    M640.886,144.342l-2.271-5.549l-2.272,5.549H640.886z"/>
                                                <path fill="#1D3F75" d="M649.878,134.396h6.668c5.373,0,9.085,3.69,9.085,8.506v0.044c0,4.816-3.712,8.551-9.085,8.551h-6.668
                                                    V134.396z M656.546,148.104c3.078,0,5.157-2.079,5.157-5.104v-0.056c0-3.026-2.079-5.151-5.157-5.151h-2.906v10.311H656.546z"/>
                                                <polygon fill="#1D3F75" points="668.489,134.396 681.391,134.396 681.391,137.745 672.233,137.745 672.233,141.209
                                                    680.292,141.209 680.292,144.558 672.233,144.558 672.233,148.148 681.512,148.148 681.512,151.497 668.489,151.497             "/>
                                                <path fill="#1D3F75" d="M684.369,134.396h7.821c2.178,0,3.856,0.608,4.981,1.737c0.953,0.955,1.467,2.295,1.467,3.906v0.045
                                                    c0,2.764-1.494,4.5-3.664,5.311l4.178,6.102h-4.401l-3.664-5.472h-2.951v5.472h-3.767V134.396L684.369,134.396z M691.947,142.704
                                                    c1.827,0,2.88-0.98,2.88-2.422v-0.044c0-1.61-1.125-2.444-2.955-2.444h-3.736v4.91H691.947z"/>
                                                <path fill="#1D3F75" d="M700.372,149.013l2.223-2.664c1.539,1.265,3.149,2.069,5.104,2.069c1.538,0,2.47-0.612,2.47-1.61v-0.045
                                                    c0-0.954-0.584-1.449-3.441-2.179c-3.446-0.881-5.666-1.836-5.666-5.229v-0.049c0-3.101,2.489-5.154,5.985-5.154
                                                    c2.483,0,4.612,0.783,6.345,2.171l-1.947,2.834c-1.518-1.05-3.012-1.683-4.446-1.683c-1.444,0-2.2,0.655-2.2,1.489v0.05
                                                    c0,1.125,0.733,1.489,3.689,2.25c3.465,0.899,5.423,2.151,5.423,5.13v0.05c0,3.397-2.592,5.3-6.282,5.3
                                                    C705.034,151.743,702.424,150.84,700.372,149.013"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <!-- mark only -->
                                <svg version="1.1" id="Layer_1.3" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="188.031px" height="203.368px" viewBox="0 0 188.031 203.368"
                                    enable-background="new 0 0 188.031 203.368"
                                    xml:space="preserve" class="logo-mark-only">
                                    <g id="coloured_blue">
                                        <g>
                                            <linearGradient id="SVGID_1_2" gradientUnits="userSpaceOnUse" x1="10" y1="65.9565"
                                                            x2="146.5885" y2="65.9565"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#188EBF"/>
                                                <stop offset="0.2459" style="stop-color:#1D7AAA"/>
                                                <stop offset="0.7761" style="stop-color:#1C5184"/>
                                                <stop offset="1" style="stop-color:#1D3F75"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_1_2)" points="15.169,44.127 4,74.316 72.662,34.613 93.689,47.434 140.766,74.614 140.912,49.504
                                                73.908,10.209       "/>

                                            <linearGradient id="SVGID_2_2" gradientUnits="userSpaceOnUse" x1="196.8643" y1="54.0454"
                                                            x2="127.9901" y2="-63.9692"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#F68B1F"/>
                                                <stop offset="1" style="stop-color:#FFCF01"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_2_2)" points="163.25,117.336 140.766,128.983 93.689,156.165 115.268,168.629 184.343,130.163
                                                184.343,63.148 163.25,37.922        "/>

                                            <linearGradient id="SVGID_3_2" gradientUnits="userSpaceOnUse" x1="92.2236" y1="-101.4995"
                                                            x2="25.281" y2="18.4552"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#6CBE45"/>
                                                <stop offset="1" style="stop-color:#0D9046"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_3_2)" points="25.506,86.729 25.506,166.145 81.765,199.237 113.611,193.866 46.606,154.157
                                                46.606,128.983 46.606,74.614        "/>

                                            <linearGradient id="SVGID_4_2" gradientUnits="userSpaceOnUse" x1="107.998" y1="113.897"
                                                            x2="174.5494" y2="-4.8885"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#F68B1F"/>
                                                <stop offset="1" style="stop-color:#FFCF01"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_4_2)" points="73.908,10.209 140.912,49.504 140.766,74.614 140.766,128.983 163.25,117.336
                                                163.25,37.922 105.75,4      "/>

                                            <linearGradient id="SVGID_5_2" gradientUnits="userSpaceOnUse" x1="3.5347" y1="-41.5591"
                                                            x2="72.4756" y2="77.3446"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#6CBE45"/>
                                                <stop offset="0.2554" style="stop-color:#67B945"/>
                                                <stop offset="0.5116" style="stop-color:#59AE45"/>
                                                <stop offset="0.7672" style="stop-color:#40A046"/>
                                                <stop offset="1" style="stop-color:#0D9046"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_5_2)" points="4,74.316 4,141.745 25.506,166.145 25.506,86.729 46.606,74.614 93.689,47.434
                                                72.666,34.613       "/>

                                            <linearGradient id="SVGID_6_2" gradientUnits="userSpaceOnUse" x1="191.6875" y1="-53.647"
                                                            x2="52.3966" y2="-52.8733"
                                                            gradientTransform="matrix(1 0 0 -1 -6 108.3682)">
                                                <stop offset="0" style="stop-color:#188EBF"/>
                                                <stop offset="0.2459" style="stop-color:#1D7AAA"/>
                                                <stop offset="0.7761" style="stop-color:#1C5184"/>
                                                <stop offset="1" style="stop-color:#1D3F75"/>
                                            </linearGradient>

                                            <polygon fill="url(#SVGID_6_2)" points="46.602,154.157 113.616,193.866 172.35,161.176 184.338,130.154 115.268,168.629
                                                93.689,156.165 46.602,128.993       "/>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <?php if (!empty(get_field('title'))): ?>
                                <h1><?php the_field('title') ?></h1>
                            <?php else: ?>
                                <h1>Thank you for your application!</h1>
                            <?php endif ?>

                            <?php if (!empty(get_field('description'))): ?>
                                <p><?php the_field('description'); ?></p>
                            <?php else: ?>
                                <p>Congratulations on taking your first step to becoming part of our cohort of innovators and leaders who will shape the African century. Someone from our Admissions office will get in touch soon.</p>
                            <?php endif ?>

                            <?php if (!empty(get_field('signpost'))): ?>
                                <p><?php the_field('signpost'); ?></p>
                            <?php else: ?>
                                <p>Have you read our blog? Click the button below to find some of our articles.</p>
                            <?php endif ?>

                            <?php if (!empty(get_field('alternate_title'))): ?>
                                <a class="button button-default button-green-lt" href="<?php the_field('button_link'); ?>" title="<?php the_field('button_text'); ?>"><?php the_field('button_text'); ?></a>
                            <?php else: ?>
                                <a class="button button-default button-green-lt" href="" title="">Register now</a>
                            <?php endif ?>

                            <div class="banner-social">
                                <span>Connect with us</span>

                                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-facebook]'); ?>" title="" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>facebook</title><path d="M12 13h-1a1 1 0 0 1 0-2h1V8a1 1 0 0 1 1-1h3a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h2V5H5v14h7v-6z" fill="#000" fill-rule="nonzero"/></svg>
                                </a>

                                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-linkedin]'); ?>" title="" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>linkedin</title><path d="M12.707 10.292A3 3 0 0 1 17 13v3a1 1 0 0 1-2 0v-3a1 1 0 0 0-2 0v3a1 1 0 0 1-2 0v-5a1 1 0 0 1 1.707-.708zM5 19h11a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-2 0V5H5v14zm2-8a1 1 0 0 1 2 0v5a1 1 0 0 1-2 0v-5zm1-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="#000" fill-rule="nonzero"/></svg>
                                </a>

                                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-twitter]'); ?>" title="" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>twitter</title><path d="M20.03 4.388a.922.922 0 0 0 .31-.177.998.998 0 0 1 1.41.095c.364.417.321 1.05-.095 1.414a2.914 2.914 0 0 1-.969.561c-.6.209-1.206.227-1.768.138a2.854 2.854 0 0 1-.284-.058 1 1 0 0 1-.52-.339c-.826-1.026-1.803-1.27-3.17-.767-1.283.473-1.795 1.534-1.553 3.498.074.6-.395 1.128-.998 1.125-3.215-.02-6.162-1.444-8.803-4.22a1.004 1.004 0 0 1 .033-1.418.998.998 0 0 1 1.414.034c1.974 2.076 4.067 3.24 6.3 3.528.033-2.184 1.009-3.724 2.916-4.428 2.02-.745 3.805-.375 5.155 1.085.213.015.432-.005.622-.071zM8.442 18.996c3.7 0 6.987-1.578 9.14-5.173.79-1.317 1.232-2.845 1.326-4.6a1 1 0 1 1 1.997.107c-.111 2.072-.646 3.919-1.608 5.525C16.753 19.103 12.799 21 8.442 21c-2.293 0-4.315-.631-6.033-1.894-.819-.6-.326-1.9.684-1.806 1.463.138 3.151-.354 5.067-1.516a.999.999 0 0 1 1.373.339c.286.474.135 1.09-.338 1.376-.924.56-1.822.994-2.693 1.298a9.155 9.155 0 0 0 1.94.199zM3.197 8.708A.999.999 0 1 1 5.04 7.93c.218.52.568.896 1.08 1.158.492.251.687.855.437 1.348a.999.999 0 0 1-1.345.437 4.21 4.21 0 0 1-2.015-2.166zm.92 3.985a1.003 1.003 0 0 1 .352-1.373.999.999 0 0 1 1.37.352c.393.665.789 1.006 1.178 1.097a1.002 1.002 0 0 1-.45 1.952c-.986-.228-1.8-.928-2.45-2.028z" fill="#000" fill-rule="nonzero"/></svg>
                                </a>

                                <a href="<?php if(function_exists('dc_dcb_dev_content_block'))echo do_shortcode('[dcb name=social-link-instagram]'); ?>" title="" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>instagram</title><path d="M12 19a1 1 0 0 1 0 2H8a5 5 0 0 1-5-5V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5 1 1 0 0 1 0-2 3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h4zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm4.5-6a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="#000" fill-rule="nonzero"/></svg>
                                </a>

                                <a class="blog-link" href="<?php echo home_url(); ?>blog" title="Read our blog" target="_blank">
                                    <span>Read our blog</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>facebook</title><path d="M12 13h-1a1 1 0 0 1 0-2h1V8a1 1 0 0 1 1-1h3a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h2V5H5v14h7v-6z" fill="#000" fill-rule="nonzero"/></svg>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </section>

            <div class="divider-rose">
                <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
                    <g id="divider" transform="translate(0 -0.359)">
                        <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                        <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                            <g id="white" transform="translate(0.59 0.36)">
                            <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                            </g>
                        </g>
                        <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                        <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

<?php get_footer(); ?>