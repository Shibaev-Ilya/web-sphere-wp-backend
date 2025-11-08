<?php

function web_sphere_breadcrumbs() {
	$breadcrumbs = array();
	$separator   = ' ○ ';
	$position    = 1;

	// Main page
	$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="' . home_url() . '"><span itemprop="name">' . __( 'Главная', 'web_sphere' ) . '</span></a><meta itemprop="position" content="' . $position . '" /></li>';
	$position ++;

	// for Common WordPress pages
	if ( is_category() || is_single() || is_tag() ) {
		if ( is_category() || is_tag() ) {
			$term          = get_queried_object();
			$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . esc_html( $term->name ) . '</span><meta itemprop="position" content="' . $position . '" /></li>';
		} elseif ( is_single() ) {
			$post_type = get_post_type();

			if ( $post_type == 'post' ) {
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					$main_category     = $categories[0];
					$parent_categories = get_ancestors( $main_category->term_id, 'category' );
					$parent_categories = array_reverse( $parent_categories );

					foreach ( $parent_categories as $parent_id ) {
						$parent_category = get_category( $parent_id );
						$breadcrumbs[]   = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_category_link( $parent_id ) ) . '"><span itemprop="name">' . esc_html( $parent_category->name ) . '</span></a><meta itemprop="position" content="' . $position . '" /></li>';
						$position ++;
					}

					$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_category_link( $main_category->term_id ) ) . '"><span itemprop="name">' . esc_html( $main_category->name ) . '</span></a><meta itemprop="position" content="' . $position . '" /></li>';
					$position ++;
				}
			} else {
				$post_type_object = get_post_type_object( $post_type );
				if ( $post_type_object && $post_type_object->has_archive ) {
					$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_post_type_archive_link( $post_type ) ) . '"><span itemprop="name">' . esc_html( $post_type_object->labels->name ) . '</span></a><meta itemprop="position" content="' . $position . '" /></li>';
					$position ++;
				}
			}

			$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . esc_html( get_the_title() ) . '</span><meta itemprop="position" content="' . $position . '" /></li>';
		}
	} elseif ( is_page() ) {
		global $post;
		if ( $post->post_parent ) {
			$ancestors = get_post_ancestors( $post->ID );
			$ancestors = array_reverse( $ancestors );
			foreach ( $ancestors as $ancestor ) {
				$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="' . esc_url( get_permalink( $ancestor ) ) . '"><span itemprop="name">' . esc_html( get_the_title( $ancestor ) ) . '</span></a><meta itemprop="position" content="' . $position . '" /></li>';
				$position ++;
			}
		}
		$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . esc_html( get_the_title() ) . '</span><meta itemprop="position" content="' . $position . '" /></li>';
	} elseif ( is_search() ) {
		$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . __( 'Результаты поиска', 'web_sphere' ) . ': "' . esc_html( get_search_query() ) . '"</span><meta itemprop="position" content="' . $position . '" /></li>';
	} elseif ( is_404() ) {
		$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">404</span><meta itemprop="position" content="' . $position . '" /></li>';
	} elseif ( is_archive() ) {
		if ( is_post_type_archive() ) {
			$post_type        = get_query_var( 'post_type' );
			$post_type_object = get_post_type_object( $post_type );
			if ( $post_type_object ) {
				$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . esc_html( $post_type_object->labels->name ) . '</span><meta itemprop="position" content="' . $position . '" /></li>';
			}
		} else {
			$breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">' . __( 'Архив', 'web_sphere' ) . '</span><meta itemprop="position" content="' . $position . '" /></li>';
		}
	}

	echo '<ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">' . implode( $separator, $breadcrumbs ) . '</ul>';
}
