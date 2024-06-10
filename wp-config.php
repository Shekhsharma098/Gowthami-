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
define( 'DB_NAME', 'Gowthami-' );

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
define( 'AUTH_KEY',         'z>:}420 2XpKVZSiKdt?N509(r(a!:V.}9^_7c/A.c>R;+.V-GW&~dVyPA0dGx]b' );
define( 'SECURE_AUTH_KEY',  'R.-vTLS.3qqYwTLv+$bdi;t`@G9o#,/;ythcm2h8JL)7M9vIHKpc~:Cd]5HtmdTX' );
define( 'LOGGED_IN_KEY',    'q`~TxDF !mrEH-]uO6=,_hR=QMV4r}lR2v6?v%sKO:-rT}FJ^y{!`I7gD.*fdbS2' );
define( 'NONCE_KEY',        'Dv3 }/vN&T<Ng}|MwuY9<3$D@g`XGC{bi:q,^k>j6O>eEQ.]C!]rLboDbo>3@H&1' );
define( 'AUTH_SALT',        '3qm@n1@gaJ;U)mmal/P]$-uf_G1[^z&cYXXm*Zwo1oy(E.?_PMafMVT9MS;bhB:7' );
define( 'SECURE_AUTH_SALT', '}dBr:E%mgys-z3qq1r7|SXG~)f)~.^rhixjI/O7eSxw8ok7^)9hqBBR1 vz%~LoX' );
define( 'LOGGED_IN_SALT',   '&c-gV##:h19 48OmIexcc=XLx;F}XlG`tt(LYX&:j9g<#2*_.1=~qu$-f1&@DKE8' );
define( 'NONCE_SALT',       'B]OAct:l5-H$Qq5w5#OSI*7u$-_gg]NY[<:l;_S&O<W&kNn/&^4++JLCE7a%s{ab' );

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
