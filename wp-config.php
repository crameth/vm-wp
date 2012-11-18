<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd2e35cth6tote1');

/** MySQL database username */
define('DB_USER', 'nfflmunzudepoz');

/** MySQL database password */
define('DB_PASSWORD', '723oonT1EMUofnb2L1EbIq-A56');

/** MySQL hostname */
define('DB_HOST', 'ec2-107-22-169-148.compute-1.amazonaws.com');

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
define('AUTH_KEY',         '86v],cYkm}j|LpSfPW3p@]VbUgty.:O,o[D,+pS|FxW_r@:KgJX8SQlBBfq4PoM+');
define('SECURE_AUTH_KEY',  ':vh4mSI46eF9qFFj(g!C.`6^,K_?9K&t~-E>AbtXxXfMW^)+R7z)9RG-5+x%4_4 ');
define('LOGGED_IN_KEY',    'cqZdhgy5J @855u;a)IF$~`U_>c#|>a,y~)hruK_MH/qW*RHi_Eyh28}caWH$|3t');
define('NONCE_KEY',        '4D{KCID-6_3BG$-<I2p^cB_!=BNq1anH+t7*fo5#.1T&W-_r;oNn5LwO`&w]o>1(');
define('AUTH_SALT',        'Y@W~KdY=)H}|};FHA08B*Z.[?~arzVN_p&W)6yJy{Kl,bru}^z*d q0u}mJNTe[$');
define('SECURE_AUTH_SALT', '=.G%S.FhL!U[nc/w@NQ`K)x7NFf:T-!bYWyXs:C+u].-hd0EQb&r+Z|:0Xw^UD-V');
define('LOGGED_IN_SALT',   'fEW{(n@b&E%+{9i8W(J.a$iKe}V-*[k2WWCg+)&BArE+uSQo|e%h.wvtD#=T#-Cy');
define('NONCE_SALT',       'lA>C/cyc>.gQ]. }K6AS+$[6gp:ZVEX9Td Q|#6EDtT#EooDw7NW>U?4hMi2r=pV');

/**#@-*/

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
