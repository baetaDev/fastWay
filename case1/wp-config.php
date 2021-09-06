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
define( 'DB_NAME', 'webdev_case1' );

/** MySQL database username */
define( 'DB_USER', 'webdev_case1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ch@11en9e*' );

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
define( 'AUTH_KEY',         'W7%]b!Z3mbP&.$GY5:j p4`om{ux)gLo-A)c@=_V%uQpxu}yq9(YG@4GbjK%LEG1' );
define( 'SECURE_AUTH_KEY',  '!9|<?aku4fxkcoj*m*5pw3D}pT|h4[GNC,I_<Cp`Y_U`./:`BQ/jZ;g@FbXbK%8i' );
define( 'LOGGED_IN_KEY',    '{ru>A};A5BPu30d_/11r=xmN<Cc,o*<YS7#~}2ck:..%8x8eXw+?5#xj&{c`A,LV' );
define( 'NONCE_KEY',        'PpaIojSO62CB&0,$7H)Hh:&PPIqdB5tt8ctgCiP.P3f[dO&Qb0pm|P?Eyir<.E{h' );
define( 'AUTH_SALT',        'VwflPf@aAJ^O~e$8(}?d:ANKoyBE3z_tj^+RU|dxAR&gF48yn[Ud`Fp%nvRZ>q [' );
define( 'SECURE_AUTH_SALT', '63e1GOc&}R9Xiy=O&DF$ji:W{q<4!HVu>WD(1?qPV}7L.btTHfTnetENX^U)_NF*' );
define( 'LOGGED_IN_SALT',   'f#)X1`|(;TNy:YoFuO%kjrI`e5}lv:4oVaH@;%q8#o?>!BZ01{lRM4lNPd9#nxA?' );
define( 'NONCE_SALT',       'h8KJSET*z1S ?{S_C;^~S?)4MUzy&8,fO_pE&WM)rTQJ#>g;.n+l1ha$f&^u5pah' );

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
