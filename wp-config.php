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
define( 'DB_NAME', 'wp_afournierdev' );

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
define( 'AUTH_KEY',         'EyC-.L72XY_z#0g3$0)%#r>D&h/=)U.1xug#.Kg>Y6}_SaTEKS8$bFuhcK[ $c7f' );
define( 'SECURE_AUTH_KEY',  'F D63<bece#^L-A1rK7usi{37%cY%2jJ3YX5KcR?HDWn[WUSsKFOp.d=o-v9rt>b' );
define( 'LOGGED_IN_KEY',    '1rw-#i22ns7B?bx/e8TU7|I$yeYbNM[kh-t{>!s;~V,RNIXrtet{nuij.`/H[Tqn' );
define( 'NONCE_KEY',        '~+3IhI&_XB)Q?sSGiY+PRIWaRM_oo/tI0<YjP&#D?e.nF6)GY=Sx!eN ^D;zUFZR' );
define( 'AUTH_SALT',        'zUn|n%g&GUrPo$8^s9~PJ8`Z|v@cHhR%Q{rNoR!`]cyv>Arevp/s}scXKjB@5<]E' );
define( 'SECURE_AUTH_SALT', '1d5;a@/BXp/}R[2IFcnmX1di}Imk$q&-LH$W+Zy!gA~CdUTK&a(D9N$)8*FB%-F&' );
define( 'LOGGED_IN_SALT',   'WS<CB_{fEhQ;h2dR5^z=Xx(6jb^h|v?StHh<W2gi z[7.UiNXq-_IXtH}WMXE8xb' );
define( 'NONCE_SALT',       'XifNd7D9mL^xdp!-3B2I#0918s~r ^3St./B/i@[mm[53z`BJ[0-mvV~g7gS!!H1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_afournierdev_';

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
