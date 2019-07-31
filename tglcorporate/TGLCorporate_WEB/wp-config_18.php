<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tgl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'oUM)G``R~6ZjOX/o<=_?Wp|S>lgS*/gh,H+1;/u~,l2EaMk&yO`Vm5:YO{*tjwAF');
define('SECURE_AUTH_KEY',  'SjShgo]]BM8CCN>x,u5&R t:1%&[s5j?-OZ52yAE-+TRk/MgRKQ,6N@|ul+!j{7:');
define('LOGGED_IN_KEY',    'gI?EyYwGc)fV%$<Lhx-+O~GVr$hLd0ySP95@#bQ+BUVVrDG$*r>RRmd];Bo1jxQg');
define('NONCE_KEY',        '88o#]i`JxwQBb+N>MNW9,>n+)Bc-9,:<Xet>/0Ot]o-j`VplRBP.<Wo(phNFW+a^');
define('AUTH_SALT',        '/Ux5UVTs[DEHXJG6cB;%-%-mkRw`>_fC-iyCnpxw!SjG.i}y+g@b9`6:r-|0f,qm');
define('SECURE_AUTH_SALT', ';e@#^|il?.tU)uIrYAAErAP]aqSL$#D%~va=M2`j:|B-J#Mi-OkKr_;-||tpB[$Z');
define('LOGGED_IN_SALT',   '+7s}YsL.MrKQ5Y}yY{2iV[#y{m=bZbP*7Q};r-`BzGf>!F-EtEC=x9VlkjIhgj$Q');
define('NONCE_SALT',       'xh%gU#Y.]Nx:64sNGXZJX/n^*%OS>wfe>#t|h;X|b<TQy(N@^~h>[W[-Q)uN4@mG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tgl_';

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
