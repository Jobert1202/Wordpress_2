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
define( 'DB_NAME', 'wordpress_2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'IPpx?4X;AAyPaD5!49k6~z4q<68<GT P.7}wVdWx^je,d[(2M]Lxllzwk/rTI`vY' );
define( 'SECURE_AUTH_KEY',  'zGA:M3TpyDZ*PRy1_ULw6g2(;*0@(U0,[~U;vAC]P6RE8(P~kiK(*d0N%(tkh`WT' );
define( 'LOGGED_IN_KEY',    '[D<|B y:nY9w|x<1$,7v?Vw[g[g+DIrB.&G5}{~J<!OM wTDu_|1|u02?X^3,W>/' );
define( 'NONCE_KEY',        '`xSm8q(Y0gN{Hb4;6c.m`C+.b3Bz)>HR(XdGdfr~/>S((sZY[a;b~8|ea%5AU4EE' );
define( 'AUTH_SALT',        '`_)h%,*$yKHGPpiA1L3!^W~R#qvQcm,e^Ylmm[rJt 1+3kY+2Du]sL9.cw5`X1+w' );
define( 'SECURE_AUTH_SALT', 'ALW:IW+$6o.)Uw0N>jiTju7>qAMW{C0tk+lXq(WaHR/m{fSI!<OkC)%RmZf|#dP3' );
define( 'LOGGED_IN_SALT',   ',rotbdgalW!3aZsTM,eQ~B3*GbwvpvuJ8w91reCT($7%1{{$l4z3fw85-e<X,@hQ' );
define( 'NONCE_SALT',       'hhkL2<l+,1&,F-A:xcnRoYoj7mC|FzO{xpvb9J[UzA<ly.x&j> 9R~Co LWAO49y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
