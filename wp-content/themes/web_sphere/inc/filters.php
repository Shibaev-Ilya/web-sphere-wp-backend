<?php
/**
 * Remove prefix (Category:) from the archive title
 */
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});
