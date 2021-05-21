<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~R^_hNLpxH0KF]f. MfU}s5#L8)5##pPE7b i|!G1Fek)o9JZV/7zFX2| q<Jzc.' );
define( 'SECURE_AUTH_KEY',  'Ow9Tdo(`y6GZ^XA<F=}3nbYUYd_|wRFnpA:=`*$Oo_H`lvq[RausF0)79H{i.^+C' );
define( 'LOGGED_IN_KEY',    'o,9mql_ZN$&te~b*yDZv6{DhzI5ss+z S!WR1!JS+Do[*of`yM:6RP|{gZ.uKS@#' );
define( 'NONCE_KEY',        '2HIg*G*J({7G.OwRV#F}2L^CrX-eiohgr&6vk)s7IPO}]G&4-^=QYn;s*7M*s9J@' );
define( 'AUTH_SALT',        'U;o{Az(R95{S6,Tik~mu6rAsIL`wHqz4,eXr*3!|ViV(W-#3pT^~CjBh(:.upl@h' );
define( 'SECURE_AUTH_SALT', ',Xt(clKbhE?tMK]Z34`p*GMn)UmPTqO/hdVEH_CCk{[aK78asTK&RfEz^6Mqj!5d' );
define( 'LOGGED_IN_SALT',   'Qz!>?`4fGD[UOjKV_.3*(;U)5/0+liZc(DWTs^*A//XWOi*AKq/W-!S&hqpb:XCM' );
define( 'NONCE_SALT',       '?~UeZ9;|d>RM^;rA4`W%`()#$0(e:S[=Xo<nk*&]R}J#&bkzbk2T#grnB#Lj3fC]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
