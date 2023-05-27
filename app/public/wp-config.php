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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'EmXTjMQgz4ibyyaQJ4vVJncYFo1YELTzRFASAmQ5z5LP554vqozMGkWzwPtvWXNqfajQHPgU9ArW1tFOEV+p0w==');
define('SECURE_AUTH_KEY',  'nPxc1caNedAYgc5SCtbISUst3ZVP/ji3Sq1MZR0S14Pcit/e029sr1U8jJhOws1JolB9GgsK6vc66EGbY7MJaQ==');
define('LOGGED_IN_KEY',    'U+nVZTVXyqq7ngWc3oropxL5IgLAz/26kuBkFtvT5JqXOHBiBlkAH8uyNv0lfExCL6Na/03GDpgFZK22RKObNA==');
define('NONCE_KEY',        'RFbt2x21c1zcngQzf92fxF1bIajG3F1+xpfuiovhuRomj8YhFU/MmTD7XsSZVVFiAjva4GoIM5GjWQ9iYN77Wg==');
define('AUTH_SALT',        'RilhkggLdvs6+rjbZCliL2veUSbgMVK927uenhUch0b1OWcwGDxrFj89pShfp7PqsjdlBeDSdvlBXut9BaHlew==');
define('SECURE_AUTH_SALT', 'WhDl3/j6xC2b+jjTjUEgnXyT6gmQF/fJpiR3zWJMK3ChcG/R5NSn4eu1HuJzptWGku2bLYbQjYyPML3SAi49Qw==');
define('LOGGED_IN_SALT',   'rSIkC5sHd7fA7hZkYsQ2iNmwzgqi3gGc4Mp1M4k12BRbgGowiuFxBFroKNWXsnz33ZEBN3KlsUAPUtFHswbFIg==');
define('NONCE_SALT',       'jTzehu5qBxq92oystyrnkb7yoLbeDm+YBreMItFoJEZgX9qrPuhnJRrFDI89ro/YI0JU3XBkxj/Dz5lVDioLRw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_DEBUG', true );

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
