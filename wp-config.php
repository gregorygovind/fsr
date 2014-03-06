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
define('DB_NAME', 'fsr_ridesdirect_com');

/** MySQL database username */
define('DB_USER', 'fsrridesdirectco');

/** MySQL database password */
define('DB_PASSWORD', 'D8gh?T8V');

/** MySQL hostname */
define('DB_HOST', 'mysql.fsr.ridesdirect.com');

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
define('AUTH_KEY',         'Q9zx2sEO1tINXLQ&:3ZO#V6PjBo!lu/eu2*HZqsWfvtVf**KLyp/YU%Kn*Mdmm1F');
define('SECURE_AUTH_KEY',  'QdT)p(Xxou+ts3f9isz/^^WeURq~zh1NAcSO*Ll8Jdq^#Kr;iZE^^f!?1h&DGVDy');
define('LOGGED_IN_KEY',    'Qg`+rLwSD_)iBYK*91/hYavPpku&~_sscH:A"On09OAk&NR:X$RUE~GzFLK`KBw:');
define('NONCE_KEY',        'hu+V13!|GgZ&94/1_pF8~5(tneYq3Pcv~U+r7JR73azA:pPgIl+@Xdr|6sT~lx2i');
define('AUTH_SALT',        'uvw2wzo9AXcjrjs!#5DP*CtdW|ftXiE"b(XSjzk:"l$BdV|*WTY32lJ;b&fVk`8:');
define('SECURE_AUTH_SALT', '0JZkyqwD4BqQMMj@;G#P?UPr(ni%qqh2~Sn9P6/hdhWuUv8I31K?;3BY/s$+%4Cr');
define('LOGGED_IN_SALT',   'L66|&U~Io|?oWCO1IbX0mB/|v)NEMX~b;8R#5?8i&"pMeAQVc)|w~@S#!rZtC~PP');
define('NONCE_SALT',       'pg|nySl#~rc(V#1PyM7XpocAKICCnYti4QWVv@M2lx4Xy#+S+g8:K$@(3RuRP?yf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ecqd2b_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

