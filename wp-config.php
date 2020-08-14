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
define('AUTH_KEY',         '1AVFBO7nLVTnuAyE241PIrjWqDafrkPRNyGmLcrTGrCZggS3/NE5Cb7CJqYA9kEMyYO9R+WpN/0JanCdejggGg==');
define('SECURE_AUTH_KEY',  'uUt0DjS62cPLtoHfSTFlRmgkKt8TGefqX2WQwA0DSCENUAb8sDTxIuR2xI5XAChLyPpsRUzL9XzvWFATQL2mqw==');
define('LOGGED_IN_KEY',    '9cq6eW1uQsSRhop6D+nee8wdNwXyaCk79zxa8UxqAXqZa1afobBPQB/+qH745zaVYNT2oFRyzTFhAcJAm/v2Ww==');
define('NONCE_KEY',        '+YkzPioPDvOYTih9jY2GTvvTWfAKObv9ZSJVsU7sk6vtP95XPV5bjpo06hSBI4D0bi4Br1sKWbNDZwIKwGpqgA==');
define('AUTH_SALT',        '2mwkMmXEcHaRsB5Zr9woupmEwKqKKi7x6ZEel7c0MldBoeCB0hUEi6pdTNDrHBo72EG/F8vkpYJu2w7FKbhIoA==');
define('SECURE_AUTH_SALT', 'PoGj3GSDKfIzjxSrdPm+xTxF1a+CxJ93S1sXBv+Dz/WOufkCDqqsT/3Yw9ds9dGJ+cMqUkBourYpqmeegutIRw==');
define('LOGGED_IN_SALT',   '8N7sdAc9xzdEAqYxLXiAt1JQljSDd86M9YRxuQZJ61vQAFkDXpsckQQTrMrXjEQSIK25GRiTxJzigpWGj8l6HA==');
define('NONCE_SALT',       'QQuA+df76cWtKPD/zdeOggZKGc69Sag73J7rfJIZyy2kW8eTvRwkR39ba6B1nhPsF6EEiTrtS6T11IbyNK4y9A==');

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
