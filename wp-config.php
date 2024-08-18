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
define( 'DB_NAME', 'gbwhatsappapk_db' );

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
define( 'AUTH_KEY',         ',!Ylm#X|?M})nvuq&?e:5^c^K2fpvmL@k([#}]-!|^R4u#9!R%qcTk0x/#yTt1p!' );
define( 'SECURE_AUTH_KEY',  '4I/S6n^rt&#l}UT}iD2gs+b%,y#R0Dez[`86,PvMFqj[k2%d`qD5F@[~q.qgUxW ' );
define( 'LOGGED_IN_KEY',    '37ZFvw|Q]n4Ltu[aN?[Fb)]h>Q+sS9> V~=31& u(8OUcgLY`[z--Wzq9k/0<=x*' );
define( 'NONCE_KEY',        'vJ@B06nDJn|Cr7)mSiTUq:Q5JZBDt?JS?1U)vqHNYab(BX[)ROXA9lAG_?rKAN#!' );
define( 'AUTH_SALT',        '(BtNO`(%0>loooL#j+QW!;J7Wn<P[4xV Fn@X[%t>nvM%0L>!ps__#&<stTp~gP ' );
define( 'SECURE_AUTH_SALT', 'kiK#T{pb*3A0VT8 U|2tttrgv82eeG3BVDr%t;{1`pDVHK$q^PHn~8_A@p>{ud^$' );
define( 'LOGGED_IN_SALT',   's+%JmiwZ!*y UFHn}n?]g?%nAv@4nt^H:F^KHd~WkL^CX&IW_5tnDC4M/Xx$+%yu' );
define( 'NONCE_SALT',       '.dF1pJz!.CsGXzHb?2-}JiZr(a6cPHo14poZ V@q,~lT aX|jfeVn+xiddZ;92>U' );

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
