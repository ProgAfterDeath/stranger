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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '2G3^q[9;M|_)ov})WAa+!RqkaO,S=9t?O%S+VPgDbMolzis3up;j]wtCdQsn{!/N' );
define( 'SECURE_AUTH_KEY',  'J_3F/bi7xr1v>F@o^ j_iZ.7ga3h~@,$&`B_[>#:|rwq~09%[Z^-4?X(K?^uDFbM' );
define( 'LOGGED_IN_KEY',    ':X3!{<VBfHbJ|=lbhdHyinfy4I(miA80A<[enp6_Bq^BU((b.esKJhg7m0?[/l}a' );
define( 'NONCE_KEY',        'a=!(0R@Xd-SaOrUS0OK=5!ALlroZ7^FPD,ck %#3{HE5zL*d7D=sflRS2moVdW&i' );
define( 'AUTH_SALT',        '_c,zhqBNV~$mmh}8-&M&P3Bhr[.,MBC]8I!)Q(&F@sCuZlH{ipsmf fZzQ,R.QE2' );
define( 'SECURE_AUTH_SALT', 'pXc|@~pe?^Y-r}Qna)CWp1i5S_|0|<<IG00%tvcN!qs j(LmlZu @08XU7s4e|EQ' );
define( 'LOGGED_IN_SALT',   'kpllwNu(fFHPH_7rYO-r/r=2(#N$69E~.Y-?V8Od:[.a@hTO$>xOGl2P&ToFGpS*' );
define( 'NONCE_SALT',       '`O=znPp_1ub0U,_>eNK9mJR0/|=;XcK^Ni5AvX*z>u}[2v8w)+G@r0?QLjDC8>Yy' );

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
