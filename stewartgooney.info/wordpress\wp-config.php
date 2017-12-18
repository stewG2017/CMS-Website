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
define('DB_NAME', 'db1476862_stew');

/** MySQL database username */
define('DB_USER', 'u1476862_gost54');

/** MySQL database password */
define('DB_PASSWORD', 'LJBWU1598753###');

/** MySQL hostname */
define('DB_HOST', 'mysql3333int.cp.blacknight.com');

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
define('AUTH_KEY',         'Q9+!E<pshq0eB@]z!EN*tb*L7q_]1y`e2A8Tm[RA4@8ej1/4nQ3x#[%kBhIFecxy');
define('SECURE_AUTH_KEY',  '[2G-U8;|,1Z(,Zt@X)s_nw[9A>(,=JF*]N<LSbX67&c_;xyO~9LE(z<2;t;UQd5G');
define('LOGGED_IN_KEY',    'iw.6lR#J`4}1#PR}^s]{vWC*AT6)8v<sBVrI_>Xk]x+E(O1pMwK:JLdCYPF>-aQe');
define('NONCE_KEY',        'W!KQF@,MP@GDWh,ee]M!xj#{%lE5=V`V5C:z:UT=_54]7K,U7JDnb-9!?ZqlHA$-');
define('AUTH_SALT',        '+sy&KK+DtGPmVy:y.p:chMfRr6r^BW?Cx5jL^F?{k}T}HOg].KW>PcIK]9DJYKl@');
define('SECURE_AUTH_SALT', 'BNI U h8[w0VhmRfJ N6x^c5:mq)tYxMwl!vW$m.L!JX!/eJ60,lZ+ki ;+0)1 d');
define('LOGGED_IN_SALT',   '$`^Dt?Wr=1uI{HHaV&E}jn9=9i+!^5%v`|9Cv-@#8taiHp=Z ezU2$rBL*qD1Fzd');
define('NONCE_SALT',       'x[>+OihHm-KN<6Mb}o7~7%|z@RBp)[GD4zLIxE^G8{;IVR`6BnCk Fe)l9|9V%EL');

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
