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
define('DB_NAME', 'nstorstark');

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
define('AUTH_KEY',         '59X|O[yIaMyExsJJ]2VPT&,q7wn<kCib!i Z$#i3[8UXUtmO09nV5;0.F.VyP:Nh');
define('SECURE_AUTH_KEY',  'Qa8yh5}U|S2<0&Di/F[m.X~pkWfq<~PVvo#b7kmNB~Iz,<Yd1f0{L_##x+ X(uhe');
define('LOGGED_IN_KEY',    'O@0p_H*~yBb:#kodCy*3h[}b|g0o;Q`v(gh`h4XT!77.5}kkq!-SWkt;v&>AKHhb');
define('NONCE_KEY',        ' hOH@FO>mZlh}Z 4FdeW#%i`0T%SVpXqGx8B GAKE5V^Uw.glIowq70@@ZA)aq2]');
define('AUTH_SALT',        '-S*O#5/YC-gVg L(Gaq ^soJ)3[X6nnyUI92cyU^6!+OS}<B{PIL[,p_1wG[iL:w');
define('SECURE_AUTH_SALT', '3+1NG(}M+MWAD;@/z`gGhgoP `lZm-Jo=0%Nc.oT5C/W2rFK`rB?!n;aD~l=Hjm0');
define('LOGGED_IN_SALT',   '+wMZ/-w!tDC{YG{,[X~|1%~cDo4t>Ay9%npA7BA9;([=5ILw-:`KZYGHH?zdV@*~');
define('NONCE_SALT',       'P~KYeHu[Rn`6/mXCjbL)Ltdf_bvo(RSnx_{zV0$qFSR~f1B:Tw=$`B07hrE*pE|l');

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
