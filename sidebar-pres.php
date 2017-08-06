<?php
/**
 * The Sidebar for Presidents page with widget area obit.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-pres' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-pres' ); ?>
	</div><!-- #secondary -->