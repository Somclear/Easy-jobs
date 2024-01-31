<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'easywayjob_db' );

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
define( 'AUTH_KEY',         'i0j-{1)b*mz8/pV|EA/QN@eE&DUv?T*W__e?`;=gusaF^4P6v9:iV8AqImL$6`><' );
define( 'SECURE_AUTH_KEY',  'XwPKs[_#~(=ZF7d3x%N@F}_Jn)QhOdv1e33%DYIJIHDx`h.%JzFG.EGYWX=aTW>N' );
define( 'LOGGED_IN_KEY',    '/XYTOCi=L)O*LMJLv?Ra,2]GDQheW#.upQ!veO}AcG80I!#V>;D9-kBjkc8[XFk6' );
define( 'NONCE_KEY',        '>20_e3|_RO|21=k8@_~+yK%gyF75~TwBZ=_Yv:z3<wldvw2n}~WN,.[@OjL#r17d' );
define( 'AUTH_SALT',        'tohsX{Pxn|zGuL2,E1Wfis+F_<fR4+>JmV[u:E[O)1`86ekfm}&}>W5mXh(cP`N ' );
define( 'SECURE_AUTH_SALT', 'bY|Nn9u.hhEpe7.qm)9dWEc1K0Z0$sM=&S7ICf:m60cV8zeU5OB}m2*t^Q$Tao1P' );
define( 'LOGGED_IN_SALT',   'dI~t|cq7LzGGx$.(!AuEH)yP}}uRSE:t@2d_SvP~l=8|WEr<|8ubdj0g#|~L>,*0' );
define( 'NONCE_SALT',       '0@(Ub7pXEX>5/hoe8zuQI2k?):WP< `4j}UbIo4v5cc@~fEVkM~8nNb6197EGoCW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
