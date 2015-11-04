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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+e|i7L )pEHCD;-v_FJfQ5XJi7k|E!wQ^GMex&6Hem|;)nJ)F+#gH+!70lQxm!iE');
define('SECURE_AUTH_KEY',  'uAF[?`]^5/PIIEg&zb&{r0-.kv@rowz-*[aFXN1J|*#V0+GvKT/tABSU((h!FJZK');
define('LOGGED_IN_KEY',    'fM6pW>m>7wl>)[N;wEM!~8/Gx RyTvH!Tu+JW[7Yb{tTum7^vVKxN.I[*]DzAC>/');
define('NONCE_KEY',        '@SDVqWK-2H3;;wA>!CY>&:_[x*JIT!D$FZrhs`@Bd^tDpL<ow&`QM|H2F.w.AS]!');
define('AUTH_SALT',        '|k>hOYP~d$.?$,pNP~E<FENm|1v1[f1((++rKN[gb+dV6Ba[GQ_b[;mz8gfmu`o3');
define('SECURE_AUTH_SALT', 'ghj g..3b1[?ihnR|,pv-[5bCB`QmN-OD@OVum$.mVj8eN1lILF,3<bCVF,ptp8s');
define('LOGGED_IN_SALT',   '|X}-&_*XJ~-,3z>.jX-].Rt@7!KHL86T[T|bE |zV~?N`66SCh6PfoQz$EDv|<bG');
define('NONCE_SALT',       'La%GRN!T7|f[k!U)P*P(yc1qrp1)h$-+V}R~dLOA+fP.>^_LTZMkzwNb&)g?mP9L');

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
