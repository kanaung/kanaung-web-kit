<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.thwin.net
 * @since      1.0.0
 *
 * @package    Kanaung_Web_Kit
 * @subpackage Kanaung_Web_Kit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Kanaung_Web_Kit
 * @subpackage Kanaung_Web_Kit/includes
 * @author     Sithu Thwin <sithu@thwin.net>
 */
class Kanaung_Web_Kit_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'kanaung-web-kit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
