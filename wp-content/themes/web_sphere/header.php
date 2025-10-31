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
            <a class="header__logo" href="<?php echo esc_url(home_url('/')) ?>">
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
                            'container' => false,
                            'menu_class' => 'header__menu-wrap',
                            'depth' => 1,
                    )
            ); ?>
            <button class="header__button simple-button js-open-modal" data-modal-id="callback">
                <span><?php esc_html_e('Обсудить проект', 'web_sphere') ?></span>
            </button>
        </nav>
    </div>
</header>

<main class="main">
