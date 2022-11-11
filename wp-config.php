<?php
define( 'WP_CACHE', true );


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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u971670766_1RhMR' );

/** MySQL database username */
define( 'DB_USER', 'u971670766_7R6dO' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zQCTutBGsr' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '$fQQ,~ _8:44^RV_+TgN#&<,o8pQd3y5EI$]uHlQ6vSMegqcfb)n^sYwF:%kls)5' );
define( 'SECURE_AUTH_KEY',   'oxR$s-9DV]^s1@&S21/y;Sh~mv>[2b=Y4kkQ7d9r0i9S*t%U/ys.PWWucsNBzWx2' );
define( 'LOGGED_IN_KEY',     'KEitUQB4Ck6FmkaX6vV=k<^h4CT*r,57Z18gc`GTF~I7pyMY+N:a:>P`TCsWN|y>' );
define( 'NONCE_KEY',         'U|! JHc8Grl4SiHsxTE[|JY{kL<L`^Q7h-},@lLhw3feaIejv:G<Md,<Wz@,6Gz.' );
define( 'AUTH_SALT',         'wn_YH]W9elGgFQSc2Z%(8-FR;c$o81**JaNuHwq5r?BTb>e?pb!x:&_ESXp`NliN' );
define( 'SECURE_AUTH_SALT',  'aHp{x#vq0P$u{(pEOJhY$Z5.<sJhw)Ja$Ij*`hR6IIC_J-J4reY?).UV`{}p#S&T' );
define( 'LOGGED_IN_SALT',    '?]7o eZu>)K<.a~bsb,D@?ed3|thaxl|KX#{ReNSawbx?2(z=H0S%yV([_A]GqgC' );
define( 'NONCE_SALT',        'n{}*-o@B}wsc?z)Y|aD}<}DL<ZlLa`~n0HaBSu^7<2aD5iyjv}B2?~%=V+u:VUqg' );
define( 'WP_CACHE_KEY_SALT', 'Jrt-TR14AK=u9N@S=3;8uQO**yj0A1@gK_YWQOEo%9(m]Pg,h-iMe/l4;-`dfdJ*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
