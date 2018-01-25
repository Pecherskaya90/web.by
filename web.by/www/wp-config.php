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
define('DB_NAME', 'admin');

/** MySQL database username */
define('DB_USER', 'web');

/** MySQL database password */
define('DB_PASSWORD', 'web');

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
define('AUTH_KEY',         '*[9+ 4Fvir36Brk.[r%aij]^xMGAz74J$1oA-&,T)$E&:@~~8tff)ytGi|{nxrt5');
define('SECURE_AUTH_KEY',  ')$TL8V@c?Ykt60nr*05p$HR>.=Z?$6+3 DM^bvk/{]KN2*-Myjbt!^X,-5y.9-*H');
define('LOGGED_IN_KEY',    'b;L^26i`vWi;ZHTR}32aRM`@$4zgwLB0:~xT IUG+c@ry@[Hml82>zYLwD(%c{pe');
define('NONCE_KEY',        '&<yYH7ifyEGrNq*dMH1J|&eNYW~+TWg7AA`^Q {<cx1|[(dE-NPK9}4~^hGHUq2B');
define('AUTH_SALT',        '^^}/<I}ML$,l3-,fUaoWH%z`,C~eu8(e~PA+$<!z=9nG0m{{t8y<X#cM=?4zdq4,');
define('SECURE_AUTH_SALT', 't7UDYurfDk[-|DCzq#nZM|V|Kn1(_iS:T[S+-{DyCr_|-??_vZ)-nG>@2~M@Y{?]');
define('LOGGED_IN_SALT',   'un30`/]:jr^;@%}B1-0%<MJT%H+f5ROONjpsco4~(otbH{As/2Ge(s|m-Eu-Z}--');
define('NONCE_SALT',       '&~-u,.I=T,x96Cd#Wu-)eSme5.c[IGKD&b,#l<Ej-Z~pmd~sVO3=N7[eB38p+xBe');

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
