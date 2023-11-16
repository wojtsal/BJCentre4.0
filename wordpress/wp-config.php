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
define( 'DB_NAME', 'dbwebsite1' );

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
define( 'AUTH_KEY',         'Y-cXwWqYGP2|Kq_J6vMTZm)Gz9|uNgqrfBY-TphCckrp/7%2xw~xwBUIA7Bcp}#,' );
define( 'SECURE_AUTH_KEY',  'P{co mPO*v-q+bsEe|(_K<1W]`IEG^jFQZ0ohlz[j:Bu9hDN@Ro_Quk8*b.(@KyV' );
define( 'LOGGED_IN_KEY',    '4y)F9_9ZB;stWOT:T9hiyUXZ#fqQs/DqYOu4Hk@>[*MpHZwX)!^)F%}FTY B6|6H' );
define( 'NONCE_KEY',        'tu5~&:#iq:DH7oVkJd&O,|E+V8HUNV;Q%)Bex~K?Hq7a&v{>7)3HSQ_F-y3(t-24' );
define( 'AUTH_SALT',        'S?3d~07/C4~J]iKo0L`eMRWOv;EF?@U6.Sy>-SpAvW1V=0gu=ysH^*D0<zHl!69r' );
define( 'SECURE_AUTH_SALT', '#wzq[,YE|yE(F:.dSe1|9(00^kBPQ:;.#P&bWT,:G!q9+_s_}vq$(|_fK}[3rm8 ' );
define( 'LOGGED_IN_SALT',   'Ih7{R)gXoH9M3KH,oV-S3_Pl!OoO]{Nu:i?7hOy4{^enB(f)5`lGvH|Ak<CwKB]T' );
define( 'NONCE_SALT',       ':=4m_#_OA0CA=hq+lRTGO!3J`Z5)?[1@wSCNVD<:D-cb^9Bz grc_AlPEyR`2{uj' );
	

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
