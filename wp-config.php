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
define( 'DB_NAME', 'sports' );

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
define( 'AUTH_KEY',         'eFOGN[-[YbF#fN!({dd8?G7J_.7]~KeToWBc<Uf1qnlGXB[]NW}a1XC(2/f@Al{[' );
define( 'SECURE_AUTH_KEY',  '1G^2OC8}NQU^)y/IY;v14EG ?O =/v(PlQl8F;oQ&m`&[yDY(_myY~B(ef)Yx}hW' );
define( 'LOGGED_IN_KEY',    ',:Bw@u>0|y<d#Y)J!UH=^#8^3cfBdjq|bLGPIRN3fEal84rn3N}OjT9B4&-{lCT&' );
define( 'NONCE_KEY',        'f8u3:vLmaTX4VH4[%|G]7oGe]-QHu:J#hge|ft2/8*(ri~DO$0Ud$t9`dpg[cU6H' );
define( 'AUTH_SALT',        'JC+OR(.Tm<&30|I)Ra6^9|]uhz_0TLDj RKk.g<HP1gzx~Q7_pbRDsZIOEVQ!2SW' );
define( 'SECURE_AUTH_SALT', 'fv0CxqM|++E)*i@5}n3~>}qh%%K~g63]IP0i}c:f;+9B#$Zg#eFy2e66r.nl`W(B' );
define( 'LOGGED_IN_SALT',   ')dO3~[h-jm6M@>{0<iBacB*S5AFk^TyN#XT!$r.zSBr_vat,g+n?O]n7;JwcFn%6' );
define( 'NONCE_SALT',       'bv7M`T}_Um4 hsV8Ag_cD xnR}12%#4R!cfH/3f_m1%?pIY`7;,%4Z]zO2=`W%!(' );

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
