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
define( 'DB_NAME', 'bestbuy' );

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
define( 'AUTH_KEY',         'DF5sA%6eb&yUCs{!6^1dy^O[n$Iwo.ekCde)5.pi.O(uM^C9 V.+D[8RW^G!8~1w' );
define( 'SECURE_AUTH_KEY',  '0pcpvIBYnP=E`+j;Jg,j.9#61m&Pw6->PB/mAE*@rhyBX[/$-!O{ >Cm0I<Yo)+H' );
define( 'LOGGED_IN_KEY',    '^zxg#U4QPr=HC-ki.fJ#O@g{oxFimK1YymdgAOJ99}c c3RGDNrH$8^6T*#txddi' );
define( 'NONCE_KEY',        'N8er_.HYgCIOf[.:6t)^7jKo2vzja|48^AVm~gg]s}Buc;=N603%{unNO.0!<Kn^' );
define( 'AUTH_SALT',        'J)(i>#jE<;(BT6VwR9?eZt4 DgCqf{b2Cg6Dh>U.w%Tc|S9YH%KcY^V;P^:mgF-X' );
define( 'SECURE_AUTH_SALT', 'CiFQK{Tv|/28{gPGwcjqe|=>`hsk[7k/SazP,d17g<FCF#.V%0]r_gX^C?Mq2CeY' );
define( 'LOGGED_IN_SALT',   ',p!WPbNyHJglM,{NT{1>@*)4LgMb-S0]bAq]w^tQn]0Ve|M%6!vff4!p+(uqEwQR' );
define( 'NONCE_SALT',       '|Ubx2ljv>P+x[@On_DG&gIFHC{4u>=hsQ6,+=0ZsOTa+:.VibV2^gbYgvE7x?K-=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bb_';

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
