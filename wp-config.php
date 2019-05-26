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
define('DB_NAME', 'WooCommerce');

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
define('AUTH_KEY',         'H6OFe]-MxvO>s3y{w`4yu<]:Hx)m44yuKq^|Iv9vk.99|?0+War|J}l6$8phTjF:');
define('SECURE_AUTH_KEY',  'pG,[]!H/%m=kvz/oio%451LG[*+gSla~O/*eqd?^K,I&C%/ef2c,:$m$8 X[f&Ca');
define('LOGGED_IN_KEY',    '4=l1BWruLemqiTNbj~|?0Y|!O[Mkh^06Q-<9LCot};Ni#X8^)n%;2TE~=eMlUms2');
define('NONCE_KEY',        'q&jI*lvaL.{%8yb6(u.Nt<nTU(7vY,=jjHbyq]dG`iCGyi#E:~)Q[BQH<ZuwO~-k');
define('AUTH_SALT',        '+),&1|/aK>W&{V%d^?Vf}l!S6]0b@jq[fjKBpD| s.d)VDJh4.1_C$uNt{REZ&-v');
define('SECURE_AUTH_SALT', ',W}>@XRSFa~;[|>9c?@WZ>q%xj_&Hj.|_(IkqxMSC$s]2Ygx>X8kC<n-?_,r#>8V');
define('LOGGED_IN_SALT',   '84`OdFu%jownS>EaqUd=-&pI>jXyNuiTSeR;~ 3Us-I/Iy6I~@-BUx5Vu4Ey$y<F');
define('NONCE_SALT',       'FjCoy6^6.[z6qxHB+_OBur4)27(%V.^>N1%9_~4@iIQ46{_*bg.CksztbS`Z=9=`');

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
