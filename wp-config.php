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
define( 'DB_NAME', 'rahul' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xRUsEO{~&7:n0#]|%s:lC aiV~OcZ}/x<KHfe9jkUZCD6kMvajM(10P~D*4%F.T?' );
define( 'SECURE_AUTH_KEY',  'zvn(aG0m;%9YAo|QF~OrR<r+<lvBdD7Fu>#S=_&|A_b.m@-#-qEFto$7f!Vs!*@P' );
define( 'LOGGED_IN_KEY',    '%tWSw757>ci]cKG(eKNUgyt5L>FWAx35TM&<p2pKT-9lm;]G# ;-cTfJAKNHH-LI' );
define( 'NONCE_KEY',        'HM!/@~m/~?K[=%t3Q cFe>h@sl|{obX]M$mI&mqx]Ww@cqgre]Np.o9Kqxj3QkC~' );
define( 'AUTH_SALT',        'G )v4Lje/le,~o?Ewfe%OOt?Dgz&*VZbX.@@:hr;/2<a?(A$`jN0q1^Q;m%K$9|7' );
define( 'SECURE_AUTH_SALT', 'w0ru.ybrjC+.Y+45zPYJ>pH)dm,%rJI~#_PgdrsNgA6QMp,2Z/SuxD{_HRyB00E@' );
define( 'LOGGED_IN_SALT',   '2n@dua%1^ E&*,e?9OF4om:vr5/OJUb?mV)~qs6Bv8&L}@Aj;.UgJW/{K9.X]M96' );
define( 'NONCE_SALT',       'vwb,/pb+$RReroL`i*0ytvmR=v#C6e>3py27D{7-=B?TuTQ4-1CVNu:IbMg7scD1' );

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
