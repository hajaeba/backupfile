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
define( 'DB_NAME', 'BobNewhart' );

/** MySQL database username */
define( 'DB_USER', 'BobNewhart' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dYNLY43t' );

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
define( 'AUTH_KEY',         'Ve2,GMwU`Cmf_u?z6XliQ*>Ml^L!_O.F(+LNS;+W,DiOZ{-7K(&uI<E{s @g$T8y' );
define( 'SECURE_AUTH_KEY',  '*iWt}m*cnf%9NPEqpN;{A}.1pD@3, IPeV.rN8z~([6.n2HEu3&~]BA3V^Qo]Foj' );
define( 'LOGGED_IN_KEY',    '(,KS)9pwN8L{OEUSt_?am)r:_QzSARrtb#m.gOUZww!oH!f@lkb*iM]-UQ5[|8J^' );
define( 'NONCE_KEY',        '!z3)mP-5b2Nj.96Tl[&?Lq2y?wDR%Qqw%{_<f=[TeOV$K(tHYX;RA< (z dPQw=Q' );
define( 'AUTH_SALT',        'Y#N`^ o2?.T{[&0+61q9tO&2 CX<~GzkROL{[VmZAel|<2:.?DYwXuD%j7!R1dGd' );
define( 'SECURE_AUTH_SALT', '{1[Yig_~cXJ=!PyiX%r*@0y LaCmm1`pe}xNGV9fh*xpNhO0nt{vKA*qnitdYBKx' );
define( 'LOGGED_IN_SALT',   'Cwc%C^TRH|~gJo_j3)rY}IrUJ6^`(kdDkYRc_J@rl&5Cz(CDc3OD1qgX3OIUsOXo' );
define( 'NONCE_SALT',       'ZO~.n%W}fm47PjVj}:SPW9mOxbD%P.1U^~1-eE]!!l5F2bp4SNI*4c2`]-4){Ko|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('DISABLE_WP_CRON', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
