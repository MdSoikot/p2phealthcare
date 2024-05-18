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
define( 'AUTH_KEY',          '@zbi)LUCJEU,I#5xKnelv>S/>^_-4OJb+RlzCBvxT#v[?%x3LAlPpz~toqbD>$MW' );
define( 'SECURE_AUTH_KEY',   '6zR1xP:VNYwi8ee<@X~JH03M.JwS:3fd%$8kcGxz*/wG4<|k/7Zh9y.HaMXn}wz[' );
define( 'LOGGED_IN_KEY',     'xPf#wh@YwDpb%Ul;l.#fUM3MOBA#dsUC{Bm7R-xR,W7;1ochW%iuN~i$~w{(NV.z' );
define( 'NONCE_KEY',         '.%E/*jLCMlmw,g_/dvCeF`GrBJz>^Nv@^jf:rlqD<^K2w*xg7_,S*a]CNAv[Q?96' );
define( 'AUTH_SALT',         '4rY5^kq?|[x#w4e2nj*X#LMk4BETIvOZ*w{VGW/c~kw1CWh<?H/0ZbeTEx-)nVcc' );
define( 'SECURE_AUTH_SALT',  ',c>J B>0li8d08cD|4wJQ= -%r3Lz`P&eCIrbseT)Nv0%sPN4pOwL8_M29f|qV@N' );
define( 'LOGGED_IN_SALT',    '-Lu|$sR{^b&(xOU8E2?<eLSO2pJTrXH)HK*j/[_}w0|MB xDWA.-Td6Y b1tTKA6' );
define( 'NONCE_SALT',        'l{A5LYfF^tp;U](NR<h!5vg2jn57&4WPm#UiPxhh9!cyUvkuzJ-LOXHnt]kN6OBg' );
define( 'WP_CACHE_KEY_SALT', ',<R]p0H?h<PYe},2MlG0)ddY#Rv5}J$&j;bseWhT?>|Eq$kDmLV%AJ=J$wN{FOp_' );


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
