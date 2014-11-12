<?php
/**
 * Ajency Page Builder
 *
 * A simple page builder for wordpress
 *
 * @package   ajency-page-builder
 * @author    Team Ajency <team@ajency.in>
 * @license   GPL-2.0+
 * @link      http://ajency.in
 * @copyright 11-12-2014 Ajency.in
 *
 * @wp-plugin
 * Plugin Name: Ajency Page Builder
 * Plugin URI:  http://ajency.in
 * Description: A simple page builder for wordpress
 * Version:     0.1.0
 * Author:      Team Ajency
 * Author URI:  http://ajency.in
 * Text Domain: ajency-page-builder-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

require_once(plugin_dir_path(__FILE__) . "AjencyPageBuilder.php");

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook(__FILE__, array("AjencyPageBuilder", "activate"));
register_deactivation_hook(__FILE__, array("AjencyPageBuilder", "deactivate"));

AjencyPageBuilder::get_instance();
