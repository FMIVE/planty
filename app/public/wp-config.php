<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'qW<@y>2zj2Lt)aVqaJ_C:D6J9q&>7UC9lsyUf-LuUETPX8rc_*@06,,!#HCWqOdY' );
define( 'SECURE_AUTH_KEY',   'R@-L-u<,8ZSl6|t/u+o1mDsEJHqWo9%}~u%$n(,C~eu!8_9nzxIG![C}FKWz2DJX' );
define( 'LOGGED_IN_KEY',     'cPHV?bjQ5I>M6zDsQ~o;_w-.1x4w}&}%s{oxzQSq*/GmW;b;DP?qDwjBV,>!jUEb' );
define( 'NONCE_KEY',         '](7WuhtwK6R1g{dk=T]_3o^MYeaU8_j1sma9^=5l~_kppPHZM=#`5~)@LC6>Z`+>' );
define( 'AUTH_SALT',         'ZBU(0@uS7D|;JV@$(j[Pel7($aC1Uw[/h_R<x4[t`tq#1`7P1=p6QE*>K^?P$?L>' );
define( 'SECURE_AUTH_SALT',  ':K`[OwYj$@MeRqAG9R{9xs:nl;YB83zosN`D1MZ/Ha{r6_)mz)}k*udfbUKVpQp;' );
define( 'LOGGED_IN_SALT',    'Q;8N.oPS#r6z<q c[I{l6mm>Et|snQ5@P!QBDQuEp,Ai*7Kg{sw1Dl~+$1q8@V%2' );
define( 'NONCE_SALT',        'h!MJ!)aqM6{ehM(@vgoXBR(qiWq)dHg)2O-~6sn5q$vERNpU{)k|$FbAnGlMw<i$' );
define( 'WP_CACHE_KEY_SALT', 'L>Lu6 #*#$Fu-;5Sycq`TC?&oOopvY]3eC|L5SWWx%PMRcftp/39pw[}c,$m;s+n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
