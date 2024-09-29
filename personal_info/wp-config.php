<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_personal_info' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u0:M%/|MP+V=Ggq[)hAkH2P!&sr%A/$dYqp*D:_:.H%WrhQDOz%<.)0m.!5.ZU8M' );
define( 'SECURE_AUTH_KEY',  '&fq_2=nKTUB.OtQEinqkEd>Zv :Jk9x7a]859ZthNgJbpB~!6~re{joy4UV(!OgR' );
define( 'LOGGED_IN_KEY',    'Y!jt-4pA!BfjVa1h/1kLcy~.PB%hV7A~ERG=S<8-V6u~!u`Bi_>`Tww41_c})hSI' );
define( 'NONCE_KEY',        'ljz2hkDQm%`#6>E>3LhZ%]-hI8OOm!tuRE5)G#<Izw$rwqX_k-y9$)v[*fMD|>IO' );
define( 'AUTH_SALT',        'F?6Rjh%!Es#~r29&m:v.glT($FG&de2<Ws4h_.G0mno1Jn y^kC#I?rb6rBwbD@(' );
define( 'SECURE_AUTH_SALT', 'RWKwXnUgQ3Aq|esKan 8^R3A|EHAIt5&]`t8>diaC={<r/pRJ>U`[/ pvnS- Hq2' );
define( 'LOGGED_IN_SALT',   '8$X(p^S0Ah=?Hw_kTqo{n!A{de]YXTH2:WEHpJ~|@6LE{+-sW/L/+`CXy%jU2m`b' );
define( 'NONCE_SALT',       '_Pd5>]^;Y,;y2]DRr;s#9nXy^;ZgY#s7?hJ2b<FG4Avcnls=t3^5E)Jq6aI*XN [' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
