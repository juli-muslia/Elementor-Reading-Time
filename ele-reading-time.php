<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://julianmuslia.com
 * @since             1.0.0
 * @package           Ele_Reading_Time
 *
 * @wordpress-plugin
 * Plugin Name:       Elementor Reading Time
 * Plugin URI:        https://julianmuslia.com
 * Description:       This plugin adds a reading time Dynamic Tag for Elementor. 
 * Version:           1.0.0
 * Author:            Julian Muslia
 * Author URI:        https://julianmuslia.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ele-reading-time
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
define( 'ELE_READING_TIME_VERSION', '1.0.0' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/class-ele-reading-time.php' );