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
define('DB_NAME', 'marios5_hsea');

/** MySQL database username */
define('DB_USER', 'marios5_hsea');

/** MySQL database password */
define('DB_PASSWORD', '34-P8WSZs@');

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
define('AUTH_KEY',         '1kwrz5ukx0wflrqg69ta1r56s3xq0x3oonb35xjsvjt78p1ubgmdgql7qrcccl9s');
define('SECURE_AUTH_KEY',  'zkd2laf38safsf33lgsg7yzwcbfb1tkylsxnhuywogel8c1hj5irpsqosnbnf2fw');
define('LOGGED_IN_KEY',    '9uri2hx83xwpxxpznlf2azjdwt0htt0jjtmmg98qkjywe46eaxewddzdmj8jykjv');
define('NONCE_KEY',        'vvedbpjxts44gwvgy4aitzjwg7p5o0fnvuqxp96ods1vhbjnjr6jw66myj7fmvlj');
define('AUTH_SALT',        'tnmkbychylzvfjbihlrr8ased8nmu637pizvda4yy2mflh0xpqutjyqdxniqk1es');
define('SECURE_AUTH_SALT', 'anayvypqb9yae1yivytke2lbcl299bzybycki7kfpnau1warslv3qskrkubckwyd');
define('LOGGED_IN_SALT',   'vcv2xpre6k9vyybgofcynbyjh5nqoe3uxqdoxszg4krseikzz9jyxkskihkam9kz');
define('NONCE_SALT',       '66ta0knbadm5pdhctdxrhyhosi0krmya4o5xtzgqhr1xqy6s4jashtajp2ckag4l');

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
