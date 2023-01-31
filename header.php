<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">

        <!-- Main Menu Location -->
        <?php
        wp_nav_menu(array(
            'theme_location'   =>  'menu-main',
            'container'        =>  'nav',
            'container_class'  =>  'menu-container',
            'menu_class'       =>  'main-menu',
        ));
        ?>

        

    </header>


    <div id="primary" class="content-area">
        <main id="main" class="site-main">