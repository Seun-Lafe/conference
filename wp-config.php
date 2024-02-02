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
define( 'DB_NAME', 'conference' );

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
define( 'AUTH_KEY',         '119@[oUzArPMtde~hYBVmb2FD`5B%[)H>4&udO.+Pdp17qcx$*}N#)YkVi}G_`d+' );
define( 'SECURE_AUTH_KEY',  'K(c/87}PRs@Xj2?kEbbGfKd{PmWt{wQvMMPO6yu|yC,qAS+eGZj^g?%`$zA<}{+%' );
define( 'LOGGED_IN_KEY',    'u]yjI?DuHobysI3=`^sBWe8w?>UL7(LezrUS1#@cy`N+NEQLj#oU=jbyE1t!!r=u' );
define( 'NONCE_KEY',        '3b..lQ7!Jxar;36uGaCj@4~GhaMwD8-w2O2R2}Zk73>G.(kR(_0nng>59LfXvh<6' );
define( 'AUTH_SALT',        '$B#<*)*htTGlURp(AAK,Y*)I>8T} t!LyhIB~q(~XcGT;4xE`f-n=>],ffB:`U3`' );
define( 'SECURE_AUTH_SALT', '^4=SvSQ?}ihX#uI?Mwxdu0~>gDh-?+fo]JF>%5bw&mK6i0Dgl3%;O9s7FI<d&S^s' );
define( 'LOGGED_IN_SALT',   '4 o+VD/eu_va6Sd%LK6@$28uFM 0%*3wc1}3)@fyF;it~MG?3*|{0:t%3`(w?bUv' );
define( 'NONCE_SALT',       '$nT jAp[-F+l6aQB_NeND:,QXa<RPt>1[vRB^{[7|ZI2AMe,JrFIa7nu>a`@v363' );

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
define('FS_METHOD', 'direct'); 