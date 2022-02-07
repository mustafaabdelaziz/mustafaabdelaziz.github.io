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
define( 'DB_NAME', 'pothole' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dW.$U]L?K^I)ElK+{VZUQ:.m91gjfBlpHjtHP$I7z/2Ut{igEzy:Ib~.iq%T#-X;' );
define( 'SECURE_AUTH_KEY',  '$ksA;6/Rd2V:]miw:V|NW@%(ctFwN^<Nt?b{@*J3%AV#|OvR{q/5{Y%LFr>m~u,v' );
define( 'LOGGED_IN_KEY',    '@(EO<tMh {+9|IYKG^$&^g-]&ijxaXj&26P:tTP)`XyMs#PCa5[$4&[=+]4zb|:9' );
define( 'NONCE_KEY',        '!SR7tIJI+IvU)t{25|N=a0W?c]`]Oiu{YH:[fK`]j*+((p{@$faV5Hwk49G8SjRL' );
define( 'AUTH_SALT',        'fjaFK5rC^o#x2AM(tW2)4d.0Yz6G$M?VH]jX,ez]ha7g@+~~5;bmJ~}*M)[ ZwLM' );
define( 'SECURE_AUTH_SALT', ';QkTizw+mEJFn.lL(xL1Y/Okyak!g$K!N-r..hc]&]vuwy0.2EkYWXXSwnA%=La%' );
define( 'LOGGED_IN_SALT',   'u&a2?~NF$hT?,xpm*_)TTKMi&gc^^6[U[9A?pblVskjhD|?-#2?n1Mr7Vb2$JXJR' );
define( 'NONCE_SALT',       '`(]$|c+t#a4pFY8RPi74gv$RoIp{vq5ToeKK  *g-)W)YlL}4M^Foo., rXkvWc6' );

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
