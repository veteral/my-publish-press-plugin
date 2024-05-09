<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Veteral Publish Press plugin
 * Description:       Learning about plugin development.
 * Version:           1.0.0
 * Author:            Veteral
 * Author URI:        https://github.com/veteral
 * Text Domain:       VPPP
 * Domain Path:       /languages
 */



// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die;
}

 require_once __DIR__ . '/vendor/autoload.php';

 use VPPP\App;

 /**
  * Currently plugin version.
  */
 //define( 'WPPP_PLUGIN_VERSION', '1.0.0' );


$app = new App();
$test = $app->get('test');





