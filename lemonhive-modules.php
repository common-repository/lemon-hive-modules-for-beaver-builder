<?php
/**
 * Plugin Name: Lemon Hive Modules
 * Plugin URI: https://addons.lemonhive.com/
 * Description: Lemon Hive Modules for for Beaver Builder modules.
 * Version: 1.0.1
 * Requires at least: 4.9
 * Tested up to: 5.8
 * Requires PHP: 5.6
 * Author: Lemon Hive
 * Author URI: https://www.lemonhive.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lh
 * Domain Path:       /languages
 */

define( 'LH_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'LH_MODULE_URL', plugins_url( '/', __FILE__ ) );


require_once LH_MODULE_DIR . 'classes/class-lh-custom-modules-loader.php';
