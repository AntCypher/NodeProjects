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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LFwEWCcGW+lHvUG5Wr0QJM1yap+sY5R7zp6q+VmcdEHAchzDdHlTQX5ZYmphyVu3abr2IBDBl63nb3HVjztB/A==');
define('SECURE_AUTH_KEY',  'lcBzOEXo0k03nQFjsZY15P2alt2XBNoM6WGYGiR7640NINudPkZvmAiAa8upzuf466GKvMO8Q2TSaIwSDvgXXQ==');
define('LOGGED_IN_KEY',    'LtGDbBsdhpiFVccVcoj0VnG6FPyp53ZoJmCONct8y2VFj24BA5bvpWyfXF0hfoM5ojwXx1IPHrOF+dlfGMU1kQ==');
define('NONCE_KEY',        '2lxeHzZW00gfec53ClopZF7AlZ6gTgHuPAU6/sW6x/LT6Ky9+aA9UGm76VqDo8kSZNl0Ucr7biFqVGFfXRfTJg==');
define('AUTH_SALT',        'pzqzBGQKAEEjKhEx20cGmo8J7dwiz6FkWHoA+RqUJntK1fx3t4fvuNk5iSJrFwZB4ZGqQmpbqXWyByi28oCZvw==');
define('SECURE_AUTH_SALT', 'Z/Hc8m/30dV9JhJEXTRTOopJEKPofAZqjtp1e3C3UIC6TXPtDLm+gczEnv5jTBOyeNbxL4/d1cT29UMESj+Jog==');
define('LOGGED_IN_SALT',   'mxPl+3JmL4upkizrw8w1b8YZ6GymuoCEKd8ufktbZV4fo1h1rAD/N052t2emWiTIXZ+lCFopaGUBpIWRFAnIwA==');
define('NONCE_SALT',       '6LcaIvIV1b1edkjEzqH+kbgcZArGHzmN8dkafxlE2yQ5T8vC8DQ6b0utXo/Wj77arbc5GUbvTFpDrVVcAJW8iw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
