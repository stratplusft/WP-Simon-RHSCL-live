<?php
/**
 * The Sidebar for Happy Days Names page with widget area HD Names.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-hd-names' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-hd-names' ); ?>
	</div><!-- #secondary -->