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
define( 'DB_NAME', 'wp-ecom-woostify' );

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
define( 'AUTH_KEY',         '_*cx(4V8vVQwp0Qs~;8h[4fUy=4=b-ncHSV0keau{c_t;aA/HIE|!Xm-H@7Q/wDf' );
define( 'SECURE_AUTH_KEY',  'QS`m-%1+;V&CV4%AcrLpaNf4EKq+h(Qq.dWm6BF})L#/|U*>Cy?Lmsj<{MHqWLZZ' );
define( 'LOGGED_IN_KEY',    'F|EGAvMO.pif}mE,m;uW(&Ng=c`KWRR^fCgR[v1vo-w~fMv?%nbPPv?ylHK`JD&7' );
define( 'NONCE_KEY',        'u2P@!88HI(jNdehol/2kDxWSwE(+d1HWObt!<lKbue~=<f~6  ea2oh40-&)ycfG' );
define( 'AUTH_SALT',        '/E?hH3ZtTZd-BBx1r%:=gM3MU$1n.JRaT;AV&jD]czGdV>gF[33!6$ GK91Cpf&t' );
define( 'SECURE_AUTH_SALT', 'c3kdEp++tbo[}/@j1I!V.tlgHr5EzKLERV^Xnt}O{7P,lzQj.^*x$h/_-l>,tDA6' );
define( 'LOGGED_IN_SALT',   '@|R!l#wZkRAR7LV#%fu?LIo$:P/@>Gk,$.i4rCRhch2M?#@tQ(Z2&V]mBK8<y|-b' );
define( 'NONCE_SALT',       '3SLEvBRBo&(Q)d@IlU4W5s~$1_;EaQUlHhp]x/G|$vtg65kn< 92l%[QxrUR1}H.' );

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
