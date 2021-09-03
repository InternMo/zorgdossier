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
define( 'DB_NAME', 'zorgdossier' );

/** MySQL database username */
define( 'DB_USER', 'zorgdossier' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Koekjeerbij7' );

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
define( 'AUTH_KEY',          'b+!V!?=[a_]@X44SMGV|1|;`v>>hBb,5+HgQhy1I*ep(8fz ,Rz*q5AW0}zG[aEB' );
define( 'SECURE_AUTH_KEY',   'oyoeQ/zIE(}2J!)o<% rl,*{n|3 )/{*`%N6nG1gl5z&B;!skFt|B.NY3D|3lz0,' );
define( 'LOGGED_IN_KEY',     '@5<0Do[_8E(9++<.LLY?5*N>BcRAm3C) Ay6nZD%Q7dAz}PB7MfO,[))`,2Sm2-$' );
define( 'NONCE_KEY',         'EgnIBRfDwWis?s ^%_~tz})F9 j=GLWbMDsyfI2kZe@TRtzlN@070Ce]F!a^.8U~' );
define( 'AUTH_SALT',         't.b^:gubU:a[5(Mhf>$szjrpdw^nd.J.sOn;|q@p-Gd1jQ]>DUJyX<eTy45PV&~T' );
define( 'SECURE_AUTH_SALT',  ':uQ,_V9*VREbrI3voWm!(xI#{#4u~V*U=L0.xu6Vq}Zl#zQib-;v`}BS9ZinN`Y7' );
define( 'LOGGED_IN_SALT',    '#A2Hwo^}l|S[OXBYOqc6Mid=~5W^#HS[7p9N&r+TY-EY@N8zAT<n(36yFGJ8A2o^' );
define( 'NONCE_SALT',        'w27Lw|_NL}TQ@Dz72~b`(#>Dh+4s:gk9Zlz.J~^_wic4Uj)`>{/09H8k&TBQ]6EX' );
define( 'WP_CACHE_KEY_SALT', '2iwLaBOgsm6?Yo`+g=%ffm[/yD:K*sYoPx/|g$zVfvtdls(97BSGj@w<k)k-[,?R' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
