<?php

// Charge les styles et scripts du thème
add_action('wp_enqueue_scripts', 'foce_child_enqueue_assets');
function foce_child_enqueue_assets()
{
    // Charge le style parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Charge le style principal du thème enfant
    wp_enqueue_style(
        'foce-child-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array('parent-style'), // Dépend du style parent
        '1.0'
    );

    // Charge le script principal du thème enfant
    wp_enqueue_script(
        'foce-child-main-script',
        get_stylesheet_directory_uri() . '/assets/js/scripts.js',
        array(), // Pas de dépendance
        '1.0',
        true // Charge dans le footer
    );

    // Charge le script SwiperJS
    wp_enqueue_script(
        'swiper-js',
        'https://unpkg.com/swiper/swiper-bundle.min.js', 
        array(), 
        '1.0', 
        true
    );

    // Charge un fichier JS personnalisé pour initialiser Swiper
    wp_enqueue_script(
        'custom-swiper',
        get_stylesheet_directory_uri() . '/assets/js/custom-swiper.js',
        array('swiper-js'),
        '1.0',
        true
    );
}

// Gérer les options du Customizer
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value;
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
