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
define( 'DB_NAME', 'profileWebsite' );

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
define( 'AUTH_KEY',         '$4oOJ2<S.ulZ]klFREOl0RYHGUK+ZnX96Yvdb%kp,b cC#m^ZcmAJ?g!Y::Z#F<E' );
define( 'SECURE_AUTH_KEY',  'ENsHfi%_9={I!Q%37uCyNN6#KJ@K(jL6n4rbqr9>sGc:?%K&sR+(aG5rt) K_i>&' );
define( 'LOGGED_IN_KEY',    'u%SZEVVfyLfjr11@R%35,t#27jn-D?X:St4<|U-U%rItYG$D4HH2mKj/CGS`r8@x' );
define( 'NONCE_KEY',        'MLFyOe@9KE]}X]`EVUBR:tqC.oH2MiDj00A%+z)4nVo5{:gi>{S;QR4Uwqm}_9e8' );
define( 'AUTH_SALT',        '$/`1BRN>v$}s:>($hn~Kc:[4s@m+lp_Clk;u8f;-m}mq]}bFn45HQ.dg&iAMzWWk' );
define( 'SECURE_AUTH_SALT', 'o4Q~T*+OPg[qy!~%&_^j+QjY+Vbh[U;a$8d~M.w3<e_;-.5XD]^7![oq@Fd%J%O{' );
define( 'LOGGED_IN_SALT',   '1$rZF|lo?>S6srv-e0bm1/;-ST,}o~hhrytj?T,E7ssG>nyt_UInLe1B@]Ywj(,Z' );
define( 'NONCE_SALT',       'm~0DbN(b/Fg-sM`#I,$ZbM(/+p;(exdmVjF[46h{6v0x,#DNXK:6si{lq5wB_|5o' );

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
