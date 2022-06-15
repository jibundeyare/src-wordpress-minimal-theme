<?php

/**
 * autoloading avec composer
 */

require get_template_directory() . '/vendor/autoload.php';

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set( 'Europe/Paris' );
// choix du réglage régional
setlocale( LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1' );

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // affiche la liste des feuilles de style qui seront chargées
    // $wp_styles = wp_styles();
    // var_dump($wp_styles->queue);
    // affiche des infos détaillées sur chaque feuille de style
    // foreach( $wp_styles->queue as $handle ) {
    //     var_dump($wp_styles->registered[$handle]);
    // }

    // chargement de la feuille de style du thème
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/css/main.css', [] );
}

// demande à Wordpress de lancer la fonction `my_theme_enqueue_styles` durant le démarrage de l'application
// PHP_INT_MAX est le niveau de priorité, plus ce nombre est grand et moins la priorité est élevée
// le niveau de priorité par défaut est 10
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_scripts() {
    // affiche la liste des scripts qui seront chargées
    // $wp_scripts = wp_scripts();
    // var_dump($wp_scripts->queue);
    // affiche des infos détaillées sur chaque script
    // foreach( $wp_scripts->queue as $handle ) {
    //     var_dump($wp_scripts->registered[$handle]);
    // }

    // chargement du script JS du thème
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri().'/js/main.js', [] );
}

// demande à Wordpress de lancer la fonction `my_theme_enqueue_scripts` durant le démarrage de l'application
// PHP_INT_MAX est le niveau de priorité, plus ce nombre est grand et moins la priorité est élevée
// le niveau de priorité par défaut est 10
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts', PHP_INT_MAX );

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5' );
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );

