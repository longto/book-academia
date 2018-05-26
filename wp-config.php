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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456a@');

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
define('AUTH_KEY',         'G]&s>oy/gG~,Bq&P(]GZSZ+[K22~8FkQGae+y#Iayqc0uCgOM7&+^GVi.xJp(02u');
define('SECURE_AUTH_KEY',  'r<-W[ f&oX>>3,wK;Hj a4Q^:rMDDwd<VK(TT%i&{T6pku?S[VwR!(ttOo@^Jk(D');
define('LOGGED_IN_KEY',    'Jziwm`(XrF)XiKfN+n_utF>@l$!WjKXdu+t|-gG>w@Bn gbUzf$Nopf1LG`I[*3,');
define('NONCE_KEY',        'jAc-rYV``GA4+V^F*(M%zcJku4L./)(%N:6YXv/pD$*r@[pIX{4CkFN]+[q>f#Kw');
define('AUTH_SALT',        'ClxlGUcu1:zRmmCu-N|_<[,7:M[QpTYluAUuO.D1]65A<Vvrjevz*,-/UiYg+;%3');
define('SECURE_AUTH_SALT', 'RYs~A8[A6;^.<UP%j13N%Q4J3,i!imxAFL|:Inz)<nWr6u;!1V5aH _)(WvMwwI5');
define('LOGGED_IN_SALT',   'o~?i nGU2xKSQngY8$)v!=(-U ~]LZ~^,cUM.Tu| oi:GNikgru&L7pZNN1VbO/+');
define('NONCE_SALT',       '4oXzS)(9cWU/$!)zWX9*vNvv=W)}HXKf.7Vm5A(IbRJ WT7VcvDFa)8<Yd@-1%AO');

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
