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
define( 'DB_NAME', 'rhensgummi_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );


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
define('AUTH_KEY',         'hH$b# cb7Juh(b1-Y}ZR+@y~XX^d`=-6/$!_UGEg-6yw?PASh-vK}1VUQ7=p,)}N');
define('SECURE_AUTH_KEY',  'F.QA<8not(p$?ki{Q~5-0`MPUgOwTbM=ug}CfUq]0tl[6Wgc-|.!Z:Y-j^#-XF|-');
define('LOGGED_IN_KEY',    'VW1oi^ja&4m|-.|5-X?i/cvJBmLpC*L[[>a7O383m/P<:(1k9BcmvQ%c`-XWe_+u');
define('NONCE_KEY',        'W <v6t7zHs~v `u;63h<%~E8Vo|:q5Dncg!.$-eT+dOI).UgvZ<)POMh|;N-H_+,');
define('AUTH_SALT',        'Wry5|5-{0uACN1inwx/}Rz-%K-Hkgy;_l$dl#_2vgqimF|!q+fAvDWhxu=1ze la');
define('SECURE_AUTH_SALT', 'L)s~|e|B=(D)E8O_Iog=-aQL?mbahE`0>=eT|O`xGOH>]*|)KxKx-Y{i~N*I3IEB');
define('LOGGED_IN_SALT',   'ZOtna>aJ.WWW||e+$;0#<a2Me3-X  Qv-P(oMlRsI7m4JYR&A0[+|Xd(}zj~lT#g');
define('NONCE_SALT',       '7Lg+]Np:T^>8kF[j0/e$Spe!u:|.^lrF-a#2lQ0+,*,A(>Q_@<5*A^`|-qnjIDn`');
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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
