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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asphales' );

/** Database username */
define( 'DB_USER', 'poacznjdfk@asphales-825800527c-wpdbserver.mysql.database.azure.com' );

/** Database password */
define( 'DB_PASSWORD', 'Support@54321' );

/** Database hostname */
define( 'DB_HOST', 'asphales-825800527c-wpdbserver.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         'G >?WA8]5Z;}r:kaawp2D@R/i_~(yZ=5Nh4Zhl?&GDs;L?|>ODuJUr0rF^6w`@9_' );
define( 'SECURE_AUTH_KEY',  '$4rU~%V+DWF*yy+A]W<!zuid!d>]j^_u$ Va]XL0lQMh6H`6e%v=(l<#ZXpXnD-@' );
define( 'LOGGED_IN_KEY',    'hO8^YvL@`QCv_AM9/d;O:!bj&1RniX)uY/g]-;};ZLG#vP!z{Ghy~Y;[YLsIl)]J' );
define( 'NONCE_KEY',        '=M~sP{72+kd!kU8L0DuZ@3g3$f%Y8]EcL;LJ@EL,n#~&gVVXIUP-q_,J~HaHq!78' );
define( 'AUTH_SALT',        '!`]1 e|?s03&Ff!-wClgTT?0HeA:hrsoUve- -Z8tZCpyeV5M{uWMRwmCJ0ZuSvz' );
define( 'SECURE_AUTH_SALT', 'Mo~=%sBf4>vh+/)?<Z]ERb (.tzs%_qz.+`{Ty,N bnc8W_PJ;RLNY<Q[c7P`rSb' );
define( 'LOGGED_IN_SALT',   'zOE`!z?S67@U%4WEcS>&*59l_e96LmYdpXnkl16x|>^e.)a[f1J6_(R%ox[k}W[0' );
define( 'NONCE_SALT',       '_amZQv>5/9cR&sJr`hw3|65_m5<]Y%nH$~o+4GpXb)Y@UL=B/_@qki~f#)l1QFw+' );

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
