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
define('AUTH_KEY',         '6+TxCy63HDu1VXwfH0nT/HAcbIzsc89bujh/ubVfBpOpK7VbRTUebFh/jxsLy+AJ2PWN3iSya2+PaMutMdbiVg==');
define('SECURE_AUTH_KEY',  'KOdHcA0mJgiAsDDhN69LXMBlCffK28dafPKOmZQIkedPylwVhY0Rn0Gu1eVEWUpyL3os5L6Z/dM5R6j+zmyCzA==');
define('LOGGED_IN_KEY',    '6McmR29CJjGMjssDHnXaFSygc3Y5CMIJKsU0RzVG2ARXjTRWS5+ezV/m53uo3ev9HrptaIPFkzP5CbXaPKJ6OQ==');
define('NONCE_KEY',        '8D5zWRqHJJn0RnctXFXH0GruXqXc0DKO9i+ePh90JAMsTqTJ7VvC2kgKzbIfxRBeJQh4VmWmrEWHdP0XtcNYtw==');
define('AUTH_SALT',        '4AA3fwTRSEgHWWrk/kSF0E1w7E3v3rhnPCQAsoZa/O8siHoabxpIEMJ3n0rNlHl1h/XLZhXTHNOVREQZQ1Sknw==');
define('SECURE_AUTH_SALT', 'sH0hz6JQLdpXxCbtBwoq1aXF2a54xjXYvtemKlcxWUK7y1OPXNIHFYVrGcz5yBCgGsmQDJEFqCM5iZVmpNMrwQ==');
define('LOGGED_IN_SALT',   '7f693KCo/VSnMFebhk1yI0OYRTfGVSaTXnVGae1ziEgh0gasaEQbED8AyIaIYtnQj36Zqn6TbztUXIvJ5YyAsw==');
define('NONCE_SALT',       'VZOrf0gDzx++SeNb2/a2fIVNQKygrzzC6OCYtfkqkkxBl3o5htbnXCBJ+Uxaee5L564e87lFtYlJcZPckq76xQ==');

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
