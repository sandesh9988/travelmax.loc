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
define( 'DB_NAME', 'travelmax' );

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
define( 'AUTH_KEY',         'BtpIw=| YlC3g#Wd?RoPV/52Z*3fEr?nfkuAc0 y&$@: HC6T.b:cdiwg~KsR^~%' );
define( 'SECURE_AUTH_KEY',  'yn.E,i^F%%zUB^yVH_+ZpBS;HF_4M/QP5%}h2LFZ4seX{x(pH^?ukHxMwJ%{q53C' );
define( 'LOGGED_IN_KEY',    '{VNhRltH492}>BU&~^cP(k)mmw:gVOxD5AB/Rl(&ItnxC%+&1de*S$Po=[q]e4(+' );
define( 'NONCE_KEY',        '8<}eRLucyRZ|(c*I~./&<%f2@(JKoh>+2C^09Z9}>kppO^|DR..u2Tw,~Vya<a~.' );
define( 'AUTH_SALT',        '=7|.HC9kZ~PHK,hm*FO_{JKsPw{WI!+--<Tpf-vQC7EMD(p0[A^`J{7DG#H,`&tc' );
define( 'SECURE_AUTH_SALT', '.jJ*}[w1 HDd5i*VA1$}k&h]W+t=s`-@;y{,C)3skW4]sgtoA&=}i%hOKX0Q4+e9' );
define( 'LOGGED_IN_SALT',   'Xzt,[c/+p}e:H.`=OFu/mdz^Z1<sH(K^#efR}//?s@|Dc/VheQmDIMc-;^|naApU' );
define( 'NONCE_SALT',       'LHj Oy=}<OHkgG`Y|-JgUq*~sH9E)e]fbXw++(nE,+J=vDZSa4T+`8s!bhLSc53#' );

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
