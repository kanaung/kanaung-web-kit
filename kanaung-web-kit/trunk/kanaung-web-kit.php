<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.thwin.net
 * @since             1.0.0
 * @package           Kanaung_Web_Kit
 *
 * @wordpress-plugin
 * Plugin Name:       Kanaung Web Kit
 * Plugin URI:        https://github.com/kanaung/kanaung-web-kit
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sithu Thwin
 * Author URI:        http://www.thwin.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kanaung-web-kit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-kanaung-web-kit-activator.php
 */
function activate_kanaung_web_kit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kanaung-web-kit-activator.php';
	Kanaung_Web_Kit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-kanaung-web-kit-deactivator.php
 */
function deactivate_kanaung_web_kit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kanaung-web-kit-deactivator.php';
	Kanaung_Web_Kit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_kanaung_web_kit' );
register_deactivation_hook( __FILE__, 'deactivate_kanaung_web_kit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-kanaung-web-kit.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_kanaung_web_kit() {

	$plugin = new Kanaung_Web_Kit();
	$plugin->run();

}
run_kanaung_web_kit();
