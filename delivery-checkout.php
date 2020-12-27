<?php
/*
Plugin Name: Lieferzeitangabe Checkout
Plugin URI: https://wagner-remote.de
Description: Lieferzeitangabe im CHeckout wählbar
Version: 1.0
Author: Tim Wagner | Wagner-Remote
Author URI: https://wagner-remote.de
Text Domain: delivery-checkout
Domain Path: /languages/
Requires at least: 5.0
Tested up to: 5.3.2
WC requires at least: 3.0.0
WC tested up to: 4.0.1
*/

defined('ABSPATH') or die('No script kiddies please!');

require 'inc/checkout.php';
require 'inc/options.php';

register_activation_hook( __FILE__, function() {
    $params = get_option('delivery-checkout');
    if (!$params) {
        update_option('delivery-checkout', array(
            'start' => 15,
            'end' => 21,
            'delay' => 30,
            'comment' => ''
        ));
    }
});
