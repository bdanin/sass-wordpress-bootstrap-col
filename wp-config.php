<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gsu_insidelaw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '/XwP)N6Rt~leMaJv^0d=_@|&bO7mtILP(tcaZ+woV,mtlXco&Dl8+wl+y#|--89D');
define('SECURE_AUTH_KEY',  't7w|+-9~+)OQFBPlF+@iXkpS&1oxJH^HX:v3-|V_[VmY9c)H+{Ks(&1&ZxL:x4@k');
define('LOGGED_IN_KEY',    '2w~w!i,=S]k6w-4Ze;(NVpTWV:Pgqea8Dv~ux1~Q!IIgIHaV/$,E8tZt3aUgya+E');
define('NONCE_KEY',        '*F>l?f%&q288<K^<P|<4U{;q<W%+LtVCtL+x@z=gs+~h-]uOdvSZ_~H-.4HY$G X');
define('AUTH_SALT',        'm%m(L+ZRz?R<It[T}5:ZaGep]A~M=hC#=]:E3f|5Kp|x(k>f*Ko*~u:m,6Y%,Z{3');
define('SECURE_AUTH_SALT', 'l_CCs1gm)+.lwMN(X(iES@m9Tg;V36sm+*Oq>HKS$ey[`A`IxS}mq91_*rUV ?uP');
define('LOGGED_IN_SALT',   'lbP`:*bEMK[IXF%z`;-_RJ`GG<Rj3!)P(f=_geoN{YfJ[h(xhB3es_fVkX/;iLsu');
define('NONCE_SALT',       'Mcc-t<WmRX!FtZvseAHMZ# DTQbXH,>cr<S|CEqYF]!t2p^2 =n.H,)VQ#680sOz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdpr_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** define site URL */
define('WP_HOME','http://local.insidelaw.gsu.edu');
define('WP_SITEURL','http://local.insidelaw.gsu.edu');