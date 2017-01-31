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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nuHt>l{1 v*_aNr $}YuFfDHZ+L~#Tt>)3=KANV2CfZ{o[~#-/Ub%$,FvPh<}R)2');
define('SECURE_AUTH_KEY',  'l|J(^O-W=Un/])bMbBV6}F;2U]T&g|.n1G0:m$V]73eq*cAh&jpPa>O4zJ;FP+s4');
define('LOGGED_IN_KEY',    'obPFJ|-R`=3R1F~4SGb5O0HdT[&-ersT=cKIIIuz9)}2L2/NwYX*Z4#sD}7;6$77');
define('NONCE_KEY',        'K$P!rxe8@jKej*M+&3B24)~QXll1ovNWduJ9Fmx7$)`)k|}c_o6}z(W;6<3{CdUd');
define('AUTH_SALT',        '2|mtDHc!q]~cZIgxxaElX/_k^g6-gByFyNP_rMObv3}Qgb4!K;SSJxM44{J:HK]{');
define('SECURE_AUTH_SALT', '>?To$:7]tsd{IM4Il6h31Wb^aqlX`!P*$vS%f8tW%hm[ y^RBa]lE~sIH[=Db~Ll');
define('LOGGED_IN_SALT',   'n$M^(<~G],W>e7*j4/-?!N^eYC%zK~f}?TC]Qzg#DYW$GlBzWh.qmX}i0ZCszGli');
define('NONCE_SALT',       '2T|^4U6L^lckzDK|+d7.b`:is&5ho/o|wH|}|R0=9 8+-hrnkroMBAT1{kT(c)Nm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
