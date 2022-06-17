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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'dI@A.(W8w(wdTm!ZR&+Qj6JR9{|=>30hcuEX>}(BXObLggc*9#Qs}yjS,H*S4RY@' );
define( 'SECURE_AUTH_KEY',  '<k)N79~L`3PbNY2c2NwCn{&F7O:-c(9d{d51 A/=8u !NRW kC0TCGzQ=952[5;:' );
define( 'LOGGED_IN_KEY',    '_qKzGJ,H#q~5l[Epo[pzEj<7^jeGu1hEgsrNZlIshw&sR_r49JNZ9lYYGd?g@2.3' );
define( 'NONCE_KEY',        '8$#GF`M71jY=DHt`r.KH.sUcZ~k#Vs|l]7kRmeWF&7Y&gD; R?UvNAn U2To4~Gh' );
define( 'AUTH_SALT',        '*T%ICdzWr:`4IG5?DfG:W.uN,GeLP(!DqO>|!%RX|(IJ1s/vEuy%ylBwrHZNyok|' );
define( 'SECURE_AUTH_SALT', 'TQ*PMoQugP{%ji[!zRYoK^Z!N`D!^X$iwXb(DTw/lV+W%0s%60(];=HO,bBUD*u7' );
define( 'LOGGED_IN_SALT',   'XYmM|>xEr5z<wF#T+3W#Y:Dts].CO$e[ R8al)Bu n,56z tx[TIdi5 ,g5+9Sj8' );
define( 'NONCE_SALT',       'T=Qd4VC7)}[pWAq7/gF1D{d5nR7ke~~xvU~B6C,A>}BL>vr#7%q8 MF1i6ixb3`=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

