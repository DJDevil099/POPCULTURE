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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 's14988_WordPress' );

/** Database username */
define( 'DB_USER', 'u14988_koQBDGPeq5' );

/** Database password */
define( 'DB_PASSWORD', 'd@X@.YfagThwD4izi+mRMYvd' );

/** Database hostname */
define( 'DB_HOST', 'd3.rustix.me:3306' );

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
define( 'AUTH_KEY',         '`JOkxizdARcPBU$3yqCUA}Q1C6Y@V@Y8bh(o%@q4@Xa})YhVkMW7A7t#$U,*AJAd' );
define( 'SECURE_AUTH_KEY',  'KPkr{&$CIBXk4d:eU7LS~Wz0A#cCm<w`E`O;*Jo2._;9i*mJ!kO:{csh4tBV6g1a' );
define( 'LOGGED_IN_KEY',    '>iv9;I<>hr;De]1TZ|}T5;E&Z,U)[D%a|)iJ%!`YY0U3na1~(e~QYFT>Kz?P9I%^' );
define( 'NONCE_KEY',        '~9PaZdXS!9O#y,Nr<BpN?3r=zID>@Janzd,iBNVdCT$ -K*w[3mo0k?W_$pfr4c*' );
define( 'AUTH_SALT',        '4.!.a 4V=<G-<(nTR7Gqk~>nPVWWMJKgUxI&S ^rbED8VO0R`KzZn.( r/0Hd,a2' );
define( 'SECURE_AUTH_SALT', 'E@}u>>)k0[mN0@OZ!0q5~+G/lAC,`^t|Z &e<j^,-nJ)+bH*Yi>Du`HnxdD;YC5B' );
define( 'LOGGED_IN_SALT',   'j)GQaHJPj29.y;UH2Aw,KeBJK#i</t<LF6+<LQ<B`_2OXW[]|ZkdNjO$9#CDNn#Q' );
define( 'NONCE_SALT',       'u|N[*-QF!oXm%9jTg>R[zegqAib^ZO4,)~ya}z1qI^[k2fo#WANvN%`w_h*gYmHO' );

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
