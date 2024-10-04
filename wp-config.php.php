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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         'u&kcgi}g0h$OYI&3g8OYtbo())jvCYI[bmo($/rtWF}R03X6voHw6)]|$Nwcj_|d' );
define( 'SECURE_AUTH_KEY',  'WjeP,ZHd6_,:9;[UV==~{yN ?+~8qdov,s5Gs7@heAf57r5*KEF[@w7v}Ss1]#(<' );
define( 'LOGGED_IN_KEY',    'ZwG+th wJ4,7<2HCv8DhOw.J*{Vbk6QVcJZ7k0>:M(OIcEZwfaNtG!c+&1IIYo0C' );
define( 'NONCE_KEY',        '|bB|Ny:vh=TKM}o5?w<dNJB2P0h@8RGJh?Q!dPEO,9.T>|399@-qi+$|tfX `+%-' );
define( 'AUTH_SALT',        '{d.6y%|kyVsDX@#9m742?xCRIk#-{UkiK%!6L6:5n}b*acOc mY[7:KHir>rluPJ' );
define( 'SECURE_AUTH_SALT', 'zx7Gs6csBY-&P2C:Iw>Y#kVQWLvAv#!?SrFoE2zb|}?]U.[!np9BfM9K2=Wm{M8T' );
define( 'LOGGED_IN_SALT',   'dTiJlX-4L}{9XsA-&cU#]&-U!P.1lt<F5a<+--H#-s/d>-3N tdMHV6;n-z[0@+R' );
define( 'NONCE_SALT',       'FC&eT2yM~d&x,dm@8<_r7Nk8,3e,ta1BYFaUT+QV|QH9unR].RrBIa!YUEz<$+u]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
