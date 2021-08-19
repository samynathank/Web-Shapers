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
define( 'DB_NAME', 'first' );

/** MySQL database username */
define( 'DB_USER', 'nick' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'O[wFV&e*TT00}Fo&2+*d~>*-rS1}Zt^IeVS)Y,-e;RBU:s@9-q?X*@n?3#$U2U1Z' );
define( 'SECURE_AUTH_KEY',  'u@|/7t::~&iKkb<O<~|EHqN6K=ud,*9m{k&4;2RZQk3KWDWO225fk2#^;/l+i9!j' );
define( 'LOGGED_IN_KEY',    'o~[{I$Ng9n[8Jz?{MVYLk@Z9+[RIWI{(^-[NIA9E<2fT+&Er[jrMbUEnrO+)yWv!' );
define( 'NONCE_KEY',        ' z?S 3(3Dt&(093ca9!sqXhsq4BHmLKG1Zj?UR,dPesMWH~-477Q|3A;m=tpyNTb' );
define( 'AUTH_SALT',        '1&JtGd{%Cv[wb. sPY$X=zKc&kcau[b%)p|!Sa_b82)cP}=6:Y9[J?WDb# qLZcF' );
define( 'SECURE_AUTH_SALT', '<vP9**6z6D)@-L)=W~jwCv4wPWJpv|+8h8KL6}~}e}SBok@lHF~*lT$$ZBC[UMh?' );
define( 'LOGGED_IN_SALT',   'K4#3zZo;VwtK|I;]KA8bLeNB_guve.c;Tw>C?)qm;i5{[#-.hGxq+mm,ZiFw|[&?' );
define( 'NONCE_SALT',       'iDR8PWi96VW$_;(+!G8Eg+Jta@:AoY/a_iP@1ffOLQ%cnWZ`u]Fm#4r4A{J[p-C.' );

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

/** rename wp-content folder **/
define('WP_CONTENT_FOLDERNAME', 'content');

/** defin new directory path **/
define('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);

/** define new directory URL**/
define('WP_SITEURL', 'http://localhost/first/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



define ('AUTOSAVE_INTERVAL', 160); // in seconds

define ('CONCATENATE_SCRIPTS',false);