<?php
/**
 * The Sidebar for Where are they now page with widget area where.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-where' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-where' ); ?>
	</div><!-- #secondary -->