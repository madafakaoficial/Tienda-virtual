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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_e60f2638c7e9a9c' );

/** MySQL database username */
define( 'DB_USER', 'bb76ead37e1fd8' );

/** MySQL database password */
define( 'DB_PASSWORD', '09d56502' );

/** MySQL hostname */
define( 'DB_HOST', '3306' );

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
define( 'AUTH_KEY',         '|EWY>7EhI[COCU)x9MF;3Jkt-q`SbeQ|]`{k:`1.-Zn|Db<c}o+l/iQY3TLdPn0O' );
define( 'SECURE_AUTH_KEY',  '~-Wb&QP`WJz#0sDWW4dP{HS-TcM1|-2KP.)_8z5aa0A,!R1rh%PrT?qoL~YKavT`' );
define( 'LOGGED_IN_KEY',    'yU61L=!7zEVqfq4Iy.rF-tA(N,X3aHaIv!X7}ljxu`7x!_eNe(bxS_R`FwQ]@Q{{' );
define( 'NONCE_KEY',        'gU2APfp1]]{g)Vzi@>B1lA5Ng,7A-js(XLZagQNzT~Grmo .WWe/k~ld4<Ln/4HD' );
define( 'AUTH_SALT',        'rl{{LzL=RhuCA[F}7NxO%/Eojd8/ReJRwG&zN?;Ky]$MPQK[CUq Dqjr?zNWY%y;' );
define( 'SECURE_AUTH_SALT', '>*;Fqtsml[;Qhn$m.ip;9RJI#NN]xPB0v:,w< #kYE}Rs[!&]]{Q$penDo$@]2~M' );
define( 'LOGGED_IN_SALT',   ' L:&F[m(9Z4P9q!h=EiF?@cE*^/GCG/q_E&t;]U`uN*:W?gge)VX;>m8>}0ddo]?' );
define( 'NONCE_SALT',       'T7gFp!X=B6ysQSKSMz[&!7uX0Z*iY[^uvw u/wIfnt5uCO`<6+H[6h-{xE7]*x9C' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
