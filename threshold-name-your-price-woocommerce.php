<?php
/*
Plugin Name: WooCommerce - Name your own price
Plugin URI: http://sterlingdev.net/name-your-price
Description: Allows users to set their own price (can also be used for donations) 
Version: 1.8
Author: Cole Sterling
Author URI: http://sterlingdev.net

*/

/*
 * Plugin updated and forked from the plugin below by Sean Voss
 * Original plugin has not been updated for ~4 years as of 2018-1-12
 * Title   : WooCommerce Name your own price
 * Author  : Sean Voss
 * Url     : http://blog.seanvoss.com/product/shatner
 * License : http://github.com/seanvoss/shatner/LICENSE
 */

function sv_name_price_wc_init() 
{


   // Order of Plugin Loading Requires this line, should not be necessary
   require_once (dirname(__FILE__) .'/../woocommerce/woocommerce.php');

    /**
     * Check if WooCommerce is active
     **/
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        include_once('name_price_wc_plugin.php');
    }
}

add_action('plugins_loaded', 'sv_name_price_wc_init', 10);
