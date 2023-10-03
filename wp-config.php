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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '~$j1,ly>S6YY?ba{zN+</k(yR5DIk/Rh7X|ubt/}rPWXV6is,MfSvQ[X`lt=8x4j' );
define( 'SECURE_AUTH_KEY',  'qkrmt.gx%7k 1X~k%/VD!kGa7]x^inXLXk.Ppl:daCD&9cUR%hq<9+xV}ASMFhCP' );
define( 'LOGGED_IN_KEY',    '=cqros@q_f.-,k-%;a?v fva$3/v<g7v/6pC+I*#O`.3L,>l =oWS&ss2 AY<kR>' );
define( 'NONCE_KEY',        'KnJx[[AWTqnO1W/L!1V$2|AjJZga b*I^9*6:U[;eb/[|@{UvD p~a3=F<~{0X$W' );
define( 'AUTH_SALT',        'ttd9b=JE{%J]@]@^n|-LV!0fZDbjT>4-Lryp$pM?G7m@or36mse0v60>9;Qfu U4' );
define( 'SECURE_AUTH_SALT', 'l@K+D}2)4au}4cv$qsMf;%4n/|Hyn{K!1x]A.6=lQzPhW.z,nQ92OIF|~SH`QG5)' );
define( 'LOGGED_IN_SALT',   'TA>_)4-|k/X$W=U!6sqw`!kH<J2SQ}G<OJ39,-GStS$De`^t+s+uz4vXOnEs#?<W' );
define( 'NONCE_SALT',       '>,I>~dy<h};,{Pp<ev*Bc~0S*kpkF0t2V+?=]0>Y]TV!%%=Rh/LZY@9$`hoiJF`:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
