<?php

/**
 * Plugin Name: SMS/Order Notification|OTP verification|Passwordless login
 * Plugin URI: http://miniorange.com/miniorange-woocommerce-otp-plugin
 * Description: Email & SMS OTP Verification for all WooCommerce forms. WooCommerce SMS Notification. PasswordLess Login. 24/7 support.
 * Version: 1.0.0
 * Author: miniOrange
 * Author URI: http://miniorange.com
 * Text Domain: miniorange-otp-verification
 * Domain Path: /lang
 * WC requires at least: 2.0.0
 * WC tested up to: 5.6.0
 * License: MIT/Expat
 */

use OTP\MoOTP;

if(! defined( 'ABSPATH' )) exit;
define('MOV_PLUGIN_NAME', plugin_basename(__FILE__));
$dirName = substr(MOV_PLUGIN_NAME,0,strpos(MOV_PLUGIN_NAME,"/"));
define("MOV_NAME",$dirName);
include '_autoload.php';
MoOTP::instance(); //initialize the main class
