<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'M5VZWOO7mAVxyjfjFxY6Vh3aRP7IdGikzn/1W+SJgtEx3t9tL9QgzEMjbHNvwX0a7Z8gAk3Vvr5JwcfZoTHnRg==');
define('SECURE_AUTH_KEY',  'CVluC2+NLBtWJIybhFJHQPzCvzA+84PzRLVB8O9N2aC3Givisw/8XA+v6vfJ0jzORJA1O/Ey20nc4ihNH9Zlpw==');
define('LOGGED_IN_KEY',    'Bn3a+BedcxonNSQn/ctIeuBPPvjt2qe+dkCjg951NvPDSu8+MZ1SgJhBzo9bMPZL9PGogK7E6GassiMQ8oGZzA==');
define('NONCE_KEY',        'O3v7azpRAZfEaNxucySdyDmjNS+bLz4GlMOiD0kQboC5y5SCddemQuRKuBxvNyg3qceFMyI6XeWBtJRmnNeeWg==');
define('AUTH_SALT',        'HZKeuxQe8c8j7udgW/7N/BDQo2knH+oFNB3w2lJavpH1F/q4OzurJhtDQs+xfDyuH4CtVAWMMAFilfhZHlJgKw==');
define('SECURE_AUTH_SALT', 'tPKjpMgXJVCjNJmiEW7Xc1lvRTFcXowCEThwswnTM0SGCIXrBehFdk9xNYzFif59TqJj5QRz90iW1/wruP41oA==');
define('LOGGED_IN_SALT',   'U/9Qx8dkKlkaq1GpDq0Fy+seP2Mg22DWoIigzMMP1I908k3Bk/DOneKjOnHg2ap/50lQVtLesILmHWyQtjvRxw==');
define('NONCE_SALT',       'oh3uG7XCjMJuBiyLyU8OGcvLxsjGXW0yjmEuUfu+6wimQ3e+CACuzswYvwDdxw6N8lNY0PqWTm9jiwVSc6AL7w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
