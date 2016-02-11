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
define('DB_NAME', 'alena_public');

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
define('AUTH_KEY',         'qIjX6b++!M.v3Cw/&[n:.3+YNa+xmQGFH uuMrcI(Y|PPV8!%g4SLh-*n Q/?+|7');
define('SECURE_AUTH_KEY',  'I.u%=+lr2{$/Cm+JcQqWG(~Ok=dNID_uT|y<-!Tpi^nkj~kh_W<5r9=SU8)fdKlz');
define('LOGGED_IN_KEY',    'w=x=8?&tiyM23_V*17cWrRh_vF3O%kZXH;cC.+-|`NIxVAX!Z@v-Q iJHI>XF+_I');
define('NONCE_KEY',        'G5RUwc|][Y5 02Bs|5W*|RDP=SMVjChz3:Of,-&j2sjpQb? BFxbcl6q8-]EOH-;');
define('AUTH_SALT',        'yJ@s4s<22SkY:T2X,q0JP<),ui<|f]3$Q KM- >-1*C5@0|iL=(/q^LASCT/q/#*');
define('SECURE_AUTH_SALT', 'K#28u,sGcajKqm8Ih-p_{(:#|Vy4=v/e/E.?`g|VGGY2=My_-`n.GgFHu$BU>/Rl');
define('LOGGED_IN_SALT',   'vUE^L2F1PnRl2WERJtRKn@5+bK4mNp;e$KzZ5prBOT-(R?vEfpx?M]s=2ikqq1rn');
define('NONCE_SALT',       'QU^&I]N}+pnP%dT@!Sy<{HWRO-+H7e|mc]@oL0cH2X4LEmz7D]M5dhmfu Pixbv<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alep_';

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
