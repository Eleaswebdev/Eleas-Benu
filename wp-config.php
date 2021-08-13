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

define( 'DB_NAME', "benu-final-this" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '`W3v},ju)sb8YU1w3*mEECq/la/h{I>g:7|~|WF:E`C6UOO=/~D13y/1i>ks09J4' );

define( 'SECURE_AUTH_KEY',  'p|<]<V2n=vV9GHhooCHp|:Vkax90zh;aK$UyX08E}S-/i&+kDw`!LUYspR7*i 1|' );

define( 'LOGGED_IN_KEY',    '$9BirD~/n 5q|(!k_H_4oGE|`~e*yPP&]4.v!j[RZeGELbZy3+)C5PJD2LsRYJ9#' );

define( 'NONCE_KEY',        'K=sc@)2V<8emt7q]}#RP=<T]g%B|aXBo@/ze7!jgu<4Ywib*rpj=9QRr-qVC0.9N' );

define( 'AUTH_SALT',        'S <Q5<S,fWjJt8(mqc;x]LznBz}#yy}K@D0iG|Fas;gACfcSK.6r(N9}KY5,rVea' );

define( 'SECURE_AUTH_SALT', 'C:efxA1A^iZWa3Tb,*qw(8_*XkUNWJxlC(DW547_kjaW,3{7-_e ^<~`(2x0yb[6' );

define( 'LOGGED_IN_SALT',   '>p?nCg9W~)W@`/<2JW:qcv: MiX<-PRHyk<=32uJvS{w6HwU,9=n~?/+k|,0(f|<' );

define( 'NONCE_SALT',       'h!o!5:q %#0k,n$#PC*VI]|Me>;^S$on!44,{Z>CR Ea|aa0&!4vW6?@ZlCtgjYl' );


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




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

