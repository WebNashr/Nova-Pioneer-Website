<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="; initial-scale=1.0; maximum-scale=1.0;">
        <meta name="description" content="<?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>">
        <meta http-equiv="cleartype" content="on">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
            <!-- page-header -->
        <header class="page-header"  <?php if(is_admin_bar_showing()): echo 'style="top:32px;"'; endif; ?>>
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
                <a href="<?php echo home_url(); ?>" class="logo header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg" alt="">
                </a>
                <!-- start navigation -->
                <?php wp_nav_menu( array(
                    'menu' => 'Top Menu',
                    'menu_class' => 'menu menu-main',
                    'walker' => new NovaPioneer\TopMenuWalker,
                    'items_wrap' => '<nav role="navigation" id="%1$s" class="%2$s">%3$s</nav>',
                    'theme_location' => 'novap-header-menu',
                    'container' => ''
                ) ); ?>

                <!-- end navigation -->

                <a href="<?php echo site_url('/'); ?>" class="button button-small button-primary header-apply">Apply now</a>
            </section>
        </header>
        <!-- end page-header -->
        <div class="body-container"> <!-- start body-container -->
            <!-- start content -->
            <main role="main">