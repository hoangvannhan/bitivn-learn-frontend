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
define( 'DB_NAME', 'giahungphong' );

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
define( 'AUTH_KEY',         '7]HO,iQtUJ#?Mu1%Iwkpjjch*k>{7i5Q&VOhZ>f2>HYLGU)=h{D.j6%>DQi`:7kf' );
define( 'SECURE_AUTH_KEY',  '5 R}gn#Hqt>E>23ng9u(TDIs!NBi+!T-&etea:*BtPyUh1F]` |Y~CZ39VaX3vNk' );
define( 'LOGGED_IN_KEY',    'lIBLJmQ$5*fUht)kIky/5$r6c/|S#[>1EAZs:s6HwOQ]}&yxZQ0Bj;YZvK2tJh!@' );
define( 'NONCE_KEY',        ':OCo2AfTa@@woDx&A8[G<L}QX9.!:@Y%0yrI)f/}BS1oj-N|B> /6Wt&Zo<eJ{>%' );
define( 'AUTH_SALT',        'Q_>[K>.g=5|t8A##`nw-mk^-3Cr(fTyb=&3l=g6$[3rf/A7|=^G+q%Waz&gN*(^Q' );
define( 'SECURE_AUTH_SALT', 'S{P.C&XWf0Y/b<zNIQk(vnFr&A %zx2>GQ|P5F4{p Cqhk{yyW~(WB_ETON,I<qB' );
define( 'LOGGED_IN_SALT',   'l]T@bi&k!bhj`[2MDI~cc^pZwI}TasnOWfJzvl+E^c;-sGHo.9AS&VF1;bTI8a:0' );
define( 'NONCE_SALT',       '&}tPbW*#9B_I2@ jcV:h:wE@g_=U[v!}%;j5GQ<zo=?P_/o,_B=yBp-Nfs5^;2Br' );

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
