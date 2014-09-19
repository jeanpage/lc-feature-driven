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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         'CzD=9d0EF5 ?#`6s%y`7B}%YZg|DXSBbY@6^GO-%u<8jL<HFXv]mMbj!G-Wd+M0N');
define('SECURE_AUTH_KEY',  'FkyeGb6#mH+{7OUd6BsZg8=n>ovdLM8V-Ftk6Uf)/@v1;a(7tD-&gX>UaPHAQAoG');
define('LOGGED_IN_KEY',    'K^@js<>LU>BNUjt7-h4bWNb&v!eGxrdh4||]1bLt!o,{WDN8R>WQPTu$w~QZT-UI');
define('NONCE_KEY',        '~GfF+.9!80.P!j[XjlBl?9vwAB|1z>!!8^L@eI@T+FvylH1-GO+-S[c}g3E_HpD@');
define('AUTH_SALT',        'zcm8 )nxvS%*/i9QF ;4(iW)+h^&WU*[KypfK]RAl|0+6x!`%W@&z6;WAnZzg?oX');
define('SECURE_AUTH_SALT', '|3N3NZ{iJmv(B(fi#mjB&F1w?DI_ &cT)ym&9KRmkH|@YF21pxD$&5[RAPP[:>8Z');
define('LOGGED_IN_SALT',   'W*M6|[I/s<8Nh[o~C!4cOZl``Kk/;EJu^)_E#l$$OolN?m-u-rlfL|+|Ja+-jeTY');
define('NONCE_SALT',       'NTU+BX|q5J~_=EGr|?X~9&xxNP`PXymYInKg_w4]-;=%-FGC0s5TC$m~_d!ZZC|u');
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
