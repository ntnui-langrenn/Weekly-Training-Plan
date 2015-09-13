<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://org.ntnu.no/langrenn
 * @since             1.0.0
 * @package           Weekly_Training_Plan
 *
 * @wordpress-plugin
 * Plugin Name:       Weekly Training plan
 * Plugin URI:        http://example.com/weekly-training-plan-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            NTNUI Langrenn
 * Author URI:        http://org.ntnu.no/langrenn
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       weekly-training-plan
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-weekly-training-plan-activator.php
 */
function activate_weekly_training_plan() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weekly-training-plan-activator.php';
	Weekly_Training_Plan_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-weekly-training-plan-deactivator.php
 */
function deactivate_weekly_training_plan() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weekly-training-plan-deactivator.php';
	Weekly_Training_Plan_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_weekly_training_plan' );
register_deactivation_hook( __FILE__, 'deactivate_weekly_training_plan' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-weekly-training-plan.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_weekly_training_plan() {

	$plugin = new Weekly_Training_Plan();
	$plugin->run();

}
run_weekly_training_plan();
