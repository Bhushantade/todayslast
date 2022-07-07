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
define( 'DB_NAME', 'todayslast' );

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
define( 'AUTH_KEY',         'gR+r{ QYT[;RE3/W%KaIcDI60F43{*U2KuP.F(*TkP,PY3KUuT^P:@c8$UTbF:5;' );
define( 'SECURE_AUTH_KEY',  '%lit<lL^baCz*J)#jDIks!$G{Uj+ NkqBz,j,,ZUnH~Z!m,DN9^!`71SrS#b&p1s' );
define( 'LOGGED_IN_KEY',    'Xwb}MRUQE81Sg;.cgd5<ZV~|{Z^.}9)EG|&jJW+Astg|$nKj%_^h6}bUI;bac:XF' );
define( 'NONCE_KEY',        '$]mHHPt`;zKlB]D*h~jQ@|s*DUOt4z$}X.}I,qh<_ 9z,i27jNCUrCO5mJPG~ha]' );
define( 'AUTH_SALT',        '-#GO%-{rA~_+h^#(,Q.Ye/*tNw;cGtRY[iW$hKkn]V8IYxb%r|W<t7G_UG>Ln%B:' );
define( 'SECURE_AUTH_SALT', 'a29D|,QvJ+G^.Vb1M0k$@AGk2l7 ^}QHEYGHc= *^&l)~x[U2Y8cOs{>%&5![* ^' );
define( 'LOGGED_IN_SALT',   'JJT}(gI0&5.P(q-]UJOMLtZ&TQTr+@Omlx8%JVhvvUsC@x?WU<E{<wf}VG.;K_ W' );
define( 'NONCE_SALT',       'y,lI]9Ll}ocCy!N_w?CsSz.Z-,C!9,,m?k>`$H6]T$:l2D1#_l=]2N`l))K @e/d' );

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
