<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web_sphere
 */

get_header();
?>

    <div class="container archive-page">

        <?php if ( have_posts() ) : ?>

            <?php the_archive_title( '<h1 class="header-1">', '</h1>' ); ?>

            <?php
            echo '<div class="archive__wrapper">';
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/archive', get_post_type() );
            endwhile;
            echo '</div>';
            echo '<div class="archive__pagination">';
            the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Предыдущая', 'web-sphere'),
                    'next_text' => __('Следующая', 'web-sphere'),
                    'screen_reader_text' => __('Навигация по страницам', 'web-sphere'),
            ));
            echo '</div>';
        else :
            echo '<div class="archive__wrapper archive__wrapper_empty">';
            get_template_part( 'template-parts/content', 'none' );
            echo '<div>';
        endif;
        ?>

    </div>

<?php
//get_sidebar();
get_footer();
