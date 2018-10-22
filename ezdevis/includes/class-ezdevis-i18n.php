<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * @since      1.0.0
 *
 * @package    Ezdevis
 * @subpackage Ezdevis/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ezdevis
 * @subpackage Ezdevis/includes
 * @author     Zerbib Mathis <mathis.zerbib@gmail.com>
 */
class Ezdevis_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ezdevis',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
