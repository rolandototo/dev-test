<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <!-- Aquí podrías incluir tu logo, menú de navegación, etc. -->

        <div class="logo">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
                echo '<p>' . get_bloginfo('description') . '</p>';
            } ?>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <p><i></i>(352)374-1032</p>
            <!-- Aquí va tu menú de navegación -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
            ));
            ?>
        </nav>
    </header>