<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresskachka');

/** MySQL database username */
define('DB_USER', 'kachkaadmin');

/** MySQL database password */
define('DB_PASSWORD', 'kachkaadmin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[aM(Se;>G{8L$UBhU~L|-()GHp|*<#NBSd]%0~#D JY7`hc`OjB)5rVzC~MRp.;;');
define('SECURE_AUTH_KEY',  '#@.[j:&7+UtwycIj@q2_D&,!K=EU*Kw>wc+K5o45L~-cz9>`&!y_oXbd{r<=>QHo');
define('LOGGED_IN_KEY',    'Ap6{7T,wkfaRdtbp+C2e<w8uL`7v2w)!{S_w4&s7[Cl?&LE.k-`R 8|8h|m|$#bp');
define('NONCE_KEY',        '8DtR+=O&*Jg-vM,^y-l~MHu-*/3WO<GW-9QE{}R(A0EnI)QB[%WU(.AMC}6V2Gau');
define('AUTH_SALT',        'zD$DN7)P86puJL>O(/x1T.{LN3PW~:rCa7FEO0Q_wEpDm#.R)-lf$O<~UZi`pZSC');
define('SECURE_AUTH_SALT', 'Cl#0%oB,}7|j{2HFt;C}pU[F?#;hy4h<Z[X/(Q@@XroNTR,kPyHe_XAz 1sG4~yr');
define('LOGGED_IN_SALT',   'r/ /&N>xIpe:k!HGM9nWk}s,5!<6@E:Yf[iOJs+KsyB8s~vZ~m[`bcAD(*~e`VU5');
define('NONCE_SALT',       '2FAJ#XzIbPEK.RiEnyC~MMfvbxR(fq<1s(5ZNwrgtOx]+`q4SV~/b57M$OW8zMHs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
