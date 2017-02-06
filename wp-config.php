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
define('DB_NAME', 'custom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'I}TFh*IFyq0*5e6xH8iFXC40-fDY?I(DdJ WgsrPT+avhHPrez8+aI^s^Q2oE,[O');
define('SECURE_AUTH_KEY',  'WXC`Lls2N]?{S:X jxBFJSK{ES?_b1-Ns36{eMc=Nc;%aou])!-I$$!H#JU07uw}');
define('LOGGED_IN_KEY',    '3mPYSEea>@/H;F50iGK:K-HK4DQedTK.;)sBky*OL4C_]=QkuJrq8KL</9dBeA{r');
define('NONCE_KEY',        'FB8{la}V:I/Z]J.>$rtpU0.Ucj2f)DubLG39U5BNJj _*z<zGNQ9WWO=!#oJpt54');
define('AUTH_SALT',        's`Pr~LL{w~iF2em$FN:E mG%/?2.Qp<d-qMA6qPq~+2N /5+] _3fe$V*%Pg1[57');
define('SECURE_AUTH_SALT', '@TZQfbfV1vvP$N;S>o)u=Tr*:<b6J2SM~wB[E}PIDeXk6KoC]QM0.w?HXdkQ<z8,');
define('LOGGED_IN_SALT',   'pLs|wM8)$6dne#=o[k%%o1Ogq>PqB$,t7%l&-70Q[0`(R#su#-=/VR^o+;#c@`HE');
define('NONCE_SALT',       '3kbr8!~uMuK]KSp>g==y#^+=i4I/]PNfn6Z/a4k|~`M2y6WYb!C&jT#5[iJ(wL6<');

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
