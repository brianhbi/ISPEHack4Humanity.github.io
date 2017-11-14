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
define('DB_NAME', 'hackathonWebsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'AJSz93zR#]&Fc]c0?BS^EjG9QePG/V(~U6(+D$<m7#=7Ll%(29/A^RX*WJ9O?E{G');
define('SECURE_AUTH_KEY',  '*;xSP%+V_yC[Jds2q,+Iw?p7Vn<8+kO6O(w@f]dJ3= o_v}noH{ol{;S^e&5IQ9[');
define('LOGGED_IN_KEY',    'va4@dHal67$3KyFtI =jQA Qxmu/beNL/%#_av)tYeN-#qBo!vPSY5;BL/Z{9$?d');
define('NONCE_KEY',        '+lx=8B(j>(t+=G`voDE=7lsK%l,E0)8N]Ua6;B53KQjv]g8pZfcA<bVT![n<g|F{');
define('AUTH_SALT',        '1$kTFdrhg <f*@)Gvn.Xfh3uY0y4*l4c2_?b$j5ARx-BphsPv*rRv&{7r^>_<>.f');
define('SECURE_AUTH_SALT', 'weoD>D)&ZF3HoYhI6-4urJ~C{sZTpO}--`Q)X#MM2NtoqDzovmnqZKk&%HUh.0@I');
define('LOGGED_IN_SALT',   'InQuTw/GGw.)McU2n&7]jr`8M/qkm^C^Bq1w7}`C]$8}]U`sAAE8[0JG[N|m1%fS');
define('NONCE_SALT',       'lkVi{Fo{1QPALOU4<&WElk+6l<.KaO{&pqWQ&$^ 1 lcAx(]a<JQpQp*39!wSY)M');

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
