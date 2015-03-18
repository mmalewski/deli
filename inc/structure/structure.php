<?php
/**
 * Book Store structural functions
 *
 * @package book store
 */

/**
 * Primary navigation wrapper
 * @return void
 */
function bs_primary_navigation_wrapper() {
	echo '<section class="bs-primary-navigation">';
}

/**
 * Primary navigation wrapper close
 * @return void
 */
function bs_primary_navigation_wrapper_close() {
	echo '</section>';
}

/**
 * Content wrapper
 * @return void
 */
function bs_content_wrapper() {
	echo '<div class="bs-content-wrapper">';
}

/**
 * Content wrapper close
 * @return void
 */
function bs_content_wrapper_close() {
	echo '</div>';
}

/**
 * Products per page
 * @return int products to display per page
 */
function bs_products_per_page( $per_page ) {
	$per_page = 12;
	return intval( $per_page );
}