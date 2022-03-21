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
define( 'DB_NAME', 'data-tble' );

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
define( 'AUTH_KEY',         '_6RJ`i`&|5(SZhUDU utxq-cml4MZMke|_P#0nxc*5a2kH;Z}0J|K[90/YJj0V]j' );
define( 'SECURE_AUTH_KEY',  '.XbB|Rl7m2Byu&Q 3laMagV*^a+lLD[0nulEKP|F-U8I=Jrh9`tToRh:( z;vw]F' );
define( 'LOGGED_IN_KEY',    'N@^&eA{m$p[ZIzc}zl_|r%xg`ME;8!<O[i7^4JQasrEl#@hNq2{{k7Zu((6(oj-w' );
define( 'NONCE_KEY',        'sWQ@+_0Wk1VKzz]/N},+xsd%GWn1.uO/?R1,UeW|] =NG>?)<U=AMldQn.=sbXo$' );
define( 'AUTH_SALT',        'Yb6Oz:Ez!bbbt91_2T2z))<[,CF1x]g+rE;](.Q9qm(Eo}-:`5Y3Iwz8{+sUl)E4' );
define( 'SECURE_AUTH_SALT', '|PMN5 #B|+9SD8H$`r9` =cAk[uYw~$N{o>XnSC76n-R|*G6d;y%sR`pY?.3DUVV' );
define( 'LOGGED_IN_SALT',   '/empM)m.#<{k@Q~Sp.Y=)v)X><>X?=4gh2tAGqPOQ>`W%4E5`PC6X<eT$nc6c%HC' );
define( 'NONCE_SALT',       'a,H>vu25YI/j;78~N=FMH,1(d_7d4~Z!qHh@^~IszuOh&[n$|S6RygSc.TUR~)eW' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
