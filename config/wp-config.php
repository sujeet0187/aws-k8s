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
define( 'DB_NAME', 'k8s_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Dannon13$' );

/** Database hostname */
define( 'DB_HOST', 'k8s-db.cy1q4imo2nhe.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'qgAP5t0@}k0I/`bwmAe}eW~zvxZgKyHjL1j}?&r^o80JO:/vWgj?{j=K?N(oymWY' );
define( 'SECURE_AUTH_KEY',  '2q_6mkT*9/@M23/C`.:.cT5IIPw1KGIryl]e8_-1QGv/cZibs#F8kU)U.S0s`,/W' );
define( 'LOGGED_IN_KEY',    '^:i $^?k|1D(cs*+j!vah d4m,:k_.SU=[qJzvB(bvH%/*iJBd/PSb&DZ{4E7$`)' );
define( 'NONCE_KEY',        'K4))Hh60$._L<KPfih`]-_/% J&%]uS/zC.kLf;N$bymmw()yl`^#lg pdBqvezd' );
define( 'AUTH_SALT',        'Rm0ybtE4OZR7HTvmb_CryLp6)MA $:Rj|oC[^>LT/DjjcD TSSL%j7(-G)07]KO@' );
define( 'SECURE_AUTH_SALT', '>8X>7^N*2QzhsTP!/_b i3[[8e$!s>Qk#0fM lO@KDZCx.=UFCU+wTdj-Cdq?U:d' );
define( 'LOGGED_IN_SALT',   '[03Y~yjZ!xQwYk08J/G^+c8[a3P}Su/l3eKd(2,Ck$Nnv/G$%-i@,vSl-K+@eA2=' );
define( 'NONCE_SALT',       'v>j4V|CnKce?_4bVn~&a!b}/KESzi(KRbiW/ .<K_D;ul>sS6>>FeJ fq1>)T>N+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'k8s_';

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
