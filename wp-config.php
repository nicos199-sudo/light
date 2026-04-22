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
define( 'DB_NAME', 'light_db' );

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
define( 'AUTH_KEY',         'WR&E.7CV7F#m=M)gtMOV$T#=^tNGAjB^Y;8[aYBGW!iNYl6E[%f#UVW6wr9!#3a1' );
define( 'SECURE_AUTH_KEY',  ';(><;7AJPU;WBVd[>E#pXD,0KP{w$sMyXwcbQ*MVWnPE?y>bV&9v>yQ)1}(U^`]R' );
define( 'LOGGED_IN_KEY',    'h0 xe]N;!l9v#Vkrcwp=kUT:~JeU_:MPC(kIp2@2zjTAw`cJ(* CqqZ{^59q5:tN' );
define( 'NONCE_KEY',        'o*sp6x6lc&/)o*b4.UL`f5b7JDEu7)3)b[:H1du#+i7WIvA2k(vg%@33bQuO-soi' );
define( 'AUTH_SALT',        '.lpX?ckeDLIqLR1h>R`/cDzzsHy_4-T6VZ4u!:u)k!8lTq+5Lh,Wx|%eVi[[Sf~s' );
define( 'SECURE_AUTH_SALT', 'YZKx5e*nN(=x~C)&u2W;+`,Z=Y{Vy66A.k{KXL=1H*=~wJLh}hr:AnS,m8iyPv4K' );
define( 'LOGGED_IN_SALT',   '9!fj5M#d2kQBGLD%15;o(]*+C/4E6{DlA`o`y_YjuU//?7}{LO+tLI_DXRq.[3bk' );
define( 'NONCE_SALT',       '#/wYj&G{HzQ-JjjS7^@8Z`fH5TO,Ieo-BRD1 J@fK&/% ]lM)*$ssEva$1-?0o|1' );

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
