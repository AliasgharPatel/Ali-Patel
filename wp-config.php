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
define( 'DB_NAME', 'aliwp' );

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
define( 'AUTH_KEY',         'HZ<FkA8X,!afrW.`^l,<X*vp7<e6dFi>g9}H{X!%!ju+Ib mQ-l^`w+7ZU#J8j(e' );
define( 'SECURE_AUTH_KEY',  '%]4Lhj6wFb+5e0S|-^D#@A5Q#.[1(%60|p,KfZEOPupWu=UsY(99FPCp~/CyK<h2' );
define( 'LOGGED_IN_KEY',    '0PWZqq5#HLb3d+@4=nA2=f9/Gr{bC/Xc=_K DSp~Zp@Q?.-bTC!O3DlDbF8FzxM]' );
define( 'NONCE_KEY',        '<B%cfTdywpt)dsOtf[v27hZMta9#^hbb6Wx)0-S ;&8+;W.NsC+8mu<VB>&1U*<y' );
define( 'AUTH_SALT',        'YfNg U[Cj<$K1]27FTRuEN #/L@c#dXcOu T7gj(WgSQ_lsaC8YHZmgM)$+tkyXv' );
define( 'SECURE_AUTH_SALT', '7_cOY.;n`WNv^LP:ckyC=/.si3JU/8=]C*dv%f+E+=p[*k>VI5F=?SG @aiR(FT[' );
define( 'LOGGED_IN_SALT',   ']dK4O<WY|cT19Rd}+zsTZX6qR4T-EL@>I5`t([/GnZnnW&yte*F?[vFqESJc=d:f' );
define( 'NONCE_SALT',       'DF@Nx.q )kd6=OktJ7-7}5{ijfk>s,^o<x`-7xfd{zN!kI-thd?Ig:Qd_ft7(3>c' );

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
