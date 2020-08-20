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
define( 'DB_NAME', 'm-hassan' );

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
define( 'AUTH_KEY',         'U]bS>ft]#SG=1*J|~Hq+kJV12@$`;Om#t<oqu_(/]u~J RY6{nL-),lfG[d!XB-v' );
define( 'SECURE_AUTH_KEY',  'm hgfuG:n1Lg$Na8Gm<%.&8loafl@i*Rwpf+blcUQ5ZXmSs;YXax8=-}7cM86&#l' );
define( 'LOGGED_IN_KEY',    'z=,OS6 &!:a(El[`s&v+lZbs5Bz>S{%oa|/GG3THBPnrHu#$z.^1|h3ApTDR5m(r' );
define( 'NONCE_KEY',        'J~yOWr1./u iq?X$iWyvfIu+J~+%rd`RpBz/;#nt>^S`.RkkeQzD%(t-]|qXTEpK' );
define( 'AUTH_SALT',        'bV_3wIL1gtNT>8wf{+v;T7Vjv_.=0xk/(uP19:!4R)J`adO{%1tDb.VljY|/@Tx7' );
define( 'SECURE_AUTH_SALT', 'Dba2H|zHK$d+u/+$(LeFQ~`EsC>w= 2zlO:Bl/6F#*@dt8=u|9aERyBeR8BEG;$Y' );
define( 'LOGGED_IN_SALT',   'ZbaXF{O+Du9Kxg }/%wo=8v#s(&k]M8YVW(Cf`M3s9IuIdH-|Wf^NkE2#{sg: RW' );
define( 'NONCE_SALT',       'W[?#|bu[U#dPqCnuK|9XBmu=Fc7cNjswwM-b^:??qRsV8I|QzJdoEBkmk;?O/u_D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_22';

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
