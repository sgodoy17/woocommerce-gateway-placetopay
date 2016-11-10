<?php
/**
 * Plugin Name: WooCommerce PlacetoPay Gateway
 * Plugin URI:  https://www.placetopay.com/component/placetopay-for-woocommerce/
 * Description: Adds Place to Pay Payment Gateway to Woocommerce e-commerce plugin
 * Author:      PlacetoPay
 * Author URI:  https://www.placetopay.com/
 * Developer:   Cristian Salazar
 * Version:     2.0.0
 *
 *
 * @package PlacetoPay/WC_Gateway_PlacetoPay
 *
 * @author Soporte <soporte@placetopay.com>
 * @copyright (c) 2013-2016 EGM Ingenieria sin fronteras S.A.S.
 * @version 2.0.0
 */

if( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * Return instance of \PlacetoPay\WC_Gateway_PlacetoPay
 *
 * @return \PlacetoPay\WC_Gateway_PlacetoPay
 */
function wc_gateway_placetopay() {
    // carga las traducciones de Place to Pay
    load_plugin_textdomain( 'woocommerce-gateway-placetopay', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

    require_once( __DIR__ . '/vendor/autoload.php' );
    return \PlacetoPay\WC_Gateway_PlacetoPay::getInstance( '2.0.0', __FILE__ );
}

add_action( 'plugins_loaded', 'wc_gateway_placetopay', 0 );