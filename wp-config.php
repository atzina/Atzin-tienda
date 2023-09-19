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
define( 'DB_NAME', 'tienda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Bruma2020*' );

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
define( 'AUTH_KEY',         'sTYkVn.eTcK><UK9$KxE:<]b`a/m:W#M?PZ[t)lH!m-tjyeOwABOG0CM y7j@v:x' );
define( 'SECURE_AUTH_KEY',  'lh8A-Q9,{)l0..0`K4!t<t3@T4{#q76Qal[CRjrdoq/,Y%)$~ygDk5(e]?C<6LX;' );
define( 'LOGGED_IN_KEY',    '4s:QK?8qLKXAe5b]N<rFLZG1f0Z=W[{hyn:!K?b,w!xl%{KY<N03$0_[T~TV3xc~' );
define( 'NONCE_KEY',        'L8I83:X;HBfN+HPN07_xndJC7~fe9$hOm@+(S3?AL?f:e$/Sx3G+sbZWnq@]Qg>S' );
define( 'AUTH_SALT',        '7[hxf_$Oe^_%tZUE5EK)+k<3;$j&bt@a;UfuIi+VKqq595:]P,r01sZ(;#+?CA6|' );
define( 'SECURE_AUTH_SALT', 'J~*~:$.)U:j|6(s#[GSs]18xt7HH|`)U=04@V-,}DD9<H#_q@Oyp7!gq)70G&Qjm' );
define( 'LOGGED_IN_SALT',   '4:.NScc_~ Ax,>j9c9UMAS(K~p)Ng<z%w? 4?8.2(#!qxo=-~qYxoT,A)eNp#:80' );
define( 'NONCE_SALT',       'm0;?GaS.<HqO`-21vttR[<bI#RDxI[5IT8H^c,kc~Wr8J%Jm|KzcizUWqX.ZrD~v' );

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
