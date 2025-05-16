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
define( 'AUTH_KEY',          '6}X;m+R0.B};-JK 8bgT<% k3Eu$_$>p!*oo}y+-o-K^_:OE,bdE:;1p;]W3{*0p' );
define( 'SECURE_AUTH_KEY',   '*_o~h9W6Q[3N((7^1tKc9=@!v5P^GPL8H*-U_ct1]I1q>HisRqA3z5`=BdqdFLXc' );
define( 'LOGGED_IN_KEY',     '*M-aK2H=JH2EThz-;joO]]qn:]:%.K=uEOOVV>o.ct )n;^,<^:$K]Vnt.x%x~7v' );
define( 'NONCE_KEY',         'rYY-5>e>x`1v,k:gL&E7ul.8j+w)Evo b9#*u9<i@/ggdYoLR(`J16_aM_QQh{<3' );
define( 'AUTH_SALT',         '7epipPMeeT1 H;S`k; m$|WS.-xu35tAs-g/5i}M7ugI%t[k3FfnoOSAu$GF;jl5' );
define( 'SECURE_AUTH_SALT',  '({lDI*_/p=XF@H%=~%uAsG3V6U>`sq|/nDk>[GR&vz~9_Q>R4fBLfG@Ion}w-x0,' );
define( 'LOGGED_IN_SALT',    '>}0T$ZPs-5#tQD7x-l]  a#s[w J+sxO)!(G1ET?@ e*!)/hv.r:oi]*14V)k{up' );
define( 'NONCE_SALT',        '[7Fjfr|[Y>/<AW>)~/c[&+hjRn`3EX{..8uR1gjvlRC/fA/*itPpQc`*sw7NR6wO' );
define( 'WP_CACHE_KEY_SALT', '!/9}]<&6?f~%F!>/{<Ua/4; aH!PhgQ(79s)1wX<NZNJNuyCF2l9,Dq,]&^:J_h!' );


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
