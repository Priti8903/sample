<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         '4?E-%G_}nG}.s4C73?;RvaSV3ANN?5w*v!obboZa5bmz<FUceRpxlMJ}%Q!,:)]d' );
define( 'SECURE_AUTH_KEY',  'x5:q7>[@-U(nj0fke,z5U*U1IYq4H;*sUv]bz2k_Zu%;5B+7:ut?7_3`7{e#g;].' );
define( 'LOGGED_IN_KEY',    'v 9HC:Hk,V)k][z4[c;ie}ZB7<T!Fd#vIwK)x!gpPU|9t~DGKLJ*zF!l%!eg-Pe-' );
define( 'NONCE_KEY',        '4]CC]BqJ]b!wXDrNF E2IQyNnm=6`[bZ$>kS2ypz?^?YtQ}n:ee<dqVq-Q0z;EL[' );
define( 'AUTH_SALT',        '%o6M,0#q`#WK>eV)@X<(Gh@A<IB o;_@&NJr@&R+g9rSZ_Y~H8?d$<&nv;JR)7MQ' );
define( 'SECURE_AUTH_SALT', 'WHSC#i$`Li1# ]J5nY|Fj+&1MhyA8K71lZ..][LkO%2M@<aEiK#O(:7{F9g5_9~e' );
define( 'LOGGED_IN_SALT',   'M$+@U/Qa]9~N6#LA]F;E}@_ZZO^xg/c:`/t`1^2)c>fqm&pw6y&*67xemY{3R1.P' );
define( 'NONCE_SALT',       'k)1Zp$u1EIg^V+wXRh_yC]X08wlp@)CS>n=p%+Oq7Sy8lxUj&.k]Tvo{{RX`URv]' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
