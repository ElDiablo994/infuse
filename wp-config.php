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
define( 'DB_NAME', 'infuse' );

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
define( 'AUTH_KEY',         'G1`BC#myISPs.s$=$[kBI~)@1Qa@Pci43-`7TF,N@Ud>R}!mZ!/EQ^*<Bx>W=sAl' );
define( 'SECURE_AUTH_KEY',  '*aI<xK .!mC0*VT%0G/Pw~`*adJ5+614l]n+Dq/6K.V3-.--^c1a *A^V-6{-y+{' );
define( 'LOGGED_IN_KEY',    '$+sV&9srgwqipv&{fh~TYW|07db+{(8F_%]Dg9$)8&}l<x? 0zk~I>x<*5+vm%J2' );
define( 'NONCE_KEY',        'ZV=s>~ E.2Me>h2}b=|pz(X77Eyn[cx>}FBG2IV*J.k[zARl`}C|A+e$~iiRC`or' );
define( 'AUTH_SALT',        'm?_V<`]3rsOdAFU]4]A0eZTpO~70Z[a?/:nZfkRHRT+,:Gu%Tm0>5j2iP30]cp10' );
define( 'SECURE_AUTH_SALT', '&Bl_KL`bDbF6GR>CGz!V)AT- 5Igv[Ron3tQK(HP=-=&8/OK_.o^$NzeC+%G!K5`' );
define( 'LOGGED_IN_SALT',   '`uGDRDngIVQ|A-VM;ZX371o<)nLamHK4] 0ie6@iDl$RkbT?{hYk<N<3m%Ac]1|%' );
define( 'NONCE_SALT',       'lKM0R|px>EzHD!_=]%F;<@!S;n9csy}=i;TF{2xviQfzrYhU86]BoklgkbE>PvtL' );

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
