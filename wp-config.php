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
define( 'DB_NAME', 'redmeeple' );

/** MySQL database username */
define( 'DB_USER', 'redmeeple_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tPM-4a5-ymm-8GX' );

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
define('AUTH_KEY',         'jxGK2zz!A83HW -e|`<vGRN{7p)>&rHw[M?uK+SI|_Xc[7Lx0(LnB//]-BEQ8`_l');
define('SECURE_AUTH_KEY',  '-YR!{Lm$rTv0j<U!uj@goi%)j`Qd[!lnauz||.+02a1S|pv)}Szt%T9ho%F+AFmk');
define('LOGGED_IN_KEY',    'w}}gdF[eGUk2]-R*03/Sa|/Dpc]NDzyi!4|Q>Kr{FoaRQ]%<i9%-L,I:?{<$@pux');
define('NONCE_KEY',        '00*0N4[[o)2t%y~Gip}6&~+W-q <e5D/64@T-ewcxKU4tj+)#d?REh!Ed?>2?hR(');
define('AUTH_SALT',        'OiA8e$8pyqVP,Gd/W|#J7%]`?[*)BB_fh1u5!7YT%X~YX1|B@JKm-c{gkLbh>|^#');
define('SECURE_AUTH_SALT', ';!)$K]pj 81.k/G7Jyd`iNJtZY=@@4%|WcCaQ;x1,._Zpss9g< *,_x}T6-w$r]3');
define('LOGGED_IN_SALT',   '(G:~Szg+;k;9G<A+M<4(Vj#i97yvS<=zc+`>^?I-KHRlZA}<&cRq6Z2qynX:+-?#');
define('NONCE_SALT',       'z|^JgHQ0sf{CsJYj_>Wtpi >G|5AQ6m^(a]%+w+LzJ9|A+-x;fW:YEAY?vh|})P:');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '');
define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] . '');

define('WP_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
