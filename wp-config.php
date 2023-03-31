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
define( 'DB_NAME', 'tugas_lks' );

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
define( 'AUTH_KEY',         'I:(j)Uy (3&/XM>l3(M}{9X~,_W/mZt40Yp.m-z_6cq~yM>F%sq7)1c09RvE= 9#' );
define( 'SECURE_AUTH_KEY',  'Z-[F!4qRA8_Zp%!?QT/yJK;VE0>xX.&H{0dFxe)}?dMraQg_Yw&5qj0R^EeOtiS5' );
define( 'LOGGED_IN_KEY',    'y`k=E;U4i1>n9 t]~0HYXU0_4;u;3Ms)f?!`eMjLVed(w$@YmliDE86i&$xe-t&g' );
define( 'NONCE_KEY',        'tkQz5H#>DlrRL^YwH(MFayV mBL`V_EXlsI5.(VNQTX$ S?sqZ;<?>V+IX*jlt7b' );
define( 'AUTH_SALT',        'X>_hHl^pN7LYrtXw)QPt5:K%g{2I9Y}$ty4b`lUSY+qwC:C?ywUTi&C`Ldn:NfYT' );
define( 'SECURE_AUTH_SALT', '0~?m1iH}7_eNtnG{9:^2^H1=N3#;@H3v7N%sklT@y=y06=lh Xr= %nP#SN;aQ)#' );
define( 'LOGGED_IN_SALT',   'y3qAzi*BB6KA9d;EhZEG0rd*JdA;#b^Wz30NUVSO%W WPp}zwyFA9C,a _4,Al,G' );
define( 'NONCE_SALT',       ' 4~4&Ic!0Ix%OH1TVi`/esSkKfF>o(}2RQnStb (6%y_%DaJ8V8=M&Ft*2f:jE%H' );

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
