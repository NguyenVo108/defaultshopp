<?php

define( 'ITSEC_ENCRYPTION_KEY', 'UVd9UWE6PlZCNGJ6bnwlW20lekVYViBrVjZnPlNtZSBPLGdkNmc0O0kyKCVtWjt0TXU8eyh+dmFRdllwS1EqWA==' );

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
define( 'DB_NAME', 'shopthoitrang' );

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
define( 'AUTH_KEY',         'jh4A,~uEi]L_D.+df?znAUjJn$C=GXy}UPr=l,;`Zu.p6`~FXL&xeD`?*G>ARnJB' );
define( 'SECURE_AUTH_KEY',  'mAvmF/k~Y4/$!cj$*++KV[{I|m-~x*:D_IA<)54_xN=0b=,kicq{shS?gwOEq_L7' );
define( 'LOGGED_IN_KEY',    '|O7$A_1,)w;9cT~<Wm]Ujx$}21`D<[U!F (q;?S0#vj6=-*`YPo>dw*S/Px}*f;m' );
define( 'NONCE_KEY',        'e;Vf/[IM]ln4M/:zvHVEs&<m+k~T?/L4kJN1SbkKWZT%FQ6C(K$x`NRt{l5jP%+b' );
define( 'AUTH_SALT',        'hVvH33G>-W!ZjvIXDru]TGC? 1.TBu@KW!bI2Oe5Qx?Sww)>>lv}P1~fvy0X]/7@' );
define( 'SECURE_AUTH_SALT', 'm?VX0s@vdn8c7:>(cqa`@IAve[n!@uz;{6hErKmULv@W79G^<$b_eI44-]ZLTPX3' );
define( 'LOGGED_IN_SALT',   'sKw2~(:bPykT%nckX~RW*q|?r]+*#HYwQlAh>}%^}1;Z<jf9,6fOgJ9vPt;PVEP!' );
define( 'NONCE_SALT',       '3f)f1CmJ$CkXm?.JKKqy0|E,/k7B 1{X ws>z:% >dW;z7EeO+Yi,u8~69dXun-[' );

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
