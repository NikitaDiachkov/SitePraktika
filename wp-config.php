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
define( 'DB_NAME', 'wqbqe_' );

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
define( 'AUTH_KEY',         '`qKN<()d[=2,o^>bl0+B%3eoq*mg6t55lb9Vj|zW~cK`FH[ERz!zZN7`9Xy7]3,Q' );
define( 'SECURE_AUTH_KEY',  '%JTa<GY]O:wUPr& Zo$%eYqEQ<,45]c-]CO.e@pIb^dgCONey@RUm$J#bZdFu<*x' );
define( 'LOGGED_IN_KEY',    '&-Cu#URp<*6%=-p9t}q:~I(etIE{y!C+@zLcE22,ni@+ZQLx%?b8R(vb /aGw2!*' );
define( 'NONCE_KEY',        '$Y,G~ v3gb(_<-w?Z}]BLb~VU)Ctcq{I];A`VuF<4->sY*Yk[B^FL=Jn2dM4z mz' );
define( 'AUTH_SALT',        'Ec;.}p@3/^0/sX4u+h-Y5ACE-0aRKB#4z:0p6wXIW<.)Rej9L*Z:<mRse1m/n}pH' );
define( 'SECURE_AUTH_SALT', 'AnzG=wkM|2+9W>a)K|QUmo$y#~Jd/o!X2H==dL6s7ODtJIe5G^>&;Uy0B?EDlytX' );
define( 'LOGGED_IN_SALT',   'O<Mre,Sy}SGno_h,VIFdCE|2EiZrFezq0_^_D;i(aJ)J/%!zg@Z]&J>nnF5Qvqd&' );
define( 'NONCE_SALT',       'B)`k_pkXYs:}[30J^.D`Nus~w=9elF7<udik, &,Xc2)puH3fyGf:p.A]~Z!nT( ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Dyachkov_';

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
