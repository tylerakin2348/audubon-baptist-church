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
define( 'DB_NAME', 'legacyfarm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U0LP=M5w8ot]6><hz!H(ABASG^J~AJ.^kJ<kpG-9K}|5b2`{E8h<fO7&Y N]bUl8');
define('SECURE_AUTH_KEY',  'j,/3E1(Qa>AHh3w[]X,ozf@#d9_UhzEe|i3U^@@VO@e;Js9HX?y^B;/jW?!B(%#^');
define('LOGGED_IN_KEY',    '6!{72]+-jKz=yg>;o)f$DCi$U!-h`B%{6y1t]f]oH6Cz-]U`!{Y3+Py0Mcxl]QaW');
define('NONCE_KEY',        '`9!vxhd.Y>{0;N[A1vdafb!/TP$4|q^o;H|/M.?Ms|2;FSo ZG=^LNj9(,pv3]7Y');
define('AUTH_SALT',        'Jv#p-cSu@C@~TEMr?4HM $Z-@`6&UN+ZK>MjYo<|- Y9<e4$51?v9=}L^/TMl+ne');
define('SECURE_AUTH_SALT', 'r}pj%&zE=PBE}V-+k!Yj|D.j@.reO1w)xj%ORR_t)uE&M@hO_DeY+2t+]e+_/L_+');
define('LOGGED_IN_SALT',   '|VLeF{I>?m<PVCj=|p mz7}Cy+jOF[^?0{v6~[k{Zfmn];L&pTW/*5tGc?oV,,)k');
define('NONCE_SALT',       ']-gU_rY9&I7j({d=^~u<$wlSvu$Z-,}<o(AW22es_zgNcZ;.G<an1~%yQSVt40K_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '45434501_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
