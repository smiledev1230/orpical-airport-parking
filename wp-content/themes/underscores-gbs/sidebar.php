<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ugwps
 */

if ( ! is_active_sidebar( 'footer-left-widget' ) ) {
	return;
}
?>


	<?php dynamic_sidebar( 'footer-left-widget' ); ?>

