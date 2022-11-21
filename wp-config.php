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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbakcent' );

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
define( 'AUTH_KEY',         'clQ|rDZh&VE*Ue?uuM;+g`yzFQ)K_(R{Q!i2Z4Nfs}g1@}Vr|jS,tE+-$n#f)=y8' );
define( 'SECURE_AUTH_KEY',  'bE}Z8c7!FRspJc/2UOWq!!^<F1>0g4=U~<0sOPwFIU~/+{`CkYNtc?)(&OuQ eR|' );
define( 'LOGGED_IN_KEY',    ':7uQZa/3/6h!8d|[?E9@se7!O[]mg:S^ozNv)zck4GUdGImnr(k;%L(UyQilXa1*' );
define( 'NONCE_KEY',        '()F%#.F#D4>4,z#F2HH[rzN`/{QVz8}{19RBA<jyS~Vn)X^;x]n3]KC)RcB+LydG' );
define( 'AUTH_SALT',        'F^,hP rcX>/j7 Rq7wG<[d{5E5{!nm@t,6~&J.#3 kN^nw1l19a S~,QN+w;/e+_' );
define( 'SECURE_AUTH_SALT', '=aLxkKew # M;4P)]sY35VJ9K.1<2^IoZbf|gnr/DNEDkC/Qm<d]Zi_^k7~@r}86' );
define( 'LOGGED_IN_SALT',   '|=o[71K]IB_Vqag@383=sEV/+?,6qiLOD?&+M1urDv0kJu``g0kovx:-ucEcP;V0' );
define( 'NONCE_SALT',       'NRS=/I)iMYQ&zLWyQ3{vWdSn,<-mzejP9EAnr?dQVpMySqOzic-yW,PQXY3X?Huq' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
