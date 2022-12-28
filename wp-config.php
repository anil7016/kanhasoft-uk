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
define( 'DB_NAME', 'kanhasoft-uk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin@!@#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**Contact form 7 can use to remove <p> and <br />.Ruchi */
define('WPCF7_AUTOP', false );

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
define( 'AUTH_KEY',         'epkp.X5|3WIho:i@$5~/?P8]JdpE *n83,/5fdCrFrHU$QmKQ1#Rz=_XTh<r1.Y=' );
define( 'SECURE_AUTH_KEY',  '^i#t|XV-<6U?E4ICBbFD2x3#@2cj4>NJ ~]ULDZ+)?VZTF^+dT1rQl5&uMc0bRQw' );
define( 'LOGGED_IN_KEY',    'aBf3R3iAB#?@Q}ji^e<)dPS~x9)a}Q}vhvBV_sb^e5E8[[NLfz5@NxVxACK,m0/*' );
define( 'NONCE_KEY',        'fP-f=5N0/``VO_eGc>FJ,d@d^i3%^9:{>o_]!I12=5}JjaN~Y?r{E:S};0F.mg*@' );
define( 'AUTH_SALT',        '|RP2u7v4}TCBg,Sfqh;Zpqz&w (wv~&o:Uz~=Ih!]@M!b-ofPF2zm.zc=_Ip<W=4' );
define( 'SECURE_AUTH_SALT', 'Jy&@|LB3srEjZNUT!$9^eWJz)q2KZx}7I$~bT]zm9NFI _AkOALS[45>?/EeR1;m' );
define( 'LOGGED_IN_SALT',   ')dPH`KTj7)<JGQ)G{Zt}sDLY~0t+oX~R$}xN1M4fYtWyhQa>F~a AErk92$}p%Dj' );
define( 'NONCE_SALT',       'e]Q[cOB@uX>[o~>AcjtLTtP`}Y,DE;hA_lW]_e0u-+QQ&Y5#*gPJDXfT0d~OzX=W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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

define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
