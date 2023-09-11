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
define( 'DB_NAME', 'banhang' );

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
define( 'AUTH_KEY',         'LG Lc!8HeK`0`^~9QI+?pDS_ #/!5.Mo},O_.uHO_$7TSfmSskf&bmX7xPp4!*My' );
define( 'SECURE_AUTH_KEY',  '^O084sW|YHIwXf?#DMO0o:S[kmNA&5H<M5-pc7F];_!W9G(n]BWHNPBz;*[hS3D`' );
define( 'LOGGED_IN_KEY',    'Fr9l?Ff:A28d~=~GYbDLl&(`i2CGKa!-MK<_^#bR@CD4B9p|l(R&s|_0:M{jv>ss' );
define( 'NONCE_KEY',        'qpldPnc5S*]f<[x?Wu67CUSW;>b.$Uo1T@~8-A*A1+K@4U8WV@BFL.FfjEO-x~<N' );
define( 'AUTH_SALT',        'mqBu99v0Lw` 9Sow#n1[/nau5,}Bc*s4#~ aFD]Zk2;k;a)wM2Xl$Da$D7,:!kG#' );
define( 'SECURE_AUTH_SALT', '@Bo%B7+i;G|?=KF]n]B[jD<rNb#~kd:=VPw_nIP@oX|Ko*:aL0Oa:^FR*_z0|fP`' );
define( 'LOGGED_IN_SALT',   ';qc8KORTk<+(J<M2nOF1!~{Z)v`tfBw 0utwh8z`IC># ERn8n47`9HTV16>D)QR' );
define( 'NONCE_SALT',       '_H7I6C-)o`ee~o[V)Y M6Z QWRTtVoyaEEoO:`^T-RbE 9A{J;>JHP%P2v#fRwuP' );

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
