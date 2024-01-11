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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dastgheyb' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'datgheyb2024' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_persian_ci' );

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
define('AUTH_KEY',         'l$,(0K=u)$2{*D~e^Y4Mb{eZ,sJc2OhT<ut>^Z<BL/^K.oa8;$.vY#S!>)FiXX7*');
	define('SECURE_AUTH_KEY',  '~f;2w1d<2I0F~Kx(B_oTCFYr~*$|-~v 5r,|vr:xwVk*Y&uGjnxrlaDml+qhQ9Ox');
	define('LOGGED_IN_KEY',    'X0[W*] yHu0C}/N@^reMjD)aH:1p=xmSgh>/CenKpG;z7uAKp[]{,FEH`%B3~z-i');
	define('NONCE_KEY',        'MpB7ha- V@b;Pi{t^v37|yP/Daes(&9)U(b+|!$ApoVPpfj-[)f%|6d,]]d^ZhbD');
	define('AUTH_SALT',        'O_H6`:U C++l*~ZRI^7J4-x 0u;fw}1t:C/k91-mrO$s$Ed2;=0#d.o!]*H|8717');
	define('SECURE_AUTH_SALT', '2Y+g!,4>_zo&z6xu|N!yc `T9jq>BSO%@1O<F/s0|Eke&_A-sXRGA`sT3hqw^]@F');
	define('LOGGED_IN_SALT',   'iZCWb:OO}Nj6%rFN&O..T#?dKL,0+;GXZTB8r>):DFWgOA0i*]|I .=.pwk3icqN');
	define('NONCE_SALT',       '[5|Ck:_tgQ9qQe3UcW,#Nhe9c-}`l)so,#een9r^s.:7KJW_.8&_@:S>V7[%skM4');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
