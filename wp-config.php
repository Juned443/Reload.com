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
define( 'DB_NAME', 'reload.com_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1#Ju@4A$' );

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
define( 'AUTH_KEY',         'zGx^xa{*?zRv[M}h(GAVB1p4$S!735^QWga%YFNRoo)y9~RP~h(zOy*lr1Z=1f?d' );
define( 'SECURE_AUTH_KEY',  '<!_6 AKl.+3HSvY>DGE0oJ]Z2zImp?OM.p?Oh9W)CrKxZRX`rVy?OQjHAq!ai4W>' );
define( 'LOGGED_IN_KEY',    'U70*!ZVmdf?%vKm[u2e}HPFhFBB##VXrrbQ>^?h`6>2vN}~W)/tv4~]GlosA(t}v' );
define( 'NONCE_KEY',        '6!KE,`gUwa<N#9g/4Oe1OZp8|h(l:g:7.2]4qY|K?OZI9}Rmhkwh@SBUUTad(4FB' );
define( 'AUTH_SALT',        'aGBen2 i4F[?XfiGm>.Fn_%?o}Irh[g|h#`]Ent>_P&Jgl{*u`u *Pz&X+Ry+;kV' );
define( 'SECURE_AUTH_SALT', 'UHMGMVi)6|Ja!<Ah;y#bC0Sd<8Kf1Ngr4C6:~@;K@ 4pVJobqkeLK.?</oU8WVdG' );
define( 'LOGGED_IN_SALT',   'd_P7k-K!q+nK!E_I*;)|>`9NT|BDI&MS_j)vVwMcWqU&1xK,3sPC-LUu*lyzsPq]' );
define( 'NONCE_SALT',       '[%G= %;J506nQJY2$9g|vf@i$>)J; 3;F/[OoUTN0M}7*AuF^N%2RVcy}_JUE_Ip' );

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
