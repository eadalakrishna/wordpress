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
define( 'DB_NAME', 'testdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cttkdmfxmxms.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         ':W/*a?G9`L+VP1lf`8{V7VO.AkOkhO{r=ZL}T/=bJ+VkQ+|Mdl0%2zMtLo+8i22n');
define('SECURE_AUTH_KEY',  'W?WHS!+_*+Q5,=l`UP#UxlSu&zqsnQoN-<zcUnZ=B97gR NSA@5EzwSQUxcj3GT|');
define('LOGGED_IN_KEY',    'dr%-haWU~mJYV[6/x{j=1/O$6!y31.>z]sGicQb|t~+x%Xwu(NxmG_wbK4(/|b<=');
define('NONCE_KEY',        'TXU-pzH/6qF]?>`>/A@EHU0Kvg}NjD+.v8#hg}kN[jB:I_P/S.r.@z8oH<T9,HKf');
define('AUTH_SALT',        'c8;S</ KvKOP:-kmfZ4;d>HAnE3O2TK%3C+mjE1KGL+918z$0,byJ+L7= |:QF[M');
define('SECURE_AUTH_SALT', '~Kk@<sdG[`MZ:cQGQVhpFfs)JOX*7w`KG],EPnGA;866rS6,;TOCorL@3cB`+,P]');
define('LOGGED_IN_SALT',   ']f1AIg5@Zto[3p}NK#+o=K8Vmf+,jQ(DW,Ay/6LC#Sr81!*T|^^S(myoSY8M #H4');
define('NONCE_SALT',       'B:JsD]=V`mKT`nuEK9D-nzdHH%J{<~qu]+%`00dh?$e@y-IL1{K2$P15LT`wt%Gd');
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
define('UPLOADS', 'wp-content/uploads');
require_once ABSPATH . 'wp-settings.php';
