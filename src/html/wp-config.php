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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cursoemvideo');

/** MySQL database username */
define( 'DB_USER', 'sist_cursoemvideo');

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass1662');

/** MySQL hostname */
define( 'DB_HOST', 'cursoemvideo-db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bfbc257271906fa71bfc29ba42a87f6603695e28');
define( 'SECURE_AUTH_KEY',  '2926618e22d4a5ef49baf04d26df72850ec0d75f');
define( 'LOGGED_IN_KEY',    'e68bc452a836e72cf09dad1bf429fce5d030fb11');
define( 'NONCE_KEY',        '83ee01a455f5d48d9da68428663ba67370d74337');
define( 'AUTH_SALT',        '3c7174faa98e07470a8425471b531c9c551cbffc');
define( 'SECURE_AUTH_SALT', 'e9ec3cbb3f5211e9f5fd8dbf27d21bb456c2815c');
define( 'LOGGED_IN_SALT',   'cda72f11e7a451f243a9f13aaeb8777bf255fd40');
define( 'NONCE_SALT',       'fcb9a2d87e4b0efc0b4f7907fc329afacc12475b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
