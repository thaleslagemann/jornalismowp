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
define( 'DB_NAME', 'jornalismo' );

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
define( 'AUTH_KEY',         '/G<G7,UEaKAi6Qp4wwY4:_^LK-m*JAswl$D6JxO7m!ER%{K#O07%5YQV#oix5xw+' );
define( 'SECURE_AUTH_KEY',  'm%98gLNiY#5Q5>)u(s^pzhk&v?wFguHMvjAB9A5{Pm</6|`Eo2qe(3D`+XY(cq:)' );
define( 'LOGGED_IN_KEY',    '6M?7a2fcMiNobKn@=p!r>_hnQ@0Or_Ff14Xc-(.9[{^g+(p<:;#Y7 3!KO3fnAG|' );
define( 'NONCE_KEY',        '?$7*N[F9h@#{g>iRVDkk_cT;V`hwIE.6m*@.LIMSF.[`=S6{`nEkx!?I%4IbaO{_' );
define( 'AUTH_SALT',        '24miQgt>kxvHhQ/d%F3/GHv,1oIOLDAMP%s!!MjI>hreAx8a1N%5gq/Kf~(0I39Y' );
define( 'SECURE_AUTH_SALT', ')^a <sugnRYxS18^BYf3%+<SWB/EdLd>z81HFt$zv5.T;Y#5Hp;?m7V~nA=J|#Tr' );
define( 'LOGGED_IN_SALT',   '$?2/=_(kE`J<Un@r(nymypAAUB]w2u.k/ytIIi N@B1mv0A;s$-6-/$^g5~=;p5K' );
define( 'NONCE_SALT',       '=gR)_}czE?=1Cej9qz8{GZnclr#C 2W<T3|Ep:X,H5NkFJIHgLk|9ut..bq@ee`r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jor_';

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

define( 'WP_SITEURL', 'http://localhost/jornalismowp/' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
