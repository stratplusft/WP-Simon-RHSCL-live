<?php
/**
 * The Sidebar for Obituaries page with widget area obit.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-obits' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-obits' ); ?>
	</div><!-- #secondary -->