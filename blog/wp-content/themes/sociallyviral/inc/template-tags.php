<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package SociallyViral
 */

if ( ! function_exists( 'sociallyviral_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function sociallyviral_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	// $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	// $next     = get_adjacent_post( false, '', false );

	// if ( ! $next && ! $previous ) {
	// 	return;
	// }
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<!--Start Pagination-->
        <?php $sociallyviral_nav_type = get_theme_mod('sociallyviral_pagination_position');
        if (!empty($sociallyviral_nav_type)) {
			$sociallyviral_pagination = get_the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( 'Newer', 'sociallyviral' ),
			    'next_text' => __( 'Older', 'sociallyviral' ),
			) );
			echo $sociallyviral_pagination;
        } else { ?>
			<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'sociallyviral' ); ?></h2>
			<div class="pagination nav-links">
				<?php if ( get_next_posts_link() ) : ?>
					<div class="nav-previous"><?php next_posts_link( __( '<i class="demo-icon icon-angle-double-left"></i> Previous', 'sociallyviral' ) ); ?></div>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<div class="nav-next"><?php previous_posts_link( __( 'Next <i class="demo-icon icon-angle-double-right"></i>', 'sociallyviral' ) ); ?></div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</nav><!--End Pagination-->
	<?php
}
endif;

if ( ! function_exists( 'sociallyviral_archive_title' ) ) :
/**
 * Shim for `sociallyviral_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
function sociallyviral_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		$title = sprintf( __( 'Category: %s', 'sociallyviral' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Tag: %s', 'sociallyviral' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Author: %s', 'sociallyviral' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Year: %s', 'sociallyviral' ), get_the_date( _x( 'Y', 'yearly archives date format', 'sociallyviral' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Month: %s', 'sociallyviral' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'sociallyviral' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Day: %s', 'sociallyviral' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'sociallyviral' ) ) );
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( __( 'Archives: %s', 'sociallyviral' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%1$s: %2$s', 'sociallyviral' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = __( 'Archives', 'sociallyviral' );
	}

	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;
	}
}
endif;

if ( ! function_exists( 'sociallyviral_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function sociallyviral_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );

	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function sociallyviral_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'sociallyviral_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'sociallyviral_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so sociallyviral_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so sociallyviral_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in sociallyviral_categorized_blog.
 */
function sociallyviral_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'sociallyviral_categories' );
}
add_action( 'edit_category', 'sociallyviral_category_transient_flusher' );
add_action( 'save_post',     'sociallyviral_category_transient_flusher' );
