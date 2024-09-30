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
define( 'DB_NAME', 'wordpress_emw' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'AV!)0w7>>qa4a./v]xT]VZkym!qH/`uL<rO`]-6|0|aa>W/o%_Sp[MP1>38%sx<~' );
define( 'SECURE_AUTH_KEY',  't4&2g::xt-dLVH4:YMT]2~$uk2%ZG0s::EQFo(pZyS(I*rN0||%uSD-uJ HQ4AaC' );
define( 'LOGGED_IN_KEY',    '3`<X0v[Pc[re>G)pOLGfpe:kt,5Nj=%QaSc&|adP&OUW8E83|3>.{U^6V{c`qDeS' );
define( 'NONCE_KEY',        '6ea:jIcu#TZZpCk~J3Q?eljW1QmVhg8),yHqjyaAONw#)<)z6<:sA;wk[yB>n!k+' );
define( 'AUTH_SALT',        'zoG5B4_L@;}l<Vj1/-9<3zBLVp6KP?5t]ZOPS%<q{H2}*G4.1Ch_.p mm8|Nfr`n' );
define( 'SECURE_AUTH_SALT', '/oAkX%Ers-d@?[,%:1,jXHMuwbdmV#&eeLx4Uo]QcYfJrFg{rRDb @98v*_^o5wv' );
define( 'LOGGED_IN_SALT',   '+3%wNb-aX0Z0;L](_PvC ::-SBLX1L71g2HXc=:PW^S0pNDg#_kJ6w:ItIp?+4nm' );
define( 'NONCE_SALT',       '_el13h#UyzSb]NT0#9{5kcWp(9ey{H @L~<|eGY+8zb|1ncXd2lFt>2f:M.xGTJo' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
