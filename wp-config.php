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
define( 'DB_NAME', 'lucianandrei_db' );

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
define( 'AUTH_KEY',         'IU]jK:[>j!,3E8/$(X-?RH_48>obkHKbcX-L.H`6PhX Jh/$!m3&$oq.IYW1$?rT' );
define( 'SECURE_AUTH_KEY',  'zcOK2NK9Sl@9SZSF2Sx_=77jpX<g+Z..{jTW5-44015,H9CBu^4y>N07GoL@O:z/' );
define( 'LOGGED_IN_KEY',    'S#yQr3K*w!E1#+@0~xWp9]D V&p;vZ<fEZ>zMBZ[CCoC8H1`XzaK~ESE-lp?{NOx' );
define( 'NONCE_KEY',        'KkjV5zmB/VF*R-G-.GL|B9?Qqx~g^pJr%VWT+TW&]Jv*NQ.r6-M{46@Rw=mPu6hC' );
define( 'AUTH_SALT',        'y~U~]PInn&#iwznkwTsisQx34s$Eof5fOE6?4zgQ;deyDCN9_Z26wZp-5i,5N>|5' );
define( 'SECURE_AUTH_SALT', '}i6,0 y9L3w]FvW4uhm#1s%#R0Fq&fB,DA)h4s-k[MU*@Y}X??`Wa:mKih=Ca@(;' );
define( 'LOGGED_IN_SALT',   '=S.~#/R8(yETy8o#x6x&#]`2+#k=+pyX$WO}]Eg,dq:(|tfX;dFHENZBB0s=YXlA' );
define( 'NONCE_SALT',       'P$l&8*f9`hCAz+F8A<$yz!9P{/ruYEu-F?<{VUIJl`@@ZI!{LQM0-hlz~tI:(p<T' );

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
