<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package web_sphere
 */

get_header();
?>

    <section class="error-404 not-found">
        <div class="container">
            <h1 class="header-3" style="text-align: center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'web_sphere' ); ?></h1>
            <br>
            <p class="header-3" style="font-size: 11rem; text-align: center">404</p>
            <br>
            <p><a class="simple-button" style="display: block; margin: 5rem auto" href="<?php echo esc_url(home_url('/')) ?>"><?php esc_html_e( 'Go back to the main page', 'web_sphere' ); ?></a></p>
        </div>
    </section>

<?php
get_footer();
