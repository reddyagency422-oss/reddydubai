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
define( 'DB_NAME', 'reddydubai_db' );

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
define( 'AUTH_KEY',         '/eQVi;$f%DH^u%IhA?l-SM@J0+glI{Qsd8&aXS?4|Zc0?KlQ r {3|&|8Vlt5V$+' );
define( 'SECURE_AUTH_KEY',  '^T=3q/>v6>`@fose,i2Vk9%%IPr*1iE37pI_z1EFq,JU@6Q:%;GB|B%%]^=puLy`' );
define( 'LOGGED_IN_KEY',    'L}H$wJXYKAX5oj`uOQpU%2CUR9Be^S&XLUm1HlE>Riclp|NQOm;*8h>@nQ;F-#;&' );
define( 'NONCE_KEY',        'x,oF0+i!Ar-^/[nk*@VbqO0:P0.{Q=CWG*=i!y1G KIFmk(1*-}&voim#}o!/wZZ' );
define( 'AUTH_SALT',        ' EnM%_& LIhWw67taQPm#nODqaU~{%=lB]fWZ<`uk|cN-#iC=d?Ef7iF>h(5*bcA' );
define( 'SECURE_AUTH_SALT', 'C-[4cpPs^?92TURq/C]tN^$g50N5Z22CIX?gMsN~s}(Xt[Jin-oL$n{pnd{UmG)<' );
define( 'LOGGED_IN_SALT',   '9(N[g.fe-|4@n:l)6vQebf7W4mhcy!Bv.>jfyRT6t647Bn8G*pvANm!=WuBH$]_~' );
define( 'NONCE_SALT',       '2niLfhHcoQYy1:3bnh,{CppE3}HA>h2{ZpOD3XmluW}cePRARMrQ)OKmu|zPo,/0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
