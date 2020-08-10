<?php
/**
 * Load Dashicons
 *
 * {@link https://developer.wordpress.org/resource/dashicons Dashicons} is the official icon font of the WordPress admin as of 3.8. This plugin loads the Dashicon font on the entire site and for every visitor, enabling the use of Dashicons anywhere.
 *
 * @link      https://github.com/Spartelfant/load-dashicons Load Dashicons source code
 *
 * @package   Load_Dashicons
 * @author    Bart Kuijper
 * @copyright 2020 Bart Kuijper
 * @license   GPL-3.0-or-later
 * @since     2020.08.10
 *
 * @wordpress-plugin
 * Plugin Name:       Load Dashicons
 * Plugin URI:        https://github.com/Spartelfant/load-dashicons
 * Description:       <a href="https://developer.wordpress.org/resource/dashicons">Dashicons</a> is the official icon font of the WordPress admin as of 3.8. This plugin loads the Dashicon font on the entire site and for every visitor, enabling the use of Dashicons anywhere.
 * Version:           2020.08.10
 * Requires at least: 3.8
 * Tested up to:      5.5
 * Requires PHP:      7.0
 * Author:            Bart Kuijper
 * Author URI:        https://github.com/Spartelfant
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 */

// Enables strict mode.
declare( strict_types = 1 );

// This is my namespace. There are many like it, but this one is mine.
namespace Spartelfant\Load_Dashicons;

// Aborts in PhotonicInduction style if this file is called directly.
defined( 'ABSPATH' ) || die( 'Naughty&hellip; I ain&apos;t having it!' );

// Adds action to enqueue the Dashicons font at the right moment.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_dashicons' );

/**
 * Enqueues the Dashicons font on every part of the site and for every visitor.
 *
 * @since 2020.08.10
 */
function enqueue_dashicons() {
	wp_enqueue_style( 'dashicons' );
}
