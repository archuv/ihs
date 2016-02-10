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
define('DB_NAME', 'db_ihs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         's`vga(z|7|ayebX0;AqG9,W.#Z1FJcw{g%Z.(jdKfo-kCZ~5f#<?`1NJ$_lF_j{b');
define('SECURE_AUTH_KEY',  'fB|guRu@*wQaSZ-75+Ig>lK$8~+I5sG5(@c{dO9ZMs?<>R;_y2,7hD>iXby2U% W');
define('LOGGED_IN_KEY',    '/D1o|Octme{)]lkT~f6z|nBD&-ibR+9(bwmtp%V|,i-ny`!{E&AfFE_:xQP%]X?I');
define('NONCE_KEY',        '7(R2GJ{?XN|)M7ZUg8Cs4kN(o9V)zn+x!<Z+I*+7F@,&z#6wHFE1v>M%|)T5CBuI');
define('AUTH_SALT',        '+_*2)4 cM-U?oo0cn %MLi0%k:9i{$E+@43Y;}c$DU &T,cwdMkLRN7hnr&snAr^');
define('SECURE_AUTH_SALT', 'Q{=.D|X=LHBrhW?{tdj-5q{+-_`!pIZj L=g0x$ye75=@N3Dd~=i@mk6?6>Cs&j-');
define('LOGGED_IN_SALT',   'O%&[mH-Z 7`rp=_>0v;=&o`N1~*F)awt(-rbE3Df]7doLP<i<vs4]U i *|ES]JE');
define('NONCE_SALT',       '0qeB~D?1==(-@RLGPn.M3kgZz#X50X|.b- oO*Ui2#;Q6g#!$oS-1[N^k 7Kx5[k');

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
