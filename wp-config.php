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
define('DB_NAME', 'assignment2');

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
define('AUTH_KEY',         'h11 mB$}.srQ:>m*9WmkiU;A-n:se/%a1uFH{x}>)Q18BU#3V*cl@*HCqYi5tDG}');
define('SECURE_AUTH_KEY',  'tW--$ %r5?.L#HJn}_sll$7H_,BLToqq!dnjWDM4nN !q+w/7_#|3w$R!WZ#0ZR)');
define('LOGGED_IN_KEY',    'Cd({Gv9G6>}4QN!ah+p&<_k4y&?jteu)^H6]aETVNs-Y}i9uc@xRY#D{8Lk[ #Kj');
define('NONCE_KEY',        '(6Q!gb]R,cj[g[L|9sIv&q{Pm:@:qE2--uP#_Ord%gn|aY^I[kKb~H<m#TElqb7[');
define('AUTH_SALT',        'ZcB3wKZ1xmVgt8k?*M$>5;KpG2G?J~Y_Hs,_zhZ7|,uN(%P }tiP15l W O{o=[x');
define('SECURE_AUTH_SALT', 'egrl.P=}muW3V(J%mD{/0]3Vea:#l6sSZcVg&-<~dD{b$3KcJn$P=4hm71`(}O3@');
define('LOGGED_IN_SALT',   '^!3BkjZAG9p`oT?k~e=c3ek{~hc:/[l#_n`QZpNp-8&tc0N~rBL4h2Lib-6^-N<L');
define('NONCE_SALT',       '(h{VqALe7|]|b7D+:d7?K5N;z_m.O{CwJe%Xi`IP:&Zv:]eC0}Ov/SZ_x/m;% vK');

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
