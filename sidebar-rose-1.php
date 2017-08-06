<?php
/**
 * The Sidebar for Rose Tinted page with widget area Rose 1.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-rose-1' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-rose-1' ); ?>
	</div><!-- #secondary -->