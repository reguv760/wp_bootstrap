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
define('AUTH_KEY',         '0rJfu#sy|kq&Elnb*v[EfkQ[p%`?1&9^7Y(ysBd-,O/:wb*?S;KV6Cz)=;L#Cn-&');
define('SECURE_AUTH_KEY',  '|Rvy+i1-qKkFxFl3+uM{7|WQEfO]7%IEVF%2wzymM?9n98jIC;N (i7;1+H^rt9~');
define('LOGGED_IN_KEY',    'U$gM(g^y$10@t/ey%&Yye7otfs*hlQpx@>#E0QD`YA$3)u.9Y}dW=es}aN|lzRao');
define('NONCE_KEY',        'l1+d Hcnv_tCXH<m_D-pJ}L;_D6OF)]>PrB ~fSbOOZPw_n)qI@hHVmC=|+wl:3R');
define('AUTH_SALT',        'd&V?+eYr(IUY3Tf0|&N_vm|R%1Hxv,C9mt[`q=m3B9~kGB{,n y],>yYq#C|/a2<');
define('SECURE_AUTH_SALT', 'nl^Pm+ZkOxM|ou5dh!AK+O@qD#N>A%i@2waEA[]o}&u2|VI+ @TKHCK(qy4qez;)');
define('LOGGED_IN_SALT',   'j6MLNET,bM^#!n&r,^fNsskBYL&R2n^;rs_I|L4`k%ByY%iy6[?)zhC-+o3jb(=_');
define('NONCE_SALT',       '|wPPvem}MVj {<dR#dN|Y*:01//!lOgFu*>sqI~8paoJ71k[%n/C$7PS;5;)NClt');

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
