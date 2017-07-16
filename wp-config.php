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
define('DB_NAME', 'jstudio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '3316');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q-C] [i*3AWqFwF6%M1OTy;cdt+t(g6Mo~P:gZ%BbJM=y^QT}H%G;xho6l`ob;Y;');
define('SECURE_AUTH_KEY',  'OHw48J87Q+JaXR/@P>itm#Y(G,.trtG_>ux.]TC}FE(@UC4<z;#q?dr~ft4q@mbr');
define('LOGGED_IN_KEY',    '&RonM+J3B~mbncMi@<t 6]qS>?nZq91^q<Op_z*H27#EBD(x;<}_#dtpW12PZm/Z');
define('NONCE_KEY',        'B7]?m2c6AUj.--9Nk[3>VoP@lE79cG -SEsvH`xe.r^5%9&c[<iL.eAJDYwPJ!wi');
define('AUTH_SALT',        '_*Q}(| z)pKa9-#YHKAOpPr<Hdvp8PCs@!EIZ/<UH_7L.]|K&16#%vW!SF-Csgl5');
define('SECURE_AUTH_SALT', 'S8%,LtsqePd~%64v3q|FKK0=B?|j{:pgoYs#NFvac}P=?]4rcQJ#-*E;cu$_L6?[');
define('LOGGED_IN_SALT',   'KBtPyr2p}MEY39A=ST^>Ct1$8w4(YXHV6tW)z-WiUwPry}J`C4AcoRf!0]I.j2Lg');
define('NONCE_SALT',       'pduFhHEK-i6tCP>T-L5=12%Vy4Vd_D[F!ma],V:shqBVfDraE%!9r>JCY@/a)*_H');

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
