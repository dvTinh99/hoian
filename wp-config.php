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
// local
define( 'DB_NAME', 'hoian' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'mysql' );
// prod
//define( 'DB_NAME', 'hoiansmiletours.com-db' );
//define( 'DB_USER', 'testuser' );
//define( 'DB_PASSWORD', 'vantien123' );
//define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'V6{Jfb{HZhd.V>hz%Mt6&OcESVu.f3)bf9JW 1X>y4R0S}:Z9Nmy{t4-T/Xu^|l(' );
define( 'SECURE_AUTH_KEY',  'y;zbuMG2x16{e7#Ee[6`G`3k!A{CJQT0x%AV}{=+NQ{bj.`Z.Zv_IJ]=<P$[qhA_' );
define( 'LOGGED_IN_KEY',    'k+igDcpds:$Q<dZ_GKSll;/v->%sy9wNE#0aJUEKWlB0gnS<R+)k$6Pv7s5I+7C|' );
define( 'NONCE_KEY',        'qHoUSJz,r5r}V]ngdysXDj#5V[^T:+B[rsaf<uK[w}=5Zz&=:3D;n!3*[!d^,/*>' );
define( 'AUTH_SALT',        '-gP2m+gyC}Qo[!AEQ%UFp*K{JQ=h|Z$OG,HNI:?q=WS|b4_L8F1s4x:;yQ~9*4Aj' );
define( 'SECURE_AUTH_SALT', 'GgP|B<Rd/66>[)|7Dbh?4$l9 gkW&k}S&V}K,i{4TTC:$q-DgBZ9s3>.pxQbg:{D' );
define( 'LOGGED_IN_SALT',   '+uiz :]O]/g&UmyJ071 i3z;}V5l#7y4>I|{pZEzv6l4lA3<iQ@9h5W+X:#{b%xg' );
define( 'NONCE_SALT',       'eD&#U4I`&)CR[Iv+{Tyl50+H*{%>,m#IS5t*htUC[gpaW-(1:~nTrm*=srxS9`~O' );

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
