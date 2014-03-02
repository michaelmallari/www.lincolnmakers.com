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
define('DB_NAME', 'heroku_57186867c29e788');

/** MySQL database username */
define('DB_USER', 'b1ea050cb0f1f1');

/** MySQL database password */
define('DB_PASSWORD', '89842102');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east-04.cleardb.com');

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
define('AUTH_KEY',         'bMH2Yb`)Q2qm.DZigdu-o+j LgJT!-156+`C%n#C{LJ{%#`P/[8/iP37FO0]*ig!');
define('SECURE_AUTH_KEY',  'X;)&DclVL3>2^@+;lFj+5-C3SCo~J0Wt<pRzmLr+{e}X8P)2wvSkx4?#p3Mo*zLm');
define('LOGGED_IN_KEY',    '*59+Z6VD3bdW1LZ?l^0e`1^qxF4<WZajcV7=4~Tytg1oSFw-x>z!AvxL3xN|R4Jl');
define('NONCE_KEY',        '&]!D7~MJ~ ecN2bVd{|@Nw7;t=|1S~sK6?+AKd>0O}.P[5S1)6+mNI:yJU-uN!<Z');
define('AUTH_SALT',        '~Ts@+IoxoM#&$&<Mj1n][GHMs1HswyeAI)$(;p<)x,64WzosdSk[S] 7=cpkhTy!');
define('SECURE_AUTH_SALT', ':b+`~.-UVoj,jUUO?+/)+{YHv)J66kz|<ojMq`}&-`:58T];FG@ZF<eRproQqOzv');
define('LOGGED_IN_SALT',   'mG^B/d|X.?Oyw|kT38lN>qT{pa:iayn+kPt_-ztDy.gO%lO$L2+TGG,iaxS<Sm:z');
define('NONCE_SALT',       '$fw[|j2C[&]{1W.so+#+e.h}cr~N+1dd;5lprN,4}MxBC-;ORv-9sP&X8x>|(CLi');

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
