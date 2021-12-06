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
define( 'DB_NAME', 'manga_planet' );

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
define( 'AUTH_KEY',         'PXJ9Er#Qc=SICav*CV{1;>Fismn5R2A.t-q-ar(I_-@V*ZS!KFGjkOtf {6PZw={' );
define( 'SECURE_AUTH_KEY',  '<EiU9H+I9tcr}tvAa!E8XI2_e^8i25M.^}2_qk/*Ay8,|PBI?PJnw[|0f9u$ts`7' );
define( 'LOGGED_IN_KEY',    'jI)-6mvg]e-oJBed%gcV2dtN-)xshMwM$I%iXVU,s=C$TN;G:kt g(xnjt~ePyzI' );
define( 'NONCE_KEY',        '>,q1|G&r-z_.UBT}?e|N:RN -#Q_~@j_je$.[}A>3_X: :rw(Ppc8h{oDQ< i!gJ' );
define( 'AUTH_SALT',        'eH?e{O{`QR)PK:Rh:W>%q94( _@$bCl%al{}[u8b&7]~|QsDU1(5[Hhlra+)[)dc' );
define( 'SECURE_AUTH_SALT', 'g9vKwEk).BPiKBXgzflP$ -`I4o|bdCgUsHNNlz$TY^QMEoC{Jyp1;jy}>xi$Mz+' );
define( 'LOGGED_IN_SALT',   'u;=}P-En$?0vQ[r9ZYnqn~NB}1=aZE%BT@GUfuTiL.p&cg(7L;Y4$OFWMA*,K%,h' );
define( 'NONCE_SALT',       'Y8n])f0wEC6X%=L.j?|^MC}+(B.8Kp;e8X2E?zha(RV@_YHl ]^Rj~2oxS^f7w>k' );

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
