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
define( 'DB_NAME', 'mysql' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1c@[HY2d7:diZ|v/2Wyc`q[0)_=RQBG<NhQA:hm6} h#wNJceAh.W6N[fK#t]/C_' );
define( 'SECURE_AUTH_KEY',  'wNWRVuNbp*;9zrFkUUV.w1CP sF`C;JiqIav5/d6uV[3DwRo1xUIVlnHkzqxq=c)' );
define( 'LOGGED_IN_KEY',    'v|oV;ln/r+wKa<mp/p!9*ngS6Et<L!I)F!xAHM6G/O3-,6)*#?i7,=_$x<~dr.W$' );
define( 'NONCE_KEY',        ')f?yQj;iSXVj}>^a(>$xJBL4c2l]!)4ynkr$vdlytRt?zdjUh|,5slR%+-LgGUD1' );
define( 'AUTH_SALT',        'b~(<L,*@Td^Bn8(F{=UmD;N#s+=2H;d72vV{[}- ?m=Y=N[0wK]K*{O#$UUsijco' );
define( 'SECURE_AUTH_SALT', 'B=ON+wD?es|SmdW8JkE[I.,J<{3. CAO^,f*<ao]nY3hjg/4w#}&[ZR0||[6`>YH' );
define( 'LOGGED_IN_SALT',   'hA5pTComik/z$Aw%Rre9Kl{pUh6`wMWd14by^hdx;SLcY^rVp`zi%ziB)%L,o!^y' );
define( 'NONCE_SALT',       'BP<i+nya0QgsIuM1]Od In4!#FuOYcLX++}sD[Qo5Gv$Ne;6`#NJfA^5ZL[uQy||' );

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
