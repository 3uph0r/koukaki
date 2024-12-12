<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Charger le style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Charger les styles et scripts du thème enfant
add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');
function foce_child_enqueue_scripts()
{
    // Charger le CSS principal du thème enfant
    wp_enqueue_style(
        'foce-child-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array('parent-style'), // Dépend du style parent
        '1.0'
    );

    // Charger le JavaScript principal du thème enfant
    wp_enqueue_script(
        'foce-child-main-script',
        get_stylesheet_directory_uri() . '/assets/js/scripts.js',
        array('jquery'), // Dépend de jQuery
        '1.0',
        true
    );
}

// Gérer les options du Customizer pour le thème enfant
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // Empêche la mise à jour des mods du thème enfant
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
