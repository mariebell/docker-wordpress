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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'QLle}-huu{yod01m6)rCX1[qK1i41B{j5CRqh{6,Kr;D~dJ?n)4BB7>~~)[<S.rG' );
define( 'SECURE_AUTH_KEY',  'F3vG{#XV7c$nyJ.hP^S+Km-_!3&!gtT11E]D5xN(}y|30Ta&#:c9gc@]^^r)s_E?' );
define( 'LOGGED_IN_KEY',    '<,bAP#6ZD>2q7=z)w47$;Gdpisq?q!DR3nQEJwQ;pbN(IVrko!%F1Dt7|;5k+&oH' );
define( 'NONCE_KEY',        '^1Pc?3Vn9C_Euc.l|n9O*7wfcoiW-89R1o]N^ Xl}j9!p_kd7ac])1P&Rq?^8aR9' );
define( 'AUTH_SALT',        '6gq/BU2sOZ5#vqSWjz Q.^]Es7r|Ur;G72-|E=94u||p$,IL_:6ZI|0~svi`u>od' );
define( 'SECURE_AUTH_SALT', ')V}S%gx6%,5^JfERy+V(|Z4e,14=_+Bj.FiV{DL1WMU[,w%>qi?zs{!&P>/b,UQx' );
define( 'LOGGED_IN_SALT',   'x`O<UGpvuPh?wV>(SJ(|j$1DgnaGA<RY;nT-K/EEdZ2WAnu~Jy2K1wQ|xL>+Quhm' );
define( 'NONCE_SALT',       'P9AWNpb=xE1uMtE#.1M_LqNb`L7^,fZ8k}mQL5^@HH~gJ4Yw`v)&NW4*OglE`4TK' );

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
