<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <?php if (is_front_page()): ?>
            <title>Accueil | <?php bloginfo( 'name' ); ?></title>
        <?php else: ?>
            <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
        <?php endif; ?>
        <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

