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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "minestore" );


/** Database username */

define( 'DB_USER', "root" );


/** Database password */

define( 'DB_PASSWORD', "" );


/** Database hostname */

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

define( 'AUTH_KEY',         '}|PSs{t^Tir03lXW|6;s=:Y+li8N~&Dz9]:pw2Uj1)tEYge/+E;.m_^8@t*0OXdO' );

define( 'SECURE_AUTH_KEY',  'pD 06$US*L<`>!a:Q|0V)&Lunh)&TzFYub!wEY`nNv.]>Z,GE:0rY~@C$FY_q@gk' );

define( 'LOGGED_IN_KEY',    'M-1C]~*N?L|l{p?9q~E5{h11_8p#(zPe9NSERyxqRm8/T/f[){$*EYO,(pEyA9QZ' );

define( 'NONCE_KEY',        'PbbLZV(&T}P~:H]+6?_J)Ni.cMor9Z(73vagO/=>G/ry79~/e& !KWWC4I8!b*J/' );

define( 'AUTH_SALT',        '%#2;qV#KhiyD6c%}&nA-7X(41Qz4dP5Jpyk<mwo0[uI5@pF!5_urMx!.&}lwV^.G' );

define( 'SECURE_AUTH_SALT', '<=1qsOE2s-];d<J4.+yWm=1C>>1>%/NVWq~;Y*je~Tc2K-o_;1KN9H+l7U~*<-W|' );

define( 'LOGGED_IN_SALT',   'D>iv$y|54~7/dS8f)/Mk|Y@B<ZFNw0H</=2#3gYkDwZs##m,n&17UgbcIz-tJgp=' );

define( 'NONCE_SALT',       '*^f-$:dQz<S[?rFYX3yG}mjj@6!oeZNhzEH0r9RAoVvm2wUdP4NIY${9P9YtSTRg' );


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

