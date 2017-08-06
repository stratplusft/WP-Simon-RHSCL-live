<?php
/**
 * The Sidebar for about page containing the main widget areas.
 *
 * @package Simone Child
 */

if ( ! is_active_sidebar( 'sidebar-about' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-about' ); ?>
	</div><!-- #secondary -->