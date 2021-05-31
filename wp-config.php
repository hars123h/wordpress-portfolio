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
define( 'DB_NAME', 'blogc' );

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
define( 'AUTH_KEY',         '7{qSoc5j-LER8rHAh2Ojss$~a 7f>|im(FRq.odJTt}iXk36LT7$4?3mu`6SEXX}' );
define( 'SECURE_AUTH_KEY',  '^( sp3cURZ(C`>va,S:: UNF52dn^KDc-ddVXH86s9AG&vf)RLPz.snr,!;,,;DW' );
define( 'LOGGED_IN_KEY',    'ld mR<(D&H#=)[]m7DckbofBc;~E(3FIqYn_OdA1~>&9Q}U+}.&K=!gICYHRcgq/' );
define( 'NONCE_KEY',        'wC-m[hm&4gKjNmX_)1rrR$[V1!I5zFEdR.fh~MA6AXYeiYO6CiqpX0U!C:tN2e%u' );
define( 'AUTH_SALT',        '7D2Q1x|*HQ4c)~D:`ak[/:^#h_K0Fjz.bJnk*&FD5RTh5dnU Z b8&HYqMT,KmZ?' );
define( 'SECURE_AUTH_SALT', '7;dv32mQd#tm%PiXP&8XGKy7D^BsYC?9bA<|wI;r[p~#MF]c;?Ihk1hr=;D[3RV%' );
define( 'LOGGED_IN_SALT',   'dRiDFL=I5NsjMpY-Oap,my&U,QKk[u~.YG7algc-0{IdVGeZ(b}RvO4_Vv9`y`MF' );
define( 'NONCE_SALT',       'nEzWKban9MRE4NNszA$hnMK37-TuY$n$A-=hds{n=AdS+7B!Ni&l$yTYHAB pyWL' );

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
