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
define( 'DB_NAME', 'masterdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shoaib12' );

/** MySQL hostname */
define( 'DB_HOST', 'terraform-20210623091801323800000001.clivjodydgdm.ap-south-1.rds.amazonaws.com:3306' );

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
define( 'AUTH_KEY',         '`RBN=5A;yU]Urs/+XC+>d>()rxE/M4cXG8j;c.</ma0/1[WU1t&FI<zH}TeQ8A%J' );
define( 'SECURE_AUTH_KEY',  '$xoL}>z9;Eu<n{bO;2c.2MXJ<Y8N5[jLVT!)$9iK~i~!Z34lJ UCLk)*Wq^4#lF{' );
define( 'LOGGED_IN_KEY',    '=yPBFLZ;CI>.}bg&{WVUZGSObY[Y{Vg3u_}lYBw 6B[*8d,P6hLFjlv6/+l<{{qZ' );
define( 'NONCE_KEY',        'zp[j6|kOU|J9$8}OwqSoaNFkmit~E6!52#^{U*?Z-e$a)K:1dWe8TV8zL6Kt4D?f' );
define( 'AUTH_SALT',        'f4*;_ Az-Ud S>[^:Q<RP7v`fs&EaMSbSRW*t@# 9]*!R%VK8jv)i@)ywnlcP?6K' );
define( 'SECURE_AUTH_SALT', 'q2Up~G[f->lpg_j,hP|Ubm:|_1:X@M=s`4FY0/&v(6FqX&OHEm$0efdUaHgx%Ho*' );
define( 'LOGGED_IN_SALT',   '>V/.PoZ|2C_<Ei!MLzm*([>,J)p3wCW0(m%cfep:Oul>lEeMfv[lS=4I|HA17*44' );
define( 'NONCE_SALT',       '_[}/~h,fFvr[6%f-IMi}V+5/N0G=CC1=3Bn!i#X`S>&iY7aPPp[(&_,tAro*TyEL' );

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
