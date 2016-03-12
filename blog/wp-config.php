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
define('DB_NAME', 'u701497067_datos');

/** MySQL database username */
define('DB_USER', 'u701497067_user');

/** MySQL database password */
define('DB_PASSWORD', 'onuoharamos22082013');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.es');

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
define('AUTH_KEY',         'X v1p}|Z4=<9JYgr#/`WKZhs,p+uB-iKX<*]OH3>eNX.vYoz,_JGs@5uW+evx#}5');
define('SECURE_AUTH_KEY',  'jJ+:[6^*U^ir?-<=(O>ZGI(hwq`k-gv:7)tiJm8Wy8G?qQW=(q-DN+r-|_4-Pf>3');
define('LOGGED_IN_KEY',    'rZwq3W/^5j&S86uLQoU-T[nt~6H4Nqu*7CfQK;,m/@TkXslJ7yQ9t%--|8,#3J7S');
define('NONCE_KEY',        'teLVwx/Tn*|p6s]0>7)*!4frp]FLlbY>y!l~yl=]@V+(ku>:q8|[KJ%C;$;?6/f~');
define('AUTH_SALT',        'A,JZI d-k_r~Q!?ybW8QQKlgZ3H4|&+ooi!A9)KD{IJ;vnBt:t<F4%x*n Sn<3-+');
define('SECURE_AUTH_SALT', '9jsMZzztxY)*G/Z{1Ocj2u;Gltp}6nKRo*RM}9a n<8g)P+HngCdZaWB|>r0-1`K');
define('LOGGED_IN_SALT',   'zG3!D0j;N=FfQuIy|dSl1y~Uc]gH.>6mo>c;wZV|_hk0.,dr?`g8ja?;CI9UD)-a');
define('NONCE_SALT',       '(+H2-i`-gQrX(Lcl7[%I=PvGI2tPw5>/vBt!I)7IpP5#S):+A&#rO-0,;=>*4`K8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mu22082013';

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
