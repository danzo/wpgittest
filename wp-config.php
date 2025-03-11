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
define( 'DB_NAME', 'wpgittest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|F!kS8*h#rwvCo9k.>pOzWd]QxhC6gh[V1K<0MipfNL@m8rZ-]F 0LdSe]B!.EO>' );
define( 'SECURE_AUTH_KEY',  'a&s$ko_l/fXkyUog2VcH>+&$Rv+lNA)i9~YSnv:croePCKY~Dti`aj65VWZC[|^y' );
define( 'LOGGED_IN_KEY',    '|<#3TmE0zm^_bj~]xNxJ{0RAWwG#;+XO#`Wz>lDe*(gD`Q]i>#XCGU_NsQmGc-)R' );
define( 'NONCE_KEY',        '$HGUzpM`Eaz4)S`77N=QXu8}tC4v<8Nws Ek#` 1|7rL^8;67Vy,n<L}Hg!_qm|a' );
define( 'AUTH_SALT',        'HmoDYP|1ql]FA _LLSm7q&<z.r*.Ob&n7f+pAB8lxj{?Ge#P^#zpjfil0XOUlh;w' );
define( 'SECURE_AUTH_SALT', 'yj$W-Md+3?a`5{[Q,1YT`j`,o2IUCYJu[zSVEq[vm]zQZh{S&c@+Q`D)&k9Q4Cde' );
define( 'LOGGED_IN_SALT',   'jNQ.Us{U=@8Angi@UNB}vwiN{tIveU->{#bY(9/ib%)i*3o;+aW2kWHx0Iaa{x;k' );
define( 'NONCE_SALT',       'HC#,R{4ctp/o JAz2Fh ]3*,A?od /cC]!b@:fP&|`{XhR,`uIB)}.@E-.+C,{CG' );

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
