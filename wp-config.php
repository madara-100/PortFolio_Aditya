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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:/xampp/htdocs/Portfolio/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'Portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nV+xxv@g%MiOXhw~*zpD=gWRQ5;Hz9P4eEVgOwKDur!q.@9v[o&u{Aa,YyE-_H3p' );
define( 'SECURE_AUTH_KEY',  '=u)yfWOJ!Bop#VY2 ?e/1SWIb]nTxfp|1d;PyBw}>v H;EJ/-|z&qxA&e>64E~FL' );
define( 'LOGGED_IN_KEY',    'lCeiojdft~u(zjr(d?)yOPBD;m?kE{v$:rf,%e96[S2]%A2;|5d#$Q}<@gm{ll8>' );
define( 'NONCE_KEY',        'fT(s1.7H;qeB&$WNIA1CX(@@3_l~>UeqiR!@4*EweSrR}0wG(V0! LQr#*?isbk;' );
define( 'AUTH_SALT',        '-W;AKn8${beq9WZEYnd<9B5uu))_G[tctm{Z?64Ab%54OIqop?+x[;`)cR(SXbXI' );
define( 'SECURE_AUTH_SALT', 'Fuai%RR]IV;@ALzZwm*BJ!Jvsk$QOHJK{P={&f5$`Hid| /$L&o=bzl7JAJ3 m:K' );
define( 'LOGGED_IN_SALT',   '3r:WeTzgeD;/< %cz=AzsZA}_3f4laUc/3si=W=bG@qGk9Fqj7hXH{+o?xj::J)7' );
define( 'NONCE_SALT',       'eyWI%U!iK-tHF;I)j)myc;*L0R8Mb)?$+4a6.qKG3SU&0]4QaOs: Z/!M`=A(eg&' );

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
