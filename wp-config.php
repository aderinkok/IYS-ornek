<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-abdulmelik' );

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
define( 'AUTH_KEY',         ']vz(2OVPYh0ykUc@ga-3D5fp5EBV$R-|,iwy!U+}jm9:V`rRX1[:fQ0P6Vf`5rjp' );
define( 'SECURE_AUTH_KEY',  ']x6/G-}Bf<$mn$^j(<[vN`k<~%3ORxS5@%k;I%^*zo}=W6KCm~$/%Yig7r{|a%[?' );
define( 'LOGGED_IN_KEY',    '{S5G50HrB2h#nEko;LjQjF);5/sGBX5 O5Zw;Xqfvn9P;dFj0g!!j:T]GY0{EIz7' );
define( 'NONCE_KEY',        '1/1m}U_!+F`<.RN}]Mbu@X^JDSHq+-0CWcDDPsy7g3(NkyaXPtu/tuZ;O0{Dje%#' );
define( 'AUTH_SALT',        'T5UmRNe$IvzKk}nQru<N:<SdJ6;8kr{2Hu[=0f.^:G:Et8.pWz&alMbxP~+fP4L3' );
define( 'SECURE_AUTH_SALT', '4B05b_t6X,B:2}CJpi&6(Al%gaJ6& s@bkV]3+ea:wIbLuwf+u5TL>GIgxc3zHpU' );
define( 'LOGGED_IN_SALT',   'It62TRp5f^3Q@svU[_k^UEk7^C^/>ru(p-(597Rz?29o>RLnAirA=WC,F9=wxxAf' );
define( 'NONCE_SALT',       'e9!mYm]o1!x]B n]3E-[j7Z|s+NI^`IFix+PSi1Ctk^8@y#ds[vMCBAjk@)NLIM0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
