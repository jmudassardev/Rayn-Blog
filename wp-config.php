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
define( 'DB_NAME', 'raynpress' );

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
define( 'AUTH_KEY',         'V*~xWaK=2V=V_|`sVikf^KWqDKId</)iY;8p1/H%4*S%$5%FmYMDPW-T}+gaffR0' );
define( 'SECURE_AUTH_KEY',  'UtCzLufX`9yCnx5CIejbL7A[qPQeG+`C2Te>U%W@.Zb@>CR;=d*DS#<e!&4G3j*E' );
define( 'LOGGED_IN_KEY',    'N>iOTZ=Orc&R>>V#>:goh= .M6j$(~C!6JH9}3f!,>(%wG0 S[5cJqzl6=_8fbB[' );
define( 'NONCE_KEY',        '@C:<5~b.2 3A1^:L69C};!QZ1ugh(QwXjMYhW)QXIGTW3Px>m}dL7]^yaSr3(OcS' );
define( 'AUTH_SALT',        'y.M8SA^O$Z74G7)ji5%:dtgTZ&nS<Lk(A7Vm{[ GZPY8gwl_Ic;mx[[]_1q.*Kim' );
define( 'SECURE_AUTH_SALT', 'T+fWGQ8A(:x_mks9rF,*UQz;JWco(Bl^15A-$J9l`l]s?<Ta;YWL4>N}lzBERu]o' );
define( 'LOGGED_IN_SALT',   '8HUwgb%:&[`]*t0<uD7Mps36RpX(>(}RCV2T UMT!ICC])28F+BeE5+dnTo+@U4+' );
define( 'NONCE_SALT',       'E{/h]-K`I^,~q&v7?<P<f[Y71@o Tkx.@x_VaNq.,Z(x`gh9+JRJup3H]V[@J_%&' );

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
