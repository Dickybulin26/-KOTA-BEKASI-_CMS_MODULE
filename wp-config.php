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
define( 'DB_NAME', 'wpdb001' );

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
define( 'AUTH_KEY',         'fx|Yadz-x^xk`!W1jTws63@Q|6_3<Cu^V?]4Nd(8s,9Nx>s&u88ZdQ!+5]urJ=8Z' );
define( 'SECURE_AUTH_KEY',  'zi>q=<~C8;IA{K]8:RHDV(.k-89VW^5rGOmE%vk`Do7D5@;H]{.ZALrqn^bZ[FAI' );
define( 'LOGGED_IN_KEY',    'Zy_6>,v5a=[&/7z%i~O4{=<7OZK} YsGKcXJGw&?3c^~}OAj0TCMV&9QDcL&B)Lm' );
define( 'NONCE_KEY',        '.r=nn4,mC4p0&;mmoc@!k4FA>Xv$~2=mV8;Q}rRUK#JwD7B0+4e9cV8u^nHi{:!Y' );
define( 'AUTH_SALT',        'IaQfYQZPEPmR/J8;)_T<@g)2YZL9vv<t0>}R?5#$Ha?A+c24WCs=G=(!]Zyw!5wb' );
define( 'SECURE_AUTH_SALT', '<OpTf&yH7h[SJexIJz^l~O}eeKT5,| HW&|y},TPA6^lkPXY[Nw[Jb@T-UmjKQ]X' );
define( 'LOGGED_IN_SALT',   ',3g-4HLeQu>(Lc,)q?!d.}$#KWT{/(lX5Ayh-w@8S,Fm?+Q/.=>p?+1Zk_AaDm<~' );
define( 'NONCE_SALT',       'CAc+c^@u=G0(~XM=1)Usd^i 0I_65#kR{U[Ux_6Z{y%KJJ$14vC)4]M@IN@3#LOZ' );

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
