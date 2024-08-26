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
define( 'DB_NAME', 'raghad' );

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
define( 'AUTH_KEY',         'b#18>Cnzl:KD06s9{65@]8c@-?>|mW;:5K;A-L/B]Z<ASvc1;E}Q:yEXr=p!$ ?%' );
define( 'SECURE_AUTH_KEY',  'iQU_E>L7Uj&qlXVe<oI/elhh5R8RjJ.R]$}EFly*6ll;;bYa.Xfz6kKq]Gr@tCQT' );
define( 'LOGGED_IN_KEY',    'OC!v?o;B(>}N& xk20I:CBg!x8h}b>i8,zsu54T;zjrbjl~ihghd+VI9R%5}l[8+' );
define( 'NONCE_KEY',        '0h?j +X{.M&v8]en,+>NVdGY!Rby@M<0<aRA}G(LzM&c{?;a)g$h,8gj;5,y&hxv' );
define( 'AUTH_SALT',        'uszht`|8`9<j]lqi%5y^p_X:N%rmTr`EmkO&&Hpjx&Ei+z{9CLya~flu=nEKnW*E' );
define( 'SECURE_AUTH_SALT', '~FQ3Fc/.nD0S$Rl+|(dm}Beh?9b?BOdU1E{9fq(KHW{<AM-IIBGH&4Ppg{y =E !' );
define( 'LOGGED_IN_SALT',   'tXG8 D.cy:=-DMR-4|JQ){V5q}48ZPa9#$xt@@T3Wv|/`eT=#%U~SYkKkvEwbKnN' );
define( 'NONCE_SALT',       'v|RTJYJ6F)v,_}L[4}|{:,BpWi6_u@s0J.{p_KQOm5?xc>4*XG.$>u_~b8y?tR~t' );

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
