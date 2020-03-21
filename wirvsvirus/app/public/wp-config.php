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
define('AUTH_KEY',         'RhD4raLQZz2vWrKX/n7EeyNzROAcO/RhgR0urh0iGKlTEkpl9teTEdRHIlUtXrci1TQx4wiETQJp2d6dyOQsHw==');
define('SECURE_AUTH_KEY',  'T3AQcVZO+eBiZyPHgDe+C/+d3uZLVS0jEMK41OVPPev5f3S9EK5eYca3CDXGYMi2RIhVuJS00kenCtPIFgm/zA==');
define('LOGGED_IN_KEY',    'yWmjz+Tv7tdbRrq32tb67hbZdAGky7WUGjoulqAENq27Md9bm5I2ufpEwIKk5Gbq7xFGBbjofYizDDDS3aVQ3A==');
define('NONCE_KEY',        'mhgdUBGg+Le3NdWJy23ktjgYUuC6YCWRdbPRQp9B94bNIEmyu/yBBeQDqGuGpTCiZht4r5a5fQ6mKj1ZLmcmMA==');
define('AUTH_SALT',        'buS2/MMDXwj6EThwu7pWUkmnWCl0CWcr53KgO/rWzcisI17j2NqWtCmGFXbjWwQqASF103FPTTYainSCRBbJyw==');
define('SECURE_AUTH_SALT', 'BChIj/mU+IwxyKQCSA75aa2xwox2QjL12pdIhECzMQ8Fmt1VL0hKKUsC5hJiFb0fWbZ6N+1evZDWEQ/aVd7Oig==');
define('LOGGED_IN_SALT',   'JvLWF3XWAkHWppmA04K+GTeQTKa0lW4J/HQiOt05JPTOexhgCRyFr6emCtTP1/KCEudh0zgWI7pRjj0iYb95mw==');
define('NONCE_SALT',       'EwerwP/1wn9liJt22nXkH4gCebQbtL1KT1KQo0Npx5K9wwunF3H4BhbawXfHs6Aj86+5lC/CaN671rVVBK2lvg==');

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
