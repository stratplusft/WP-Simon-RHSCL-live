<?php
/**
 * The Sidebar for Happy Days 50s page with widget area HD Names.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-hd-50s' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-hd-50s' ); ?>
	</div><!-- #secondary -->