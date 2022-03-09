<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
// END iThemes Security - Do not modify or remove this line

ob_start();
error_reporting(0);

define( 'WP_CACHE', true );

define('WP_MEMORY_LIMIT', '128M'); 
define( 'WP_MAX_MEMORY_LIMIT', '128M' );



define('WP_AUTO_UPDATE_CORE', 'minor');

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
define( 'DB_NAME', "khlmotot_db" );

/** MySQL database username */
define( 'DB_USER', "khlmotot_dbuser" );

/** MySQL database password */
define( 'DB_PASSWORD', "}Mo;gXQs+7dG" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '256M');

define('WP_POST_REVISIONS', 2);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JYRnJ+-]_k|5INU/@7ayonF(vnuJeoiw-hmmQ`>+k?~#$>H.f![3J?Xw,f3Q7-6f' );
define( 'SECURE_AUTH_KEY',  '*[u#veM;JF|g2UED9S=PGFl1i*?(O4_O{?=l|[nx=;u*.;X3~T<E(0YyepNwfo!{' );
define( 'LOGGED_IN_KEY',    'ovvE0Z.U#8XD3qkL?0gac3G~.}BV`h6m7kib98H@&YbOHUqQ:h>2j5{!SWvae=yw' );
define( 'NONCE_KEY',        'mT(@`,!f~1Afo,{M[OvP3N<4I*`,SK3>h!qz5.)T;%D:!As/w<;,3?66#|`ncy^h' );
define( 'AUTH_SALT',        '0z_glu/-TuGFHM:!N]KZutDY=v4hcJgIzg?*^F( < xD(uz%wQ{QMjKdlc3?g,OA' );
define( 'SECURE_AUTH_SALT', '1{197Sas~D0A91?T8C^tNs|LZo3xe*nujyFG,Hk[<5oMU81(44zK],{)w3S-1:G,' );
define( 'LOGGED_IN_SALT',   '&[JTw+LiiChJ@DRavuSpZnDPB:hH-U ?3}v:T.%O/]T(p*i9q(lOj! y2cRQ}u&>' );
define( 'NONCE_SALT',       '^y*|^^_HMo~@8;c]Pv!g+w5Q!1d++?YCVxkbvPH|?3jqN[#]^RChX&kc<RZ3E<j?' );

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
