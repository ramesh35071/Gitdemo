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
define( 'DB_NAME', 'gitdemo_db' );

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
define( 'AUTH_KEY',         'cocyt#+DI]f!$I} (x(s949Ib/0>w~apId~8mhnug<2hDE/u^LnmE-%L@vb1rVZ&' );
define( 'SECURE_AUTH_KEY',  ':%k~]OlZUh-yS! ZSFx!|uI;pI*SXq2`A4ppL~xp{94|27zLT@;X9n;;RF?t*d>8' );
define( 'LOGGED_IN_KEY',    'di}Q O*<K.UH{2q:q-16OA*4!r>E0;/zBJ<avSTwaO+fF{a|TT&zIA;lIhdYi Y#' );
define( 'NONCE_KEY',        'ye|+6&$Xti$b|f(oz7LH]k5hlB/w#~l|>@|/d<i7V(P&WM)OH&Ri0]#T6xcEs _X' );
define( 'AUTH_SALT',        '9mMT=U:-XkWF@_4#7r>jAX,zBjhHf:Fy?VQM]]PRn3]3!23#bry dLN,Ia~V1SmZ' );
define( 'SECURE_AUTH_SALT', '~(lWFV8eHo4B8K*_i^e>[(Kp= }kL#G9[t.RJctRD!Z3nLI&JT8<p44S}[1gb/a4' );
define( 'LOGGED_IN_SALT',   'pW#lf5D({ppigsC-D]<;{JBc]doH!rzL<Uq@|TBPQn?`$jxv-?=CcQ`DA829JVB/' );
define( 'NONCE_SALT',       '-Q2vTpa4.pE,sTjBf=~j}RW5;s6U+y(c5_F!oNT!HzLBnO0qhwJlJz>WQc$ega?^' );

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
