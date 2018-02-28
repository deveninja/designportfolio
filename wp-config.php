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
define('DB_NAME', 'rfonline');

/** MySQL database username */
define('DB_USER', 'laraveladmin');

/** MySQL database password */
define('DB_PASSWORD', 'Fishbone3136!@#');

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
define('AUTH_KEY',         '/!um5A%]<7Zn/-MwON T(g<>c@)PrfESXqi9_3.nPlRumXmqt(gK2`8gLe)m%=J1');
define('SECURE_AUTH_KEY',  'XErk`uB?+$_*u%a@Cp-aCx/0Z<aoQE|,5h:s&5_t]Wed7U/vh7%>B!c?(E7:(lT+');
define('LOGGED_IN_KEY',    '{P&/kT 2ZkYdDM{BxV4d^wtKM<^gvy!YMnt;TF!Tsx{x~(@M&Z>Zw*3#DYlG].Xg');
define('NONCE_KEY',        'NSTaQry=EF2%Cf~]uf(F`iDT^ ,RCr40pdfkc3cWb6eq;2<}hwgUdH9D_d w/619');
define('AUTH_SALT',        'x)`|OVU(4OCV9A72r_dfALjHMow7ELH_t7vVPENbO8YZuQ]D]r/BE?aG<6fAMsJe');
define('SECURE_AUTH_SALT', 'nVsK3!qqW1Gbh62<A9M40%ix;Nim0F$#-!f@_twoTC}LaHgB>TV/%G%Q5?x^nl<a');
define('LOGGED_IN_SALT',   '[d>ZQQ: 1rMObLsM}1Cp;<9)gI%^u ZXxVWN e:kJ$~)fI^62B/7~cGo7BN[0kY.');
define('NONCE_SALT',       'w&$lN|yV[vV24[i|-.4b@3@&VDHotKu5WJzO^VT_l{bSpckkU90K+b8=JrA+kcS+');

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
