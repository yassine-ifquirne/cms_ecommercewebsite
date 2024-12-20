<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myshop_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/%6F54Ic#N8D.v+!P$v{r>EkjmvyX9=`*~>Xf@n.DLD|.b?f<Y]RDD~/1q%1aqb]' );
define( 'SECURE_AUTH_KEY',  '|t,q&ohi $|WavSxR5bRZQ=<9 P{_S.ko+l}`Zt-|]@cyxI:%iFL0(sksl3E]Upd' );
define( 'LOGGED_IN_KEY',    '_U0o[MR(uv|f$1V,?-h:EC@M:Rk!fqBTTXU7C`;pM6fEb.sHcJ9cF6&g4-8yAOkf' );
define( 'NONCE_KEY',        'G-/tg{|4hN`Qv#%0Y){]|zD]e(aVXBfg+]L];yic-{XYguf5;o#8gh*{:+)mgu$o' );
define( 'AUTH_SALT',        '6DepPl?f6I:`ec?mSV1irU=iFFyZPHD2tJ02JH@)v5~K`9G(qBy$,6C.lF65/uE:' );
define( 'SECURE_AUTH_SALT', 'SJn]-GwK@RO|SXEy(Pbb0W/xXcnK,pIMEOw![w|Kyo4-vnA)>~s.n?YbQ[x;SbIh' );
define( 'LOGGED_IN_SALT',   '(yB#15Ud~78wuKR<2O*tm%Y^#hjpq_d2{9bW-HL&LP}tW@m#~z!1YVTT79O?AR;-' );
define( 'NONCE_SALT',       '!!2:[qW[(JB>B]@J^]U}b+/%dHc22/#v!GJ{$4|6L9Kv8s$uDL+_nX@nt+t~j}#K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
