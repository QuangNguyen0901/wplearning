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
define('DB_NAME', 'wplearning');

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
define('AUTH_KEY',         'Y{`<t6MRtNG~UB+k,*|/qRD8hW%jP]wxlWb%GNqv>_uH61_?Em&IZDa#D^T@1R^V');
define('SECURE_AUTH_KEY',  '@{oX]9W~1p:IzwMOC,tl-,_fdCz.a<;Y/df?K2+SB_ZIt}rGi<<R[0qw3>;%Bt?g');
define('LOGGED_IN_KEY',    '9^4w?0>U$<r@mt/1LE}>zFfN+yh0UTCk|UPg@pRl8r` nYKB>k2|V1j{cRD~`S^e');
define('NONCE_KEY',        'Fa]MU7r0S{x]4qAxfH+WEo#[/h[37]2Z=Xoq,e]2kGnapzC?90uU_CoDkh~-HgV3');
define('AUTH_SALT',        '$~>cCTu<PT,RiZ>i&b,_9m)AyO<dd&qC]cgas?8!le4av`7g1:Uz0) BdGEYfnY5');
define('SECURE_AUTH_SALT', '-bE?}]-iJofelex %0fsZLeG28S|hrC2*}:8XLwn(wedg/A738y`l40ed+d}as-8');
define('LOGGED_IN_SALT',   'Z7bM@*y@lB,<L;TK_o}* pYH07Xb QT2=Dtb#:MDAx+mA`>vGy38#Uv4IylAyp1,');
define('NONCE_SALT',       'M&M3g.9FuLH6zkmJOdo@@K|X8.4!cUYz@,v4nR2R;!Fpq<76m7PEVprk,l:.9Y?H');

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
