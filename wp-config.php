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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'p1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'PY%WmmcWizl-y{ZK&8WV.7f!>%>soWm.E5.<IMz]oP8b-ybwR~jRn)9$7N,nA#=&' );
define( 'SECURE_AUTH_KEY',  'D@N-wMzH+Ns)Fvc2:z?pc^q1rr~>f/0b(}ogPr,-~S>o~6Ys{qW*pyP;x8sWejwU' );
define( 'LOGGED_IN_KEY',    '+>)M9j|g[`fR*[/,^)_}ugsT3qG^{q.r0?%piG/#vIv:[|yr!Yx;nhms{l)Q:,s4' );
define( 'NONCE_KEY',        '&EdLEa1 dnNud;Ax6lmod<]kW@6}u>?SpnD8M;)@OzJ0n$t[nS#,S5yW*+?UJ!%s' );
define( 'AUTH_SALT',        '4Wl(U01j7`^aVb!@=Y4B4cYz)|;I8cW|d{B6*Bq@r9{rKZ^=hhCpoj@_dqmi<K7}' );
define( 'SECURE_AUTH_SALT', 'a7Ct~ET{iu@wPBI2h_{vnVm]F`+wmo^pG:00Ofu!Bni]VEs&1eTR|qXN>+izFibc' );
define( 'LOGGED_IN_SALT',   'tEB#|s>QBzQ[hWS6k%>h.eW$i<DSzskrxe]N@*Q#WZ|D_IGCM{A{o!2@6p+A;Ncj' );
define( 'NONCE_SALT',       '_~ Mj;!HL+D1sC /8sWp-/Sa6$bg8}]L{Bf<y1[=eo.$*[(Ley[Q5e2aYI }zTe{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
