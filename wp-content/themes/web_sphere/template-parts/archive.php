<?php
/**
 * Template part for displaying results in archive pages
 *
 * @package web_sphere
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive__preview' ); ?>>
    <header class="archive__preview-header">
        <div class="archive__preview-img">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php if ( has_post_thumbnail()) {
                    the_post_thumbnail( 'medium' );
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/dist/img/logo/logo.svg" alt="' . get_the_title() . '">';
                } ?>
            </a>
        </div>
        <?php the_title( '<h2 class="archive__preview-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    </header>

    <div class="archive__preview-summary">
        <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
    </div>

    <footer class="archive__preview-footer">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="archive__preview-more">
            <?php _e('Читать далее...', 'web-sphere'); ?>
        </a>
    </footer>
</article>
