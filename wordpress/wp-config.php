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
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         '#2KJ5Um?q OIL4`j+slA|Le]wuF-^Ms28DD9wyp>j0C:g6Ee/,z0Gb`qQ.g+z%W[' );
define( 'SECURE_AUTH_KEY',  's<e.NLrl6F.A4++s~M Y~Wp9brSX2E:yPBO@sM_QR_e3;>]pff?WdZ}3KH@?5>x1' );
define( 'LOGGED_IN_KEY',    'k,j GQ~7aQ|<v+10i*c*7IBeFD[xb:$|t2]TET(K?N3$4#TL*dPJix,P1#r*.(&I' );
define( 'NONCE_KEY',        'qZ7+<8C Oe.Quu5H;~osDcp0nVKv$3syDK4f9NmI`8$O$S{F5?I)JzL!~KG[iBwV' );
define( 'AUTH_SALT',        '-vyjxj(8fRVJzby|DWf%D# K[JyR=.}wC]az%EcBBsb16>=}^JCk<-(0CE%YvGY9' );
define( 'SECURE_AUTH_SALT', 'IOg&y*{.<vjUQvaQx#Vv5 3_;/R5__%J+$r<Qqy:jmyO,A6 UMc{|$|caij|+5;y' );
define( 'LOGGED_IN_SALT',   'N[?,u 2O^fX>wc#r*#GptbtGG`]W(#/__LRS^X^)xk^{t:hF#9M!Dd1Mvf@#;29?' );
define( 'NONCE_SALT',       '1lf1Ooy#SsBjt+P)ofEa>LZq)NYRD=,VWZ<VCmJvU_}*I,7j@mm2R[> /iwbAZv`' );

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
