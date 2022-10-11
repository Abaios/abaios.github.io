<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u343589318_W2YjJ' );

/** Database username */
define( 'DB_USER', 'u343589318_t5ciB' );

/** Database password */
define( 'DB_PASSWORD', 'LsmHiFHFHz' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',hQWF;)Lk@}AHkZuE~o8da|J$o(+6B8?}s3Ew`fVn,yZ@?SI^9|(g>0jLAlOu[cy' );
define( 'SECURE_AUTH_KEY',   'KSw ^i9@ f&+zM|fy1 BrMz]S8grT+)SnrkFWPvWk~GfM7=%SMIisF`;R uf/mYC' );
define( 'LOGGED_IN_KEY',     'T%vL}]#A^LejndM;A~r9@D1>B}yvW^?-9#r@E0!LhBIt8h0gjB] 54`j90NN07pc' );
define( 'NONCE_KEY',         '7m<s2o@5LUO6xx?8_V2,u7h^NUJ&inluN9oB=X#2CI+XpsfEw=BN[)uH.!_Bn{FC' );
define( 'AUTH_SALT',         'sZcPX[EsA@h9#Y,I}A]2N{=}6&UELFP66&yG3u?!32u.}k}$^2wMaF{rj:PI4$LK' );
define( 'SECURE_AUTH_SALT',  'V@#$RdGqKZ~(6x<bhyR-}$ Rmwz3J|4R]/VTt<u8wf,Y%H*K>UJnABM&11!naA^?' );
define( 'LOGGED_IN_SALT',    'EU.v,~0xE5NVcjfBFs#MdhLR5kX*m_YLzB/hmPM&+@L,n3ZLOxkwt,<MVAN!@pWR' );
define( 'NONCE_SALT',        'yeU%c6%x&,sRy<x$dK?/_~ MFyg;8k|z8ntnT7PYB }s}H{7j:|Y(4.$lUdRes<k' );
define( 'WP_CACHE_KEY_SALT', 'HL7Vh kF2[zuK<HV)_]AB|DH <V@FF{|#T.DN|`ZB~@98Tjbf8c[7=+y.lla1BN#' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
