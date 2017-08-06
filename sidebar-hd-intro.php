<?php
/**
 * The Sidebar for Happy Days Intro page with widget area HD Intro.
 *
 * @package simone-child
 */

if ( ! is_active_sidebar( 'sidebar-hd-intro' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-hd-intro' ); ?>
	</div><!-- #secondary -->