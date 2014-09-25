<?php
/**
 * @package WP_Taxonomy_Util
 *
 * @wordpress-plugin
 * Plugin Name: WP Taxonomy Util
 * Plugin URI: https://github.com/manovotny/wp-taxonomy-util
 * Description: A taxonomy utility for WordPress.
 * Version: 1.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /TRANSLATIONS_PATH
 * Text Domain: TRANSLATIONS_DOMAIN
 * GitHub Plugin URI: https://github.com/manovotny/wp-taxonomy-util
 */


/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';