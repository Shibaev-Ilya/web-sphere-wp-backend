<?php
/**
 * The header for our theme
 *
 * This is the template that displays all the <head> section and everything up until <main class="main">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_sphere
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="header">
    <div class="container header__container">
        <?php if ( is_front_page() ) { ?>
            <div class="header__logo">
                <svg class="header__logo-img">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#logo"></use>
                </svg>
                <span class="header__logo-text">Web Sphere</span>
            </div>
        <?php } else { ?>
            <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ) ?>">
                <svg class="header__logo-img">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#logo"></use>
                </svg>
                <span class="header__logo-text">Web Sphere</span>
            </a>
        <?php } ?>

        <button class="header__burger js-burger" aria-label="menu">
            <span class="icon"></span>
        </button>
        <nav class="header__menu js-menu">
            <?php wp_nav_menu(
                    array(
                            'theme_location' => 'header-menu',
                            'container'      => false,
                            'menu_class'     => 'header__menu-wrap',
                            'depth'          => 1,
                    )
            ); ?>
            <button class="header__button simple-button js-open-modal" data-modal-id="callback">
                <span><?php esc_html_e( 'Обсудить проект', 'web_sphere' ) ?></span>
            </button>
            <div class="header__links">
                <?php if ( get_theme_mod( 'site_social_telegram' ) ) { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'site_social_telegram' ) ) ?>">
                        <span class="visually-hidden">Telegram</span>
                        <svg width="80" height="80" viewBox="-1 -1  18 18" xmlns="http://www.w3.org/2000/svg"
                             class="bi bi-telegram">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                    </a>
                <?php }
                if ( get_theme_mod( 'site_social_whatsapp' ) ) { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'site_social_whatsapp' ) ) ?>">
                        <span class="visually-hidden">WhatsApp</span>
                        <svg width="80" height="80" viewBox="0 0 1024 1024" class="icon"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8-10.1-3.8-17.5-5.6-24.8 5.6-7.4 11.1-28.4 35.8-35 43.3-6.4 7.4-12.9 8.3-23.8 2.8-64.8-32.4-107.3-57.8-150-131.1-11.3-19.5 11.3-18.1 32.4-60.2 3.6-7.4 1.8-13.7-1-19.3-2.8-5.6-24.8-59.8-34-81.9-8.9-21.5-18.1-18.5-24.8-18.9-6.4-.4-13.7-.4-21.1-.4-7.4 0-19.3 2.8-29.4 13.7-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5 70 30.2 97.4 32.8 132.4 27.6 21.3-3.2 65.2-26.6 74.3-52.5 9.1-25.8 9.1-47.9 6.4-52.5-2.7-4.9-10.1-7.7-21-13z"/>
                            <path d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9-53.3 22.8-101.1 55.2-142 96.5-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3 53.5-22.3 101.6-54.3 142.8-95.2 41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"/>
                        </svg>
                    </a>
                <?php }
                if ( get_theme_mod( 'site_email' ) ) { ?>
                    <a class="header__email"
                       href="mailto:<?php echo get_theme_mod( 'site_email' ) ?>"><?php echo get_theme_mod( 'site_email' ) ?></a>
                <?php } ?>
            </div>
        </nav>
    </div>
</header>

<main class="main">
