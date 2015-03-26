<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1099172_wp2');

/** MySQL database username */
define('DB_USER', 'i1099172_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'U(9zvkTb1#88]*4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'XW3yquSacDvGEC2aEDXwXQrI0WDLUqm71d5SrzE3ZrpE3RTrHeorY4HjpUvWLvVx');
define('SECURE_AUTH_KEY',  'MvC4f5S9HbaaiHlfvE3jGWkCZ12cJTwuwaCXXpFB0jTjRfqeRquQJ56yh8trYGhJ');
define('LOGGED_IN_KEY',    'PgX6ALGGkPegZeGJcopRq9ufSHOC5IZIGocz1jaumAKmMZRcudShwCdCld0iPKOF');
define('NONCE_KEY',        'mtc9qmAlzcdLoSPDeCMR9zRopCoGiS985YLsx4EyCcz583vd3YYZ7rYRnvcM58J3');
define('AUTH_SALT',        'KPjn5PoVD5ATAt795EsXZ7CHWQASJAszi6dtR3tafO2LH8YrA8wPjfwTHOimJCIe');
define('SECURE_AUTH_SALT', '2sQlgXXFEHaCJtcxgWux2mLe9oFUXfB1S2UXSHGcfsepOu0SnZPKW81AlhMc4Q6d');
define('LOGGED_IN_SALT',   'gELAcoiQLOZ5yNEBGwZ5DVGM7i5dpSGrGeeir2pTCAhTnr2wXBvNIUn226cCnxfz');
define('NONCE_SALT',       'PYYLfQQLSx1DV14K4pLy2x5ghz1SRwYLS9vU1ueTYquE8kf5ffnTyZm0yNqTSt2T');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
