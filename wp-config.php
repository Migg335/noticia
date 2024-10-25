<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noticia' );

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
define( 'AUTH_KEY',         ')u yKhY.6R=-}esgxc2W(_Q`j%rS[VO59!`jEV~G^c{?xGT<h<1~7H&,c+av*%[I' );
define( 'SECURE_AUTH_KEY',  'fEa}laRY^K34-xu>f%N9Q5-X1_F`~8*y;PT_1Jt$JG`*(}pb4phBQ]CrDu=B M(Z' );
define( 'LOGGED_IN_KEY',    '$[:-BTjN<HM7c~@$HK*So$CnV/qI,79S+Wen>YE5^Fx2NJ5~ZJ<W4Nf5E2.q-!h=' );
define( 'NONCE_KEY',        '^t]E%+_9u&G{*WNi.5&Oa4cS~<nPP@3v|r@+/u#~t6h:{vkUlt0u5B<ubSh!gFz3' );
define( 'AUTH_SALT',        'qZc/[L5@[&qL5duqIh|,[s.jJSB@R?)jkq;A(K6VuJ<~.J!RP*YM6%#zPabOEm]h' );
define( 'SECURE_AUTH_SALT', '_WO|l|8M$BZ)g9OFlFjbwb9`$Rz,oa&$;qi<vv_M>#lnUpA#Bl-dQM0=J@4G8E%z' );
define( 'LOGGED_IN_SALT',   '/4v=|&jUYj/(lj9E+~LB_8<t.g(ch/!j%vwGd?u*R;?&3z{TI-lka!&P5,uW9Ssl' );
define( 'NONCE_SALT',       '=%Y^`bQF*K:?`Bd GI[&BrnTPr;N28-x:K&T+>p@UcIU.bOl{GtxsLU47qy1:R8J' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
