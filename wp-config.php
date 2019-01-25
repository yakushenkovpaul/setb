<?php

/**
 * The base confOBigurations of the WordPress.
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


/**
*  The name of the database for WordPress
*/
define('DB_NAME', 'setb');

/**
*  MySQL database username
*/
define('DB_USER', 'setbuser');

/**
*  MySQL database username
*/
define('DB_PASSWORD', 'gtgtcLA3@');

/**
*  MySQL hostname
*/
define('DB_HOST', 'localhost');

/**
*  Database Charset to use in creating database tables.
*/
define('DB_CHARSET', 'utf8');

/**
*  The Database Collate type. Don't change this if in doubt.
*/
define('DB_COLLATE', '');

/**
*  WordPress Database Table prefix.
*  You can have multiple installations in one database if you give each a unique
*  prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';

/**
*  disallow unfiltered HTML for everyone, including administrators and super administrators. To disallow unfiltered HTML for all users, you can add this to wp-config.php:
*/
define('DISALLOW_UNFILTERED_HTML', false);

/**
*  
*/
define('ALLOW_UNFILTERED_UPLOADS', false);

/**
*  The easiest way to manipulate core updates is with the WP_AUTO_UPDATE_CORE constant
*/
define('WP_AUTO_UPDATE_CORE', true);

/**
*  forces the filesystem method
*/
define('FS_METHOD', 'direct');

define('USE_PCONNECT', true);

/**
*  Authentication Unique Keys and Salts.
*  Change these to different unique phrases!
*  You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*  You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*  @since 2.6.0
*/

define('AUTH_KEY',         '=XkGh{-0aB/K|&gAQ|y-Q}tSr;Khxz<N~kt<ZL-N3~^j>z-~Z@2I7hKE1bBjd+@N');
define('SECURE_AUTH_KEY',  '62Uz[Wn+-`~D(Z|)*q?Rz=ZnYt^|0/#LRUNuATp{K=Dr9+AN0M#-w}]GJv!|fKO0');
define('LOGGED_IN_KEY',    'V#@cOyLJPGaO{Uu,dS%>i`m1L@w-%{]z?Z<+E$:y]Ro(D>{8{s]ktt*E2v<Tw9IS');
define('NONCE_KEY',        'v>7|Ynf+T$uG,J^tme<v, 9nNbzLVNCLW.LHn~-+0`O0}KQ=r-9Ub@/y2[}Oj49#');
define('AUTH_SALT',        '(]IY0XQmK^{,(*P?62<ArxHmmP]w4O q2?(u|=h<xM_D=wFeV6s?h${W*20~%Z|c');
define('SECURE_AUTH_SALT', 'V9Rbi8ysNBSxw[1WAWW;^jEkvUCkYm!0hAd!*>+P;#+UV.hU|m3vd5xLnXr7~+yI');
define('LOGGED_IN_SALT',   'r|7F+1JvbuNwz/pcokQV?pXVf6j7R8(u5kdv3&GXpYH!QfZj4 Eu4Il_HY1)xS*Y');
define('NONCE_SALT',       'aICnPML(YbEZEj4(a<H47XCPo>nMC0D~uqyM:PtZlp:1gS/49{+6l%u``IZRebrg');


/**
*  For developers: WordPress debugging mode.
*  Change this to true to enable the display of notices during development.
*  It is strongly recommended that plugin and theme developers use WP_DEBUG
*  in their development environments.
*/
define('WP_DEBUG',false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/**
*  For developers: WordPress Script Debugging
*  Force Wordpress to use unminified JavaScript files
*/
define('SCRIPT_DEBUG', false);

/**
*  WordPress Localized Language, defaults to English.
*  Change this to localize WordPress. A corresponding MO file for the chosen
*  language must be installed to wp-content/languages. For example, install
*  de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
*  language support.
*/
define('WPLANG', 'es-ES');

/**
*  Where to load language's file
*/
define('WPLANG_DIR', 'es');

/**
*  Enable Multisite for current Wordpress installation
*/
define('MULTISITE', true);

/**
*  Use sub domains for network sites
*/
define('SUBDOMAIN_INSTALL', true);

/**
*  Multi Site Domain
*/
define('DOMAIN_CURRENT_SITE', 'set-b.ru');


/**
*  Multi Site Current Root path
*/
define('PATH_CURRENT_SITE', '/');

/**
*  Multi Site Current site Id
*/
define('SITE_ID_CURRENT_SITE', 1);

/**
*  Multi Site current Blog Id
*/
define('BLOG_ID_CURRENT_SITE', 1);

/**
*  Memory Limit
*/
define('WP_MEMORY_LIMIT', '64M');

/**
*  Post Autosave Interval
*/
define('AUTOSAVE_INTERVAL', 60);

/**
*  Disable / Enable Post Revisions and specify revisions max count
*/
define('WP_POST_REVISIONS', true);

/**
*  this constant controls the number of days before WordPress permanently deletes 
*  posts, pages, attachments, and comments, from the trash bin
*/
define('EMPTY_TRASH_DAYS', 30);

/**
*  Make sure a cron process cannot run more than once every WP_CRON_LOCK_TIMEOUT seconds
*/
define('WP_CRON_LOCK_TIMEOUT', 60);

/**
*  Cookies Hash
*/
define('COOKIE_DOMAIN', 'set-b.ru');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
