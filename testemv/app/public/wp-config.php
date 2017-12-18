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
define('AUTH_KEY',         'CUb21strVEk+rvZySvU0EAUelHdpMCJ5UCkmDzQ0HSWWpTXtmWhsoCsXkdUojLC0e5e7TCEixVor89tNuJk/vA==');
define('SECURE_AUTH_KEY',  'fBT0NR1DcYefOUOckn3jbUc8jBOldGZGr9fxZVqAFV3ZZsQiu1DNF26f1IcUFb4Q+YocrCs0hfS5DtgkwdCnEA==');
define('LOGGED_IN_KEY',    '1g/adTSXtIwP68bQ8Sl6oh3fvWKhOtzZV82IBlsHqcL7oQz/K4SkciJMeSXYUHe0+qXimphGdmRjR/fKIdUBCQ==');
define('NONCE_KEY',        '3KiZzZi3tndeySpa+KV+Yw0Rtg/H7xcrHFgGnYD46DYpIOyy32Ct8YH+XhRoimzYW6CUDf8rRi3c1rkXjH9wHw==');
define('AUTH_SALT',        'PZOrOc8JewUgA1r/xU26NI3+BUwzbPwCYnJQ3IbL3G/hiNGig3bgRFKtcU4KS9ngSTDVSOn6yB0l8ljjsbFqrg==');
define('SECURE_AUTH_SALT', 'Le8+a0tUZoTa1Kx11YfHaS3+KFh1s796e36MzXii+zUepivxioIVWqrAPVPvgYTrTrk5HLaONty27l3YdAglsw==');
define('LOGGED_IN_SALT',   'Ec8cx6RPmXo4tZ5f2yoaebKIqZk8schWKzIoJ1qyl0io9/eXZoplu/9xS+XUbND9W40sUvKW/5GVM74uRM0axg==');
define('NONCE_SALT',       'nTEeAsNaxDnq+UJZCYci/RxRGmVxTXInRk9a/r56Q945u4J1FuKCGY9bRuan2kXRxzE9csuxVGmwWik2zoyTKA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
