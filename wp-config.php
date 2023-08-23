<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J6nQO0_#qSI%?W|)-:LRUod~#+K^]5b6`WAN5+#liJZkr9 z!Q@-<p-[[^k16t-?' );
define( 'SECURE_AUTH_KEY',  'oaM!BG!M7QB=6yI%=V-MpdWFH6~bGbkUlfJ5j*clq<gQu@JdV?N&/4qQ@^Y!gJ~~' );
define( 'LOGGED_IN_KEY',    'm^XkR].o?op9LI9l-%%7Lla5/4BhHY+KZ.Ua&IlX/iW=g~ cv+j;aYJAFCjNi{|Y' );
define( 'NONCE_KEY',        '&s:q`guy_ck(ed9L_2Yo 8</CDM@6s0!%d9%_PX-f2>~ci}(0Q=YY0RZQIL[!W&r' );
define( 'AUTH_SALT',        '^ipY9a0s{LM`~W>%746C.u^~*W~N<0Evl{045=9k>-/Di@)&cc<bbc6 ~B4T(hM)' );
define( 'SECURE_AUTH_SALT', 'NpsC<BjWQ94XSpAnsaT2-th6c=L$.N6#!DT$ha`NPi,E]mK6d&t-vXt8+pZ::*)/' );
define( 'LOGGED_IN_SALT',   'D,5@e>zLrArHm5bW9v$;@N]Luu59%rs+Ulx6+T}:2`gJpO?$rkp/;0H|^3n4V AR' );
define( 'NONCE_SALT',       '$@QAL|xAvz4{0Bx :W.x9#h?)/y7%G5F+o4IyV+~oO=<A38u{vQ@{)hvhZ)N8]1S' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
