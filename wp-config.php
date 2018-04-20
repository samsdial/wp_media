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
define('DB_NAME', 'dh_invest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZiD~}`5T$O$@@MX TYtfAHr}mW%B}cH$&p<}kOe[JB2+lG?L&>B$J,1Y!`OqCxTq');
define('SECURE_AUTH_KEY',  '`07qLQ/dqV_g`>Oz5Va:tQ[[Kx@_`g,3mm?lkjLGj0.5_fxASN<z@.fzcNh<`:.]');
define('LOGGED_IN_KEY',    'H(nTSY)P]%7b(8,pI9F7bC:q6XAWm|,rWP64;J)LDeJu3g QE_5}tFoFJk@i&ezh');
define('NONCE_KEY',        '?P).)YXFiN3.NH`U<`C&qsZ&mEUEsx.huUhgW{otG-t{Bi|72Z,{YMNe%M]4_Xyn');
define('AUTH_SALT',        'y]cn1XitB7Ohi8Krzi,FF4K[LhH$e}zDakGcP4%k217>3JaZQ*>pLhpkWg?57TjV');
define('SECURE_AUTH_SALT', 'Zf%p3.Ij$>!fWhcD!Ow%i1xScIdj%_5*M]|T;!?Ks6PbA12d5a>Z%P|P&U6[fx1l');
define('LOGGED_IN_SALT',   'W^~nkZJEMJe.<Nd[qZd/ xFkbr]%+dKT@,9brzSJEi?Ze79a@#?p!T`=C784Y3UX');
define('NONCE_SALT',       '?d:UEtJ)aiIa}<1JZmDe1cAsgov?q}pQhG6psqq_Xp*}0T+~Y,ZXLQ&4$+D+5m}x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dh_';

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
