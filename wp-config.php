<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MD&E<y>P f~72rh[)70zWIhbrv-|:$(MP<*pm^TXO` i^EQva;{V79@Isy,DxFDW' );
define( 'SECURE_AUTH_KEY',  '4EDaW(Nt;hau,2B?t,NBl!>:5tbGd&0seqQ&k^S,)};8CP>:;mE|8p34&>Mnhwh[' );
define( 'LOGGED_IN_KEY',    '`PP9z8ebMklyOi%O>ya)aW(80$).]Zhzb<|BanD8HJb37d:;1~Q*:lXfaW1l!.gj' );
define( 'NONCE_KEY',        'XWqp>a*.*nuKG6]/k<:;Cb7ONaI||>rwO}tz*Sy4*l^kK?Jk4G/&wS_9Q&%RnQnG' );
define( 'AUTH_SALT',        'u/}17*]iqMv>eF~|zYJA:D_&^QTy#9zeoS8Z`$,R[zHq4|T]62p7T?!Z$fp<!&BM' );
define( 'SECURE_AUTH_SALT', '/(mDA%Yt)hZ8p5^[+_7#T}J^OEvVeWH?s]?CBywbE!;t;w:37?&0L6jOJeXkc;H,' );
define( 'LOGGED_IN_SALT',   'tY/S:mzUxR?EE^T1Z|CEW%HfJcOs2J+= 7nYcNn-@cE4&~/2,rEFX%_LE.J/PT|z' );
define( 'NONCE_SALT',       'f&5oe7Noju_E4UvZ62JAF-A0jEE)8u_#NT<LqfC`?,}qqY*AC#C0hF-s6.,bVw9C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
