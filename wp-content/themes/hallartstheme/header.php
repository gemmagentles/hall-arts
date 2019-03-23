<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- hall arts fonts, only work on hall arts domain, install fonts locally -->
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7003914/6833212/css/fonts.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header id="navbar-js" class="header clear" role="banner">
    <!-- black overlay for when menu opens -->
    <div class="menu-overlay-js"></div>
        <div class="header__container">



            <div class="menu-section">
                <div class="nav__hamburger-icon" id="hamburger">
                    <div class="hamburger-bar1"></div>
                    <div class="hamburger-bar2"></div>
                    <div class="hamburger-bar3"></div>
                </div>

                
                <!-- Content inside hamburger menu START -->
                <nav class="nav" role="navigation">
                    <div class="left-column">
                        <p class="vertical-text">Close</p>
                        <div class="left-column__line"></div>
                        <div class="social">
                            <div class="line"></div>

                            <a class="social__link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
                                <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook"/></svg>
                            </a>

                            <a class="social__link" title="Twitter" href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
                                <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter"/></svg>
                            </a>

                            <a class="social__link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
                                <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram"/></svg>

                                <svg class="icon"><use href="#icon-insta" xlink:href="#icon-insta"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/dark-logo.svg" alt="Hall Arts Hotel" class="logo-img">
                            </a>
                        </div>
                        <?php html5blank_nav(); ?>
                        <button class="hall-arts-button hall-arts-button__primary">
                            Book Now
                        </button>
                    </div>
                </nav>
                <!-- Content inside hamburger menu END -->

                <p class="vertical-text">Menu</p>

                <div class="social">
                    <a class="social__link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
                        <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook"/></svg>
                    </a>

                    <a class="social__link" title="Twitter" href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
                        <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter"/></svg>
                    </a>

                    <a class="social__link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
                        <svg class="social__icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram"/></svg>
                    </a>
                </div>
            </div>



            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Hall Arts Hotel" class="logo-img">
                </a>
            </div>



            <div class="book-now-button__wrapper">
                <button class="hall-arts-button hall-arts-button__primary">
                    Book Now
                </button>
            </div>
        </div>        
    </header>