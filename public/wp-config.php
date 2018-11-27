<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1ufHC7diCrPLnz93okvvJ/SrVS7qyoY8fzXnDXPxS8ZCrWHCeubTou0wRunwcHwUf0jwxiauYv3zWEgZn7+wfg==');
define('SECURE_AUTH_KEY',  'zMLO6NRMl8OxneH4AtPioYCBzCBOZbrB7/s6Xsz5hxES7dRMsomvyj+B8jGqllWANKK3gsqbWpVK60RlK7UM5g==');
define('LOGGED_IN_KEY',    'hw50kWzPgfyTIhtY2hwVQgB+jGKgkHFUHqMmicdutZFGMjsPBFavGJiLHSkam5oiWaSXU/aRDrZ0thClV86tJA==');
define('NONCE_KEY',        '17WukdF5pCmefim85hdznEQtUuQYr23Gd1Sr9auVx+9FPUoTY0HoDOHemGDOI05N64EkOdAo+26iouai7UqCBQ==');
define('AUTH_SALT',        'wzEjh/h9iL2OtBTiuWMDQ/PHNe7+ND+QVrEZ4MxHDappCp/Bwts0Ko0JjjBXLNtyIRPrE4BrwKd5ZdgaNxpH7A==');
define('SECURE_AUTH_SALT', '47G2PpgaYejOpjwvs97kBqVO1WgLSgTyGV4ZlxofWssCZlrWL5UzedfEfUhZ7rcBkOnrIDInXk4AKOitAa8BPQ==');
define('LOGGED_IN_SALT',   'JGiuODYhH7HOMUBmXsWB44e1tTKuZhk8n++0AMe/HO3Khi7ekuG58nUYdVKAg1V+yO/zy7/P4nxnOdmbSeAlDw==');
define('NONCE_SALT',       'BS/PnxbO2ieHim7MWRBACkY87G05g9wXBmPArybhrXEZ4uujQAZdS5DI6JERVGcmN/9Hx78NRuxBsZe3bQAawg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
