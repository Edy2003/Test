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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '5ha]7i|fFOh`Vo>BQbjf`(ou4.%rB&}U.c!FT(cc!t*^$[bV>?-vcmNCi@Yteb-1' );
define( 'SECURE_AUTH_KEY',  '[_p@q)Su?P,jaXXZdtA:.]oL?lk3[NrOBA*v^.P8i_Q;tvtdO[v#YU}8Nj4Pz#Pb' );
define( 'LOGGED_IN_KEY',    '?FIJ5Lt9Hl0is7*~BPLL-$T;-i^2wDwZreezx=VE+o<s|+ja*Tu(,Y,51YNa!=a=' );
define( 'NONCE_KEY',        '-R_E}@0#qB&cxc8;cv2c-H>VnNVHE`p#>6_pYKAq@kq/B~bod^Z3Jj=c:.3d^-3h' );
define( 'AUTH_SALT',        '!dXWCc!^QNhi}7O8dCz*pdbD>38<gSG<vC7KMCn{WlT-P#D-_fM|rC,O*i9N#D2/' );
define( 'SECURE_AUTH_SALT', '*p3N-JXk1P,Um#KFHt+VlS`h6?(fp4$i@d.erx!Hp;Lm+J1e~#g7oc|Wsp~8%W}n' );
define( 'LOGGED_IN_SALT',   'zk*h@/&g6}<E>^sDn@;l^M?XAgj^TC-iw.WWu8}1:r5[Z.4RooV;VckH @-.HX` ' );
define( 'NONCE_SALT',       'Z*#$%_P0{DR]yQIt&faog/@bWf{WU1bJ!3#8oKW).<2G*_}riIjJDWv ^`fA%A D' );

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
