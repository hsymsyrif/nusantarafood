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
define( 'DB_NAME', 'nusantara_streetfood' );

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
define( 'AUTH_KEY',         'YW)oS<sje:(.`N;AR*(CJ{g*rCJq3Glv4T8VRkF41151H5>p|<v1!3zFd1,y@m}!' );
define( 'SECURE_AUTH_KEY',  'Qug{|f>h]tBIUzE=/g>Sr-Mp*|pGp&(s>&_v%$.w|;#ULq(x$m%(P>t2,=,O|e[v' );
define( 'LOGGED_IN_KEY',    '&tg,S] tlZ[*NF0W<0Kh7hS1gP;Iq[_RdnO*l|.Ayd} &sQ1/(SWO:UAE;>ic@~>' );
define( 'NONCE_KEY',        '+Y8KcfvgpS5aU<iFH;9cj;]o[.`(qRu18iNR`yiD:W3I.atSJ$Cc^]bFUCm Xlbq' );
define( 'AUTH_SALT',        '%t4~ivg.A|#=?qA4N+U970zH_h9o/4da^m*QAYZxE#i<m;zS8.^WJ@uO]qb6yJ?C' );
define( 'SECURE_AUTH_SALT', 'il#qLy18uRX64c]~#Q!JZ,k,wzX`kO%:H jN8DZIgmxt~h,VW?ZF&w<en!v-$c=Z' );
define( 'LOGGED_IN_SALT',   'jl$sohg02`!yJt}fS)85}F?PU6UL$MS(i[L(0Peiq=Pw*8;#ChcYQ%8`H$;O{MIt' );
define( 'NONCE_SALT',       'Hh,`Lz5? t*uh!1`p2HHUu7kcci!QEX*aJ7D#)D<3Pa*yzS>>ba213S^i}h? fl ' );

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
