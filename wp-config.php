<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'mimikoes_wp381' );

/** Database username */
define( 'DB_USER', 'mimikoes_wp381' );

/** Database password */
define( 'DB_PASSWORD', 'K4)v8)p2lS' );

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
define( 'AUTH_KEY',         'j1x5gppk4i1jhiwb8wegetwjrcdpv8dtytqzaspcjoxrfk7gswiy7z3aw8hmh4qu' );
define( 'SECURE_AUTH_KEY',  'jucjndtiziggbgxx1fbvygpb4ghfzvv9g7filiv9iubqfps1uy7i1fsm2ziaggpq' );
define( 'LOGGED_IN_KEY',    'tg7rtowfdcccc1wqlft2jdeewxtjwcuxv45xv0tzvprgjrsjn0hi1qylqaaosh5m' );
define( 'NONCE_KEY',        'xkkxlngkitsfcfd7sobquqyixnmeyx7935fps2zdhkvjnltoasl0txdjjam2lt6q' );
define( 'AUTH_SALT',        'docbt78bugl5exf0izwbhzcgbjjfkfsczhppdgwz3jegaix4jklsqld1wvvuax0i' );
define( 'SECURE_AUTH_SALT', 'vrdlmaaz1xgvvhaohnulrolsdtgv0ikezqdqspcchquwu3qsewlzjsckb5ds7yow' );
define( 'LOGGED_IN_SALT',   '6pz1vlz4eslt2wol3azlreo0ni3achkyx2asfwat8lhwsmuacgyttmfb2i4kr14f' );
define( 'NONCE_SALT',       'ivvrnu6hlppubmjputayvl7evzlhezucpaj9c6jwjznqacl8guq0sj5odd7pifcx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwb_';

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
