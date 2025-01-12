<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <h1 class="header-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Fleurs d'oranger & chats errants</a>
            </h1>
            <!-- Bouton du menu burger -->
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="burger-icon"></span>
                <span class="burger-icon"></span>
                <span class="burger-icon"></span>
            </button>


            <nav class="header-nav">
                <!-- Logo -->
                <p class="header-nav_open-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo en paralax dans menu.png" alt="Logo Fleurs d'oranger et chats errants">
                </p>

                <!-- Menu -->
                <ul class="menu">
                    <li class="menu-link"><a href="#story">Histoire</a></li>
                    <li class="menu-link"><a href="#characters">Personnages</a></li>
                    <li class="menu-link"><a href="#place">Lieu</a></li>
                    <li class="menu-link"><a href="#studio">Studio Koukaki</a></li>
                </ul>

                <!-- Footer link -->
                <p class="header-nav_footer-link"><a href="<?php echo esc_url(home_url('/')); ?>">STUDIO KOUKAKI</a></p>

                <!-- Image animée -->
                <div class="header-nav_imagesToAnimate">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Orchid.png" alt="Orchidée">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus.png" alt="Hibiscus">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Flower.png" alt="Fleur">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Random_Flower.png" alt="Fleur">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="Tournesol">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Kawaneko.png" alt="Kawaneko Image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jaakuna.png" alt="Jaakuna Image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Orenjiiro.png" alt="Orenjiiro Image">
                </div>
            </nav>
        </header><!-- #masthead -->