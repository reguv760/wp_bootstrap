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
define( 'DB_PASSWORD', 'Bq5mu8VfRgz5eq7z' );

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
define('AUTH_KEY',         'Kouo9IdP_a-dDN*Hj-1s}c0=rGA0(5k5tC`_>tvlC63H+7lARQ+@QYMZ:;4nW/}!');
define('SECURE_AUTH_KEY',  'HmCJ, ?@E3 so^mA}jx[?!AS0m-i;<oT(+t;jhKbB8`s =Bd(6N*Z:o/|!n}]7? ');
define('LOGGED_IN_KEY',    '|oRrF72SK67P-5ojC<2cR>vD>-D&dN|k[zSEH7u@q;1LwD(-!]}C|f5:sFQ+}|=R');
define('NONCE_KEY',        'AHIXUqJ.FtydxlF*DVyq%eE0 Zq8ml+%1)DOm,+HFuHQk6!Y:d+$n3sv-8FV50Ye');
define('AUTH_SALT',        'Rzk4jb?_g<J>Y~Dx2}l^r*B,WY6U5N2(_P?dk.M=`P6Nz0S0[c)XTdhn9{Va4b|7');
define('SECURE_AUTH_SALT', '>@5XHfR(%TS`OXdty`X/YBtr`]Xizz!?9rhA]|UGOT)NTk1loe&!Zv[STZt},]x:');
define('LOGGED_IN_SALT',   '_K@}U54!n@T8@!!A}8O5CgsmUMdF=39HG2`OO(a-5OgCey{q;w0r;SpU2GTQ Y!-');
define('NONCE_SALT',       '5+Td@e#_$4Q&Viv~$LMLa,Cu-Lm4MwvF3<^QC4U>RjmL$cO,2/5]*z~JoRuYx#%}');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rg_wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
