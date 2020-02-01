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
define( 'DB_NAME', 'std-tomaszewska' );

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
define( 'AUTH_KEY',         'uTKzNt&rQTU&oZoA8EjJgRVL,f2>,cehw.$L`885[TA.1PZ#DHgt;[K(hi#mey%$' );
define( 'SECURE_AUTH_KEY',  '(NNSdo!YLD@w._rv.^FDOv_xbY1po*D&lft+o3@z&u+N6QS8GvTEt43q[i-_2zrp' );
define( 'LOGGED_IN_KEY',    '$kIpVvgUa8| o/1M?gO1vXWl>;jyOFf`&/O%3t=(`A<H:{&THDSGG|{ruZc+42hI' );
define( 'NONCE_KEY',        ';~`fM_[P%~_`Pjjf]<7#0rR)n/O$z{q-V dCX$z9aV.w/RFkjK9:lm/i:oYJ{3R6' );
define( 'AUTH_SALT',        'xG0ZuUr*bxPllFyY={N*xN#YZX2]^?cMz?!vh5m<4g4.fP6/5d_WOJBIv(?Wqcaw' );
define( 'SECURE_AUTH_SALT', 'sqD~*|6WUK<?xKC4VwE)doa?#|)[Gc>0Eo6.b>dl.SJXX!`D{9R~[0%(7:)0r(V/' );
define( 'LOGGED_IN_SALT',   'CN+m3OV#(~~wQ]L5d.ZQOLS,TvZ-c~nLC`&iqZ#+#3DXPCzW27-:#F2LU:wqtnZx' );
define( 'NONCE_SALT',       '|15YMgLp2@<1@;olA)n)CfHMF!|~lk}/d?n~xZ:PrY4sC1a8KQA*]O 9`Tq.U TE' );

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
