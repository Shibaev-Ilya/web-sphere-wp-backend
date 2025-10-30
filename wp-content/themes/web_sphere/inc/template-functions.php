<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package web_sphere
 */

function web_sphere_show_meta() {
	echo '<meta name="theme-color" content="#fff">';
	echo '<meta name="apple-mobile-web-app-status-bar-style" content="white">';
	echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/dist/img/favicons/favicon.ico" type="image/x-icon">';
	echo '<link rel="icon" sizes="16x16" href="' . get_template_directory_uri() . '/dist/img/favicons/favicon-16x16.png" type="image/png">';
	echo '<link rel="icon" sizes="32x32" href="' . get_template_directory_uri() . '/dist/img/favicons/favicon-32x32.png" type="image/png">';
	echo '<link rel="apple-touch-icon-precomposed" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-precomposed.png">';
	echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon.png">';
	echo '<link rel="apple-touch-icon" sizes="57x57" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-57x57.png">';
	echo '<link rel="apple-touch-icon" sizes="60x60" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-60x60.png">';
	echo '<link rel="apple-touch-icon" sizes="72x72" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-72x72.png">';
	echo '<link rel="apple-touch-icon" sizes="76x76" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-76x76.png">';
	echo '<link rel="apple-touch-icon" sizes="114x114" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-114x114.png">';
	echo '<link rel="apple-touch-icon" sizes="120x120" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-120x120.png">';
	echo '<link rel="apple-touch-icon" sizes="144x144" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-144x144.png">';
	echo '<link rel="apple-touch-icon" sizes="152x152" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-152x152.png">';
	echo '<link rel="apple-touch-icon" sizes="167x167" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-167x167.png">';
	echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-180x180.png">';
	echo '<link rel="apple-touch-icon" sizes="1024x1024" href="' . get_template_directory_uri() . '/dist/img/favicons/apple-touch-icon-1024x1024.png">';
}
