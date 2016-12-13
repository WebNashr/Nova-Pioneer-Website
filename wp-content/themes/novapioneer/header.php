<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="; initial-scale=1.0; maximum-scale=1.0;">
        <meta name="description" content="<?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>">
        <meta http-equiv="cleartype" content="on">
        <script src="https://use.typekit.net/yzd5wlt.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

            <!-- page-header -->
        <header class="page-header">
            <section class="header-section header-section-aux">
                <div class="select-country">
                    <span class="country show">
                        <span class="flag-icon flag-icon-za"></span>
                        <span class="text">Nova Pioneer South Africa</span>
                    </span>
                    <span class="country hide">
                        <span class="flag-icon flag-icon-ke"></span>
                        <span class="text">Nova Pioneer Kenya</span>
                    </span>
                </div>

                <form action="" class="header-search">
                    <fieldset>
                        <input type="text">
                        <input type="submit">
                        <button class="search-icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="18px" height="18px" viewBox="3.5 0.5 18 18" enable-background="new 3.5 0.5 18 18" xml:space="preserve">
                                <circle fill="none" stroke="#FFFAE1" stroke-width="2" stroke-miterlimit="10" cx="10.5" cy="7.5" r="6"/>
                                <line fill="none" stroke="#FFFAE1" stroke-width="2" stroke-miterlimit="10" x1="20.531" y1="17.531" x2="14.5" y2="11.5"/>
                            </svg>
                        </button>
                        <button class="search-toggle">
                            <span class="search-toggle-icon magnify open">⚲</span>
                            <span class="search-toggle-icon cross">×</span>
                        </button>
                    </fieldset>
                </form>
            </section>

            <section class="header-section header-section-main">
                <a href="index.html" title="" class="logo header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg" alt="">
                </a>

                <nav role="navigation" class="menu menu-main">    
                    <a href="#" class="menu-item menu-item-main" title="">About</a>
                    <a href="#" class="menu-item  menu-item-main menu-item-current" title="">Our Schools</a>
                    <a href="#" class="menu-item menu-item-main" title="">Learning</a>
                    <a href="#" class="menu-item menu-item-main" title="">Admissions</a>
                    <a href="#" class="menu-item menu-item-main" title="">Meet the students</a>
                    <a href="#" class="menu-item menu-item-main" title="">Careers</a>
                </nav>

                <a href="#" class="button button-small button-primary header-apply" title="">Apply now</a>
            </section>
        </header>
        <!-- end page-header -->
        <div class="body-container"> <!-- start body-container -->
            <!-- start content -->
            <main role="main">