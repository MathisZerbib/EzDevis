<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * @since             1.0.0
 * @package           Ezdevis
 *
 * @wordpress-plugin
 * Plugin Name:       EzDevis
 * Plugin URI:        https://www.mat-zer.fr/site.com
 * Description:       This Plugin can make contact form and send it threw WordPress to an defined Email. 
 * Version:           1.0.0
 * Author:            Zerbib Mathis
 * Author URI:        https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ezdevis
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ezdevis-activator.php
 */
function activate_ezdevis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ezdevis-activator.php';
	Ezdevis_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ezdevis-deactivator.php
 */
function deactivate_ezdevis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ezdevis-deactivator.php';
	Ezdevis_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ezdevis' );
register_deactivation_hook( __FILE__, 'deactivate_ezdevis' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ezdevis.php';




/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ezdevis() {

	$plugin = new Ezdevis();
	$plugin->run();

}
run_ezdevis();
