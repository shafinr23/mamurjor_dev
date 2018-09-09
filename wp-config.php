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
define('DB_NAME', 'mamurjor_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Abc');

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
define('AUTH_KEY',         '8E_y>}/6Pb/r1LV.z_/{,ph)`Yb@<D.?:H{&j@@mkEH{`e.IFPNC)ON:hy*::HVF');
define('SECURE_AUTH_KEY',  'HO;#6i`t2$P#SR3Pj,oFGUhqU6)ftE`1DaC=N+cWjtf+wBdu{GHz[$j<sS4/qM5<');
define('LOGGED_IN_KEY',    '/ `}0x2aAf FSt+Ew/:E8B-|;)awLIe9Gpo5<&|7gBT`2 Tmnb~g]4na,Ct#+uT]');
define('NONCE_KEY',        'fe]RYpw<}51yOD;<oCjt^r(iAR,:q_WXF9Z<j^f`-qx]DceA{c|AM[%wR[/,bkRl');
define('AUTH_SALT',        'fowUI$145]tqB4BJz,_W(A,FG4H&^zsNx+-{@EP7=h:xOs!NEp!cGmaW[Ot;GXhi');
define('SECURE_AUTH_SALT', '}z^?a2YpOj.?*GdZinKh6-bH/cQ{f5O&Qmuh#(pm!,&I,7^:2QtUepbjx?_ut^%5');
define('LOGGED_IN_SALT',   'BI<5XY]J^)}=?1@.0b6qWdBgBE8!ZzC@PeRR:%sYzP.|Ut.hnjz^,ZD2]Vxv-/RT');
define('NONCE_SALT',       '#g[#dY}/12KlX^ED9r5^a!Z=@ILoXD,Mo`4$W_Jt@RT=rBqs}@FCG1q+n%pY,sQR');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
