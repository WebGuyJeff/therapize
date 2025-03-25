<?php
namespace BigupWeb\Therapize;

/**
 * Therapize Entry.
 *
 * @package therapize
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

// Development debugging.
$enable_debug = true;

// Set global constants.
define( 'THERAPIZE_DEBUG', $enable_debug );
define( 'THERAPIZE_PATH', trailingslashit( __DIR__ ) );
define( 'THERAPIZE_URL', trailingslashit( get_site_url( null, strstr( __DIR__, '/wp-content/' ) ) ) );

// Register namespaced autoloader.
$namespace = 'BigupWeb\\Therapize\\';
$root      = THERAPIZE_PATH . 'classes/';
require_once $root . 'autoload.php';

// Setup the plugin.
$Theme_Setup = new Theme_Setup();
$Theme_Setup->all();
