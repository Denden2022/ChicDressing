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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\chic_dressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chic_dressing' );

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
define( 'AUTH_KEY',         'XvE4h1!!(1.A+{~r0aBg*kwT)KFGE)x=4lx05?B8x4a>_WKZ(h @!A|wa94x#!EO' );
define( 'SECURE_AUTH_KEY',  '$` Qo!#0Y3r.<?jp 4zy[LMe1?fnvcJx=*X5V;h[kF?(gGV&{Q,#vHn:mZuvDKKI' );
define( 'LOGGED_IN_KEY',    '2V@Q~ak}21+Rj;j!hg<J6<uy^,h^e7rr?G@fZ:R-BI9o}9sDP)y5Dj^F_^b$iA>R' );
define( 'NONCE_KEY',        ':R1q4F[i{~QA%Ho9@03vede>|dl%bNy._>p%FoxaKzNlXUv5}f)0syzunIoCefhe' );
define( 'AUTH_SALT',        'C[+~8f`yBj$ME1MbuczT$;LDJ*~9F+))/{S!-RFp&}< >iS=Ez2F$aUmGD>1V&;s' );
define( 'SECURE_AUTH_SALT', 'qD |F_De;c3x~q}o_QqZ} os]{%8GMxy@r].9;R]eEU@b.X@8qEmTE#pxN4){8nQ' );
define( 'LOGGED_IN_SALT',   '^3 0$IPwU[~p`6~m8q$w.i$WP+r^Z73gTs33s_(Cj[qa_!k6.kDOYR;Jnq/X(.9D' );
define( 'NONCE_SALT',       ':$NM<x^u|apDZdc10[=[aEC%ka^^JdfC`KH``FySq^Z<w(cIMCFTQ.|[nZYq^!Hy' );

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
