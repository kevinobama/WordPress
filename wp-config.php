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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'google' );

/** MySQL database password */
define( 'DB_PASSWORD', '654321' );

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
define( 'AUTH_KEY',         '*qk{].7dFs,3xc#]e{xr4964{!R_:7ws<AmD(SJ@rp)!+1#K>J?X?hW)4D[bI5NJ' );
define( 'SECURE_AUTH_KEY',  ':{yi/WQNjR]IUFL2hOEc!YR*}=zr<`lag`V7kD?wH^$6.chJdrY9ffnA5FzV>dU+' );
define( 'LOGGED_IN_KEY',    'sd`Yh!@2.YW: H)dQ>BSv6~FGM?JhOAc&v[ru@b~|bfY1u-b!gj9/eKe7UkhN)OQ' );
define( 'NONCE_KEY',        '^}1%7gT{YhvY4v,(EPk1X^3pOi~eweYy#@x<(-ReJCHwA->xr~<_uyCZHFKJ4bQ|' );
define( 'AUTH_SALT',        'C -~:%4>_A$E&.`JTH92 G,ScarRq#`ucm@TBNoNTN}HP;plJ3gXxd+I3h)?Z[_t' );
define( 'SECURE_AUTH_SALT', 'XS_Ko_:>j13kOy8z-LP1XrO52nIi|GJ%9hJY(^IK!.YZBzYbvyTr$Vc0 g++Z;( ' );
define( 'LOGGED_IN_SALT',   'Tkf;#RruP5&yDYqlw:rVCv`hq(tb$<BOe}H_>z*M3#]6NB$/j@uQ/X_7=5)#l!v=' );
define( 'NONCE_SALT',       '12Xm>q|REgX5:sJL5Ym4H1]/uhho0p?b Mu~)}$V-T:xFQtXNM,*pSDWa=*D+[0r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';

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
