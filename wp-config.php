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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'y*qc9lyZMDaOvlzz8zxb9]CC;?`ti_)vy21HYo4Vv79{(;Okn,|w@33MHHP,.thM' );
define( 'SECURE_AUTH_KEY',  '+F4R:A3Jgzu)2Y5g&d=nY]Dkl/i5#YsG7.t#4~H@h8$>_S,i=99o{Hf`VUVWO3=I' );
define( 'LOGGED_IN_KEY',    'fE4  A&^,Z;`S>~_h*+CY7?mQ&tlc~WTa.KHO[^^whHxkHdV v)~D[Fx|1BmRMkl' );
define( 'NONCE_KEY',        'E84ZY%@[,8.3}f2rMY#m8(?^x[V^VZyt0,MSI[Q$hFQtT9Fq1vX&/A=S%6!4,Pxe' );
define( 'AUTH_SALT',        '6R[N%3h.0FL6(7Jt$ /odF!x6h_AHzw1Nk0Yd6(,&BDir&Rk^v|qEK%b&AF^W;ul' );
define( 'SECURE_AUTH_SALT', '{rL4`CNCCa}omvSwda2.ZAHzH14+(1{(]+ @ni/DuIA#39NaT9N-~fnrWVn.F;mE' );
define( 'LOGGED_IN_SALT',   ')/fru;`mbQ@I!,on}hWY9oO%5pbAhm/8_yiNf=SISX8bb]>rtH3DyepXbAA1(X2M' );
define( 'NONCE_SALT',       'PyPFe*IO+xSZm84hv}7&Uw~_vN|4|9/1[3F0113Z7:Ts+v3$z?Yf=qkA|[]51L}D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
