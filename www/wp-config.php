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
define('DB_NAME', 'task1.net');

/** MySQL database username */
define('DB_USER', 'task1wp');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Q24VBe1XWq<*g5^C#wqbB7Xrk&u:Z=CE8u%|#PuOqtKRHF;Q{hL0RMF?Srq(`QLh');
define('SECURE_AUTH_KEY',  '0hU|@Ra7WIwHa^}aWYW#u5uS/^KV;rM;4~-6JF?$<qt-=l AMIQ]] Z N~Y:o}Hc');
define('LOGGED_IN_KEY',    'YewifL-S}3EzJZY,5Qws>7h7dB<8gU0X%V++],*@[e],e,tcdj|HXo?9;DL-^&jZ');
define('NONCE_KEY',        '1U_sQG>TvRw?V-C.(HrWyTsGyn  kpMr3cG9p7YcH*+,e&O:Mb61dV.-,/C<cE|)');
define('AUTH_SALT',        'K*U/~8VPjc@#n.~K~7q-2NS6.A].N_{{X+wAx 7GAg`e*N*G9S-ak y}X6VOgO9z');
define('SECURE_AUTH_SALT', 'TBG?w_l+6AUVOy;qjk7c;Z6(-t>0i6~jZS[2& o>&x6A%qB ^+2TJ)$md^a9NOuh');
define('LOGGED_IN_SALT',   '!X1t7^]7t/UvTRh&y0}ukVsv<pwTo827!6.uWHz[7hd$Yps]ejl@MO[5#Y}Pm)UU');
define('NONCE_SALT',       '~1.p;o R+]HA,|pV.t,,4e/SqI.{)SpCdor.PzF33HfRlNv|QDr<nzcp3!qLBF,g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'task1wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'uk');

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
