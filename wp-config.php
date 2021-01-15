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
define( 'DB_NAME', 'herokuTest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1LUHLpFv0m6r8TGGZSjYX78AcN0W6uVFUROAilipZu5ISwMglrRofBKFlRmuEkDF' );
define( 'SECURE_AUTH_KEY',  't8lW0Zn8rzr70YkfoEAjr0yweyZGYL4QLkgn7MSpqFH8oBe7ueH4UHzj37aZ68RZ' );
define( 'LOGGED_IN_KEY',    'ZBw5yaMq051T5vY7hefyxYjMgdo5fXahefAG34GNL8InoJomvy6tcVJknmnMVevs' );
define( 'NONCE_KEY',        'j6EMAs9twEc8nHcdsmBAKyyUh48YOWgldeHUBGjt7qAdUhjTTLA22XKef3RPEZPa' );
define( 'AUTH_SALT',        'Gp8y1okIWSNVr8FX7TvY82nTt2DsP839CI2Dzf0fs6ZCPA7yePJ4Lmtum9YF5uxv' );
define( 'SECURE_AUTH_SALT', 'inkTCvgENmxvFi1GlGPkEtUI17oztV0Jk5XvHkw1OByA62Ta4H5TMFHzrH4PYLlR' );
define( 'LOGGED_IN_SALT',   'SvcaQYlnBbSu9f7M95Bj33RHn2m7FwABCXHQqtHDaMBZVGPFWHKfUBeigPvbcjLA' );
define( 'NONCE_SALT',       'qOImENBTlmQSPZYgt4PVhKdOzPy5oVmKvlfGKGG0wA9PlAR3URM97b5FQwkLJ9MG' );

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
