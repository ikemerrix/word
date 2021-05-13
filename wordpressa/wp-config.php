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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'merrix@mc-dbwps' );

/** MySQL database password */
define( 'DB_PASSWORD', 'men@worK243$' );

/** MySQL hostname */
define( 'DB_HOST', 'mc-dbwps.mysql.database.azure.com:3306' );

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
define( 'AUTH_KEY',         'FNJL^7&3I:mQ2L*U+<V~l<8i&cM-IQ@f9`ix8t)8KTS+l0Ul9@Vhk!uN:#m*!uMR' );
define( 'SECURE_AUTH_KEY',  '%Sp,Zc9p>bHqyFFtkug$!?peA?Z&Unn~b?Gi(~jVCN7`=hNiLC~ 2Y<nM-VUscyR' );
define( 'LOGGED_IN_KEY',    '16:|4*g@V[p*E[y_f?^DwX4j+Rn)}0$#xdZH=>^./v[3=gri^z:_~anQW!#8*4%n' );
define( 'NONCE_KEY',        '<#QiF+y`CwyaC/5->f#Q?Eubo3MarfPk;Q|2,@|{yFy,j-&iP,7 3kP*QKU7=}{.' );
define( 'AUTH_SALT',        '>*zmZ`+qG&i&H)C}3>g!kS_Eb[W}-$*1s;pFb7B.f+21c&9k||X0HUixWjt>Lk4Z' );
define( 'SECURE_AUTH_SALT', 'JQtNvC~y_F+r`J6?w/J36,po^+M|<.(.3&D]Dum!P&X,{bVc*=x&:mQo=LkD]^f<' );
define( 'LOGGED_IN_SALT',   'ii%&dos@QgPiz(P hn|sZG(zyd4p.t4b t=FdjIPI|Y]O>Da6%elT{s+8q:($[fA' );
define( 'NONCE_SALT',       '(RWl5x:>;n9uzS;{_MFt@NdE5!YL4lw[Kt9=B]%Oyc`2k VQS3kDn#D1QlfXjLSx' );

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
