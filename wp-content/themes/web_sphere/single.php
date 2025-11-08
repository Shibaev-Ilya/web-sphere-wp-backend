<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package web_sphere
 */

get_header();
?>

    <div class="container container_sidebar">

        <?php
        while ( have_posts() ) :
            echo '<div class="single-post__wrapper">';
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation(
                    array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'web_sphere' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'web_sphere' ) . '</span> <span class="nav-title">%title</span>',
                    )
            );
            echo '</div>';
        endwhile;
        echo '<div class="single-post__sidebar">';
        get_sidebar();
        echo '</div>';
        ?>

    </div>

<?php
get_footer();
