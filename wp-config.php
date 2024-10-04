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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*(BnA;kB/+u1L5:aZ!/yJ`h>HEc:rEcD&_TnkK&Gp3EQ!KxA&zHX+[iDhwM|L7Mu' );
define( 'SECURE_AUTH_KEY',  'X6b.G?+K*Tg;:~8t57Jb4[I*2`tsD#7l(P;Fz(OB42iLv]~yN05tDE[WC/I1<[U(' );
define( 'LOGGED_IN_KEY',    '-5Nig6TlCIVeD${oSMeL6N7he{Q;gD6?Pu=eNx#dS5r?<nud*Wq,.z&pt82A>M/F' );
define( 'NONCE_KEY',        'spT,JkD=0|Htld Ppk-mItUo)AP[KKs%?!M$Q0`4%zJqO,a4L+sp!F~m8/0X%>c[' );
define( 'AUTH_SALT',        'BF<t;3/x&hIm:[TJ0q~v5!i;8>!mZ$3N21ZiE|&I#CJa|>qJYL$$Kli3TLwZ.!ON' );
define( 'SECURE_AUTH_SALT', 'c/g@B]HeQa g0y <eu!a3s)8Vcpv7d:;fJppHwwYe@Qq=*go8>ZI;8:41kRud2:!' );
define( 'LOGGED_IN_SALT',   '}d0Jm!c^lTUONDarT#h(XSBAD=[M.1!Bhs7*@F61h67]c/~UbdQ1D}wgaRl;Z.ee' );
define( 'NONCE_SALT',       'Vh<lN4x51hi_e>y`6ivrmTbLdtw8~x0ty99Sl{52jRC/I*9B5h2 ,<mK29v!K8xK' );

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
