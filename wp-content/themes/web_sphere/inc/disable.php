<?php

/**
 * Disable RSS Feeds
 */
function disable_rss_feeds() {
	wp_die( __( 'No feed available, please visit the <a href="' . esc_url( home_url( '/' ) ) . '">homepage</a>!' ) );
}

add_action( 'do_feed', 'disable_rss_feeds', 1 );
add_action( 'do_feed_rdf', 'disable_rss_feeds', 1 );
add_action( 'do_feed_rss', 'disable_rss_feeds', 1 );
add_action( 'do_feed_rss2', 'disable_rss_feeds', 1 );
add_action( 'do_feed_atom', 'disable_rss_feeds', 1 );
add_action( 'do_feed_rss2_comments', 'disable_rss_feeds', 1 );
add_action( 'do_feed_atom_comments', 'disable_rss_feeds', 1 );

/**
 * Remove RSS feed links from header
 */
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

/**
 * Disable emoji
 */
function web_sphere_disable_emoji_styles() {
	// Удаляем стили эмодзи
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}

add_action( 'init', 'web_sphere_disable_emoji_styles' );
