<?php
/**
 * The Sidebar for Happy Days music page with widget area HD Names.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-hd-music' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-hd-music' ); ?>
	</div><!-- #secondary -->