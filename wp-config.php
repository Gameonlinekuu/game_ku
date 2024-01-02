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
define( 'DB_NAME', 'Game_ku' );

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
define( 'AUTH_KEY',         '8<Li-|ZTV(#usKqRXC/U3Z_GN-TiwCn2 3djI2MnT^Cw%h;iUi.d(Qb>Ho;^9H`3' );
define( 'SECURE_AUTH_KEY',  'bX/0_g-KVg>w3zwIO:]~&5 P!S}RIQ%ctazV%I9/x4@ZQwU^>AoI9iU<=/.h$]c{' );
define( 'LOGGED_IN_KEY',    'ldNz%FajP dQ(HP`s1}=O<h(kly1yOq[ !bFJ3-G#I5f|?TX0%6W^o-jmM{i^9ta' );
define( 'NONCE_KEY',        'm4/BfOarU~@EuTml>xLa!5@UjPL=sYNexj]wnTk9]nx-NRIJ&ER/(,PJyru?`vxq' );
define( 'AUTH_SALT',        'fs Mh_K,^xv@a:LFb)]Ns87N`s L^@/.C&AfM2JitS0*lM$C7Rc~b4^$33Q{z&;,' );
define( 'SECURE_AUTH_SALT', 'NUi]fRwJo6unyS<*nR(y?uK1u_d(!N=gD1E6%R-!,Tg0~@}wR_C,QcJ!]8@V8W`I' );
define( 'LOGGED_IN_SALT',   'a6}Y][9j%igxA2L{48-HE*vQo`%SH0Pe=ide$+a7&1n82F)cX;dUT{$5LR[|EDv?' );
define( 'NONCE_SALT',       '|Qlt)KNpk>i3o#@>Z@$I[D_gh04lJnz#r/9Br+f1SH.RPO?ndZD&32U!O?jEY0MG' );

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
