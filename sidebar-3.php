<?php
/**
 * The Sidebar type 3 containing the main widget areas.
 *
 * @package Simone Child
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #secondary -->