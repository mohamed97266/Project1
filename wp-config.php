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
define( 'DB_NAME', 'project1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Maic97229@ib' );

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
define( 'AUTH_KEY',         'TVjd}/|rPC;ARb$(H2F#vy`|n]$45q_6#J++|ZIM]dKUT[=xRqroo%::kHI9ACLj' );
define( 'SECURE_AUTH_KEY',  'w}b|G/v^4*%Ox$<u{t|jey+?YOh88w9w$LVl%8YZ.;`+pu^C);Xs$d]3=p4A0_M;' );
define( 'LOGGED_IN_KEY',    'C~kO3ht/p5O(g`cV_=}!p# $y&Q+c>IiMA{8N[!L8gHd)Nn6|g%qmK%%ti6rugO,' );
define( 'NONCE_KEY',        'teH,tH8907)U@b3{gYL!^LM;JGfl#5`>m&,bl?w6)Yp;vC<)6e}DTv#00 X|4lQ~' );
define( 'AUTH_SALT',        '7[=`PZGlSTwS]-;4-hO^Wx8DRQCq-@SV_r%X_UT]:1{S%pxC&NO[;TXx3n u~9|8' );
define( 'SECURE_AUTH_SALT', '>h`H(i P;Y?EltwhH-H1FQT[1EF G|UY.:lkHdHCJ;sDiffn}|^}N=_tEiEqs7|T' );
define( 'LOGGED_IN_SALT',   'X>uqS].V[R!KV*BX!wVQkwG%({ eKadf86q&+kR_^b/v/CIKF[Z^)yS[p8JK+if[' );
define( 'NONCE_SALT',       '2p[j+:CvNdKh22U>HWDJ(Nkyh5O27TN[rNF];E.WN`Zo72_%?G$A!d]CJA4IKHy(' );

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
