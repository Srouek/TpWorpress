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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%~N!~O?=k@Es7l7aQ6B]f7)f:SQSo{ZT6MLQb|ogEI[k`t{?YwwY1C$a:Cl hIJ<' );
define( 'SECURE_AUTH_KEY',  'zlnh@q jIvCX/H;lsTTy[@[cJvT?0&phMhhgkmq1;x{=e-o[W^^F%xJ-dT@;OfPZ' );
define( 'LOGGED_IN_KEY',    'nUP|blcYgAB8mA_mI6F`m%a=<kDgzfBIyKvY4-]WQxU!^6~xE#-@]olF:!$jUz{<' );
define( 'NONCE_KEY',        'Y*gJ{8>|;>#wNc:  ?CfN0A.*q >*Bo%(qe f,VjHQZWTb8:|4+a6ZadE(Js~HEs' );
define( 'AUTH_SALT',        'ztE]_+H;W3q@SvX#JY4$0t~kmYxcUgUOJ).N+f&JFy]NkW-hyz]0a6]:k8@^b@~O' );
define( 'SECURE_AUTH_SALT', 'gV9)E.T/w~eCV:sj2(3<jkQ2E*d- !Q(9n Wao$T*KLLnf3}g>g`euAG%uYwIQG0' );
define( 'LOGGED_IN_SALT',   '`++@`}m9}E[N{6(#inSXE1N!]<>0E[W^t1{G{b/tLyUYjUdZf;1PSy&X|`+]y^w%' );
define( 'NONCE_SALT',       'yv!s)SIdwSLq/Zq]zZGMM_}:+TK.JcL99p~Z^|M_t_Q0#0daSyuBEEdyn+>IPoCl' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
