<?php
/**
 * Mai Customizer.
 *
 * This is the plugin's bootstrap file. It is responsible for providing the plugin
 * meta information that WordPress needs, preparing the environment so that it's
 * ready to execute our code and kick off our composition root (Plugin class).
 *
 * Plugin Name: Mai Customizer
 * Plugin URI:  https://wordpress.org/plugins/mai-customizer/
 * Description: The required plugin to power Mai child themes.
 * Version:     0.1.0
 * Author:      BizBudding Inc
 * Author URI:  https://bizbudding.com/
 * Text Domain: mai-customizer
 * License:     GPL-2.0-or-later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /assets/lang
 *
 * @package   BizBudding\MaiCustomizer
 * @author    BizBudding <info@bizbudding.com>
 * @license   GPL-2.0-or-later
 * @link      https://bizbudding.com/
 * @copyright 2020 BizBudding
 */

add_filter( 'mai_customizer_configs', 'mai_customizer_add_config' );
/**
 * Adds plugin path to list of Mai Customizer config directories.
 *
 * @since 1.0.0
 *
 * @param array $configs List of config directories.
 *
 * @return array
 */
function mai_customizer_add_config( $configs ) {
	$configs[] = __DIR__ . '/config';

	return $configs;
}
