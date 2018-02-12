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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rg_wp_bootstrap' );

/** MySQL database username */
define( 'DB_USER', 'regdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P0SMiteys4CH09Zb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|qxm|5S}SFL>8e)B@%DEo~wsRfjiHQ$ODe;n406/oOC-,VD|vEN_+<Xw1ZZO-iS:');
define('SECURE_AUTH_KEY',  '1FuZNoe@$K(u@e#GkuIHkdq;yK[H`gsI+ZG1>W*WSEjqB00`+cMZF-JFR/>@_5%-');
define('LOGGED_IN_KEY',    '^|8lKPmK|6L}$gxWMi1E6uk,jEFC/u[-N<> TeWS$;8%J}W(r/l>Q2Rt=NaZ5C75');
define('NONCE_KEY',        '>QR- Ul3on-HJ{8U(3V(!X|$?VnY=$(+se7Y^9H%GBFGGLFF0OY-+4:$4O={sA-$');
define('AUTH_SALT',        '[6Gi,e(|YFMR*idg!3=c/m:?nZmRV;dX:n;Rq-V|ZEV%W1Mob{{OtM?lo3H#)UwQ');
define('SECURE_AUTH_SALT', '|$|]2)3v+(`An$}9c;~6VBg#WBax0JgcT3vb8=kd!L?X6)1VXA|{2.W628MkbDQf');
define('LOGGED_IN_SALT',   'o-k!]a1-poag5m2!399r`|zhu=&8mEIP]*,~>{nR%)N.k6!?H+X<1uebB|uJAsTS');
define('NONCE_SALT',       '`3ns8$Hv27NOtfI[~SXwvl#R[nQJm2:Tn?b<}h;zfh:4+`;Z Q+W?*PYO@DirnOP');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
