<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'sql_khamulungree' );

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
define( 'AUTH_KEY',         'D:11/|%4)Hs?=[r(m/itB THPIWtW>**C27|A]A-6k!zIaIG2jTi{2 DgwR}|#Q$' );
define( 'SECURE_AUTH_KEY',  '_qV+@_7RU[w0=@Zn~8E.iwI_@2]|RPfaz 7>f~=Q)9;.!Dw2}8)zxZiyo5lMF)O7' );
define( 'LOGGED_IN_KEY',    'I`PAr{E5bd?$K9<c/]3B6ONk3k8;}JyAnupz@Ywe<l,d+?z.ZtJcXaua?yBdFuCl' );
define( 'NONCE_KEY',        ')Uj#t)}x]zg_H<iD3aIoLN%HhfPsF$5xELc$Iot^OU8u;FHCgU7_/[GFPS?vSKwT' );
define( 'AUTH_SALT',        '/HiGGCN%e;njo59gRwr7jU7%%Hxv=q:f>uJa+Z106^LW_T2DEXWuuB4^ 2,j>;}x' );
define( 'SECURE_AUTH_SALT', 'Y_~OFq1T5Qi81s}d?^ihm1[o2!x=/.}1PN&6Yiy/w8}5FetrR}O9h02JgyI &<S!' );
define( 'LOGGED_IN_SALT',   '[!!8!15GxeaFEkY5l<i# 9dn#H?#[>ZTJqAIZxC)d,Aq3Wr,X}Z9JrN*JV>aEZG?' );
define( 'NONCE_SALT',       '74C+Q`%klsKF?XL)Du/sefjl]<iFC@R,S@R~;~N^Hit:KIR]hglp0LPTmiJ`[%Ul' );

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
