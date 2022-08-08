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
define( 'DB_NAME', 'mjasi' );

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
define( 'AUTH_KEY',         'bdk{zI[59aTe]+;G+p8w0t)tw;<[f:UJ^V4t#P,G.XjT6,HOC^aeh@V]N_[&pK_3' );
define( 'SECURE_AUTH_KEY',  'ycf4S>.ajxv:8by8?%Q%<Hgx~EL{iJYKmNx.?:SkbAnT-%pW@$}E+zuxX{!c79~A' );
define( 'LOGGED_IN_KEY',    '6TAX@q{TSAU#XgZ`yxeTW:6r D.oY}|5n;4x.O.kH8=miz%~v9INxi>Gcf1+N|~.' );
define( 'NONCE_KEY',        '|YqIoY FwXQ?IfN}C0GYEb-)[Q-JP]Lg3zFPgQcmdx[iiygfZ47*?8D2=Q5%91?!' );
define( 'AUTH_SALT',        'r|i-#x6gkz@UP~}E[5IH(qG^5-`}G<e@IU0nX|G*7$p1RAi4v)nYFws{Z%.*R3AV' );
define( 'SECURE_AUTH_SALT', 'R>%.|~MkOR>~ex!qBg?4j<ju93%y*+w{x{(B=T.H[:W0VsYH+|cSa5w*Ks&JRDir' );
define( 'LOGGED_IN_SALT',   'a<1AzW:6iRZV|,z}/hxN`Q80j0`-)fAjo{gxMDV}#FyQeHN=FA!kA]TeL^om.]G[' );
define( 'NONCE_SALT',       'pg6=.}Ex+}B}N[Xi9- :S~ <fPmP*SHhRE^VD`YMi-6wg$ 5b+j:A[(Zy}~swlbm' );

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
