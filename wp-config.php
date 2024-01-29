<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#W@n2aQhk4Oc%ThL28_tlFr;bTN?d6`&Hr/kchU3|M|-X+9i |/[Fz{?4|x<$U%w' );
define( 'SECURE_AUTH_KEY',   '*G~R1<EJUIeVA<}mA=Y(Cv49w(,=4Kkk#8E> NKFKKZj|*i?{:E&s[dxk|JW;3!$' );
define( 'LOGGED_IN_KEY',     'vQP=cA1VUxoHQ=EH]dleQ8U}@vhjBI-Bbt%7W8JrRPbWa.txdO~]PXkiFNJRE2[c' );
define( 'NONCE_KEY',         '^A*{ITo+.t<(r){R:SOikJFt/Rt#dU1&7Dp_b5.5fmHKcD,=<oIDa jUVH~-`8$5' );
define( 'AUTH_SALT',         '8S^in=0x:J|`u*IgOpRy#fY|us!^!>I KD`JFuiQ-sa[rSk$(GcEaS!@ZTBc#r>H' );
define( 'SECURE_AUTH_SALT',  '.0ZP7w~d/tqdBk{>T b_)p80{(:f%e2D27+,RC$O7x]hucw0/VK3p]# Y(q5yVT>' );
define( 'LOGGED_IN_SALT',    '|x}mkSDc.aV/4EAv;4ahL`bp<(J53NIW$ wX8oM(K$0)KzM^n9y(O|6xa|34IDKM' );
define( 'NONCE_SALT',        '`XeN?jpp$=>bP~I@oI-La,oj)*wNV}[)xL9<8=3-#a{AD6y8r74JY(J0  `F-$N}' );
define( 'WP_CACHE_KEY_SALT', '{co_|7rN#`,L_LT:woj|mKQ a5PpI(Fn?B6k57~yuismw1P<xetgb8MgfZ`ZRal.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
