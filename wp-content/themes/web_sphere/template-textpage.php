<?php
/**
 * Template name: Text page template
 */

get_header();
?>

    <div class="container text-page">
        <h1 class="header-1"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

<?php

get_footer();
