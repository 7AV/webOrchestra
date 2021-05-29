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
define( 'DB_NAME', 'TheAnswerIs42' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc' );
define( 'WP_HOME', 'http://192.168.99.142:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.142:5050/' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6B[53o[/QuM;dSv8_2 Ttal Jf3}-+^{0M6c,4%&  BBAJ#~^DfblhhBa*1e;dbV');
define('SECURE_AUTH_KEY',  'WHz1iYbqtdT^*iXdm=37/Kr^DMYE}SsO7-/BPSYe5@qdHWfS0]AL-XD^A<bQ%88E');
define('LOGGED_IN_KEY',    'i<oPkh){$7!8h0JrL&A7X/wl/rt/FdV:,@>h.g`YVE;abvxBqP_+q,8hvI@[2+ij');
define('NONCE_KEY',        'R4ql+CK%>EKg!j1`u*3@I0W0)4d|@%#:1>:FxAxqYZ&AK+T.jUXW7a7EAOLI/[TZ');
define('AUTH_SALT',        '?yAv]=e6|>knkgJ+`xv5+=`3mLsuWKE9BY[;QXf)+2}VBp0:uFWpQhaWHmkW1WjQ');
define('SECURE_AUTH_SALT', 'rY/|%r0!eJa:WLk+ex:OMA{;`D ow-Shu#(kOBitUnk;fWiUB.xYLQ,HSX~K)u6t');
define('LOGGED_IN_SALT',   'cZt-I+HJj*! ]TWh:O(!iSTZY=)c(Xc^ZV=qjpnIQj#c. [0+a+*J=R^+s#*9a<,');
define('NONCE_SALT',       '_(L,kF{t%Q|N+B4AZ!=J1s6w$bdvDCx>93F84Tm/=|pg]Z#K5^:$F^*$xzo[C_]a');

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
