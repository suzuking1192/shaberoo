<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '../_wp/wp-blog-header.php' );
// 1階層上のパスを取得
require_once('../_wp_path.php');
require($wpPath . '/_wp/wp-blog-header.php');