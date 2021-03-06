<?php
/**
 * Add Menu Cart to menu
 *
 * Code elegantly lifted from: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
 * Edited by WPExplorer
 *
 * @package		Total
 * @subpackage	Framework/WooCommerce
 * @author		Alexander Clarke
 * @copyright	Copyright (c) 2014, Symple Workz LLC
 * @link		http://www.wpexplorer.com
 * @since		Total 1.0.0
 */

if ( ! function_exists( 'wpex_cart_widget_overlay' ) ) {
	function wpex_cart_widget_overlay() {

		// If disabled bail
		if ( ! get_theme_mod( 'woo_menu_icon', true ) ) {
			return;
		}
		
		// Do nothing if it isn't the corrent style
		if ( 'overlay' != get_theme_mod( 'woo_menu_icon_style', 'drop-down' ) ) {
			 return;
		}

		// Not needed on checkout
		if ( is_checkout() ) {
			return false;
		}
				
		// Globals & vars
		global $woocommerce;
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		
		// Not needed on cart page when items exist
		if ( is_cart() && 0 != sizeof( $cart_contents_count )) {
			return false;
		} ?>
		
		<div id="current-shop-items-overlay" class="clr">
			<div id="current-shop-items-inner" class="clr">
				<?php
				// Display WooCommerce cart
				if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
					the_widget( 'WC_Widget_Cart', 'title= ' );
				} else {
					the_widget( 'WooCommerce_Widget_Cart', 'title= ' );
				} ?>
			</div><!-- #current-shop-items-inner -->
		</div><!-- #current-shop-items-dropdown -->
		
	<?php
	}
}
add_action( 'wp_footer', 'wpex_cart_widget_overlay' );