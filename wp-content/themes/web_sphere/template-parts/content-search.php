<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web_sphere
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('search-result__item'); ?>>
    <a href="<?php echo esc_url( get_permalink()) ?>">
        <?php the_title( '<h2 class="header-3">', '</h2>' ); ?>
        <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
    </a>
</div><!-- #post-<?php the_ID(); ?> -->
