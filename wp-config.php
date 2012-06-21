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
define('DB_NAME', 'firststreet_wp_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'bX8)dikA-0:)Y?L7(r$o<?Dd&.bB&-J<wiLD4F{d&ET>p>3(Sq|y+~-4,kp|i]6*');
 define('SECURE_AUTH_KEY',  'lgwcN-,i:~pl~HSf>M.~`a!dL-:l.;4rX]Y&|kEC2]-jkr-,2}4{gM}W]&W-z=b`');
 define('LOGGED_IN_KEY',    '0Bl8#~CF<>2p?6+idCNly@H3u{>tT31sx j_Gu^fq%!>iJ@]EG#a,V-s%RJJrjN,');
 define('NONCE_KEY',        'Gz/|Z_vdGdu^7N3i(extZ+9+T&XVPC%nT9W1@&&F.-G+5g+>t7.NBN)%6 %tLhf%');
 define('AUTH_SALT',        'R@yKarh!O#@rWL$yM=hu&I,v$i_t:RJ_>+/xr-L(U#^AN6Z+sqeVl5^b5|+>gW9T');
 define('SECURE_AUTH_SALT', 'hVMUNf:F<]`0pp@QrG%PuK&v#xFg~..sx_w.WNa)t-|Z0j;ah)<ecUjP02ToyR@u');
 define('LOGGED_IN_SALT',   'xj^%m<8|)Xp}HfK5^S@2fT4-!B%@,:L.$c0n=)|7w)64lHS#^cB`Pr;c%|akjf1K');
 define('NONCE_SALT',       'ghv! Ba]4#t2bX tX 1zZKiDfgpQ+z.1u%SgFr|+2&/!u+Q*}T]SyI7cUL2Wwcah');

/**#@-*/

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
