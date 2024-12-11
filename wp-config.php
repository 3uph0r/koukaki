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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'p^jUMOidJ,Ng}IkTrKy7)~2fPfGxDm%>OrGEHB6,F,:#CxYa=Y&<Hb$p 6v5P![b' );
define( 'SECURE_AUTH_KEY',   '[k{$=RJ<}favR!><`N1$A%p9i:}xg?(g<OLtGQ0Yk4]#vYFYIru8xmf7:Zk:X&L)' );
define( 'LOGGED_IN_KEY',     '|EJ8e+ az>Ni.6=P?w33yT._Xh!G-6}Q,N*Tsgz3;Wznw6cI:5{eh`3oNLJvt{W1' );
define( 'NONCE_KEY',         '1`%[_.BW:Fn;8iY!d`[u6Ags_[1~DRwR]._Xyp?_ibigp3KwjXdUkD5M?HVWZ?KC' );
define( 'AUTH_SALT',         'gpPxtg]PoghnFDO1fxW>}x=3TSXl~+?sNm;I=Ql5<*XcPZPMSsj)1Y{awha&6o&}' );
define( 'SECURE_AUTH_SALT',  'RTtYlz(+n_wY*x~H/D:Y3yC$:y@WtJNy86?8FcS2=xQ$:1,3;q.BrNAYW(MjzC[6' );
define( 'LOGGED_IN_SALT',    'CP:!fUenC2A9TqM|UG(!ce<ZY#f^tCqACV/WV+OE3x3-5LAr,ui]W).}V iIpxj8' );
define( 'NONCE_SALT',        'In~p@bOELads#dK/*b;!Bz-8bKGB&[.MJ)hp<Y[=9gsr7XGCg],Y_Y][wKqx{|Mc' );
define( 'WP_CACHE_KEY_SALT', 'LPa65<uC^W<+J*xSXq6PVE7qpwoYwb6bCX}H];s3O!JD{?zs_n@glnWh]t~D3!9S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
