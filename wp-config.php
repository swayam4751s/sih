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
define( 'DB_NAME', 'sih' );

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
define( 'AUTH_KEY',         'xAuOJ4y++0r/<PY)*t&vKO(@8Hc9o([wS]=Qs7zX][5hf!mm_WXp@zbf)|oy9b[Z' );
define( 'SECURE_AUTH_KEY',  '%[T]@J/~f/9D)d6]x0P?iLA]ih9tMsw<<t%<fVa;@52|M]BB4g5BC?6sHMQ0?|))' );
define( 'LOGGED_IN_KEY',    'P/ooa9,82y{hiz%9}&tTuj|h?`OIL,xR:=nU.w`]&G=5sdvG{a4=wI/%]7OO@{dM' );
define( 'NONCE_KEY',        'IFiQbnCM#-`]re-x[p|:u7/[3q5J~a26{>J*O.=bZ|eno9<.wu{8QIOC<~>o6!..' );
define( 'AUTH_SALT',        ':k;`M<z=qt#$5ZiugnTZUD1~aRBrN0SH0LkTsGq2^4X2yr#w+CeZrIG->sH[@H!;' );
define( 'SECURE_AUTH_SALT', 'Bkx)TKv]a]6Lr*bdX;zf4>bG<Vp-S44TS4A{UX<F(@`QE]6?FWs,e^yHEtC0D{g6' );
define( 'LOGGED_IN_SALT',   'Hqa%7[XtzEjsN&|bC?ZQjo5:;`P<K_f`df!@$:fV8eTRNd&BeYrWNf}bu|1wLzdl' );
define( 'NONCE_SALT',       '[m%2Z`aWvXQbok[SPDcdT^*S3m;P%34(j?G#y/T?fHU1#k(.V8+nxT?D_O`_bR+#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
