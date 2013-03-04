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
define('AUTH_KEY',         '`HpM:=y+-iN5{5Li=6`g|/p,buWZi^<WO,y0Rk>;i(&+~P:w(Nn=3g:%_zW*i2YX');
define('SECURE_AUTH_KEY',  'dsmL_{;2G2V7*w<u4_uOb3bk~Y8NgLT293T2iw/ZdIks~90t=Jm:V/`<5iV+yYI ');
define('LOGGED_IN_KEY',    'q|_NIC%Hqb6?kD-(=*x1X+rSG7Y#e&1mFV}8JCS&EG:z9S!r &SIr61^%8BbrI#t');
define('NONCE_KEY',        'waak``5am,xTBvfDa|{_7DwE0xtz`mpW3Hb+ 0j[7?X/+rH&FmG0k)Ag=,:UeOsr');
define('AUTH_SALT',        'yxxpv+{Ut=(99W|^l>[.bFj9DK~RV0^^Dd:LXQ6hr2v|( AP!|[nF)ULo!/||v5 ');
define('SECURE_AUTH_SALT', '=q;&M_~9L*|y#OAN-gl;&j xuGp-{ajp-cZZ}II,{R1+`?Yd)2ps>R(|.);*d0m+');
define('LOGGED_IN_SALT',   'cSEU7n~;l-o+#Bz>bv7$(pxqSt2DembJ-w%BbWsc{.jo4fv.wa|<<-&OV8A{`l-p');
define('NONCE_SALT',       'x%f>Y.Z-C.>GFdXX3@:CZv(eB|nS@R&(+[D;7&Vq?D Dp|[).TEUJUaV@2&nx5%#');

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
