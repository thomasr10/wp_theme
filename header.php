<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?= get_template_directory_uri()?>/img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <nav id="pwa">
            <div id="pwa-icons">
                <a href="<?= home_url() ?>"><i class="fa-solid fa-house"></i></a>
                <a href="<?= get_permalink( get_option( 'page_for_posts' ) )?>"><i class="fa-solid fa-suitcase"></i></a>
                <a href="<?= get_permalink( get_page_by_path( 'contact' ) ) ?>"><i class="fa-solid fa-message"></i></a>
            </div>
        </nav> 
    <?php 
    wp_nav_menu( array(
        'theme_location' => 'primary_menu', // Do not fall back to first non-empty menu.
        'container' => 'nav',
        'container_class' => 'desktop-menu'
    ) );
    ?>
    <div id="color-mode"><i class="fa-solid fa-moon"></i></div>
    </header>