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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UwORE4Sbd@9/d[:?!-R?EA0o#lEWO$Gx*pK9c0+MBm^5`|+WZKM|WuFo%n?t|^XM');
define('SECURE_AUTH_KEY',  ':zS9o#nw A_5;=Zz|WcM=mD_PU%yCGI,[:INT!)nL;/H[f7lM6GgS>D,7->{yRdY');
define('LOGGED_IN_KEY',    '+FP]U=[H+v[!Z$[:tgK:%P5|p7W%8t_S=YunwpGWPFx,F5=:Zmq^SZfPsCX8 o<m');
define('NONCE_KEY',        'GLZ+afJ0)n63&jD|)v1_:Z]MPqyIp5+,nV-74nqho Rf*GuYMNq|u+_+WIF;X3NK');
define('AUTH_SALT',        'dz+G=ToN$s4*h-$7!PYc(+T|fO~_|jT66S~:$z-tWA*J8q|zqzyjK#Z0Emc4Soq4');
define('SECURE_AUTH_SALT', 'Z^B`zZ8Xqw$9gVA%l|xw:PiLRi5]3PBd;SOY+j1=[41y|+sy<a=BZdc>}%bPKasx');
define('LOGGED_IN_SALT',   ',]o4Ah&WQAm (i=;k.)N,0]m$TP%{gBm<#%8x%9w<g*d`9?5m}l83Zk_U-+:I 3D');
define('NONCE_SALT',       '}IhN-<d)b55Q;,k|X:WDz1|jZ=-]?D?5+ 6C8- !yT0eEO2!nqt`>=JX}C&.TX?_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
