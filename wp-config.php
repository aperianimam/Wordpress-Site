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
define('DB_NAME', 'MySite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']Bk58_&>!pS^Vj:-^`#7#{!Kga^,hZRf&-LX}R?GWKYck6i<&b(fGaX(eb:(Id7L');
define('SECURE_AUTH_KEY',  ' |&cmz~7!%bdmO|Cc?=UxlBp}EAPFUsbJ<H#?sFqK^+HJ]hnS80WMMm~L.{=bTS=');
define('LOGGED_IN_KEY',    'nqpNhD*E,dPA@tK ketHp?2%7w;Nd#^JQ1;-/,aB!_hL>_W_98}j-H#<{ ET5!PF');
define('NONCE_KEY',        '(>@(oQBzoL;:`mxqGav|2]XKawa#bz/C*e AY_9)L-EONkYKztjPei$a#{LAQC$b');
define('AUTH_SALT',        'Bam`l-ojaZMgH)e53?#Fyc[>f(`Ju!tVsmM&Mr&8{;&IG,@M^7^*|?&2Nmsq|]c1');
define('SECURE_AUTH_SALT', '`i&VA*N%<4gL$5 1V)}[Q=-Dk=AE^AWNnZzaOuDy{p |Qm[t%yq{RMt;P:vXzhUN');
define('LOGGED_IN_SALT',   '4u(73VkU;yfS`<(u7X1UWkU%,.33yxIy6QyJlU3TJ-y~UiOId&+&G;1?g8^ ,-3I');
define('NONCE_SALT',       'ea/|$tYP(.:,$](v{(fWl?sYFNp511nDOQ>;d[*abFR32QBx1BN6)`6bDl7:Ytl4');

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
