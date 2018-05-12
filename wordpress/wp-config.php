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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 * user: mkilic
 * password: 2Bin23yiliWpbootstrapA
 * @package WordPress
 */


define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpbootstrap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@dN5QF(52Q@m!:K N}d`w f2?#-Uf*|MPrA4F>@._y2x[p^E>n|v`Xq$e+|G?.ow');
define('SECURE_AUTH_KEY',  '0SK:-9z7(w3Kq;q]z*0Df~^}i6{m-~32~j!AzPy<=0L$#)58Qz7m7?A:ja}vw,e*');
define('LOGGED_IN_KEY',    'G4rVwEjM`FNdoR{,mPu]Jl0tJ~lU2e+Y-dw%}$%cvD+aL9ODqGq62$N|M)q:I?- ');
define('NONCE_KEY',        'W-Em:Pj-9qpif&nPwuIJ~6YOw3zgYwSI&P&)SmHz*bda:4T.8qvakP%;U5}b6m!:');
define('AUTH_SALT',        '=$%%YxZOVQ^:$/tL;pRIjS,j._S?:^%Ocn*:ye-Vf%x6n3vC6~5XF+4V_=|*6T;f');
define('SECURE_AUTH_SALT', 'G<r[nZx(Y-vElaJ1T4_F-TF2QVnc/-1:8?KpgA|LvDDxw!XOO/D^PTqrqSVYhG@3');
define('LOGGED_IN_SALT',   ',:dpG3JwF)G+D%4N,W0re*=oifxAygZ2hTN7+I-@x#+%F$}2~Gidw;.,qyR-/T9t');
define('NONCE_SALT',       '@&&yd93y|eCY^y>qzZR:Yee=X6dCpHD}7GK*Q,Dc1.Fu%Y2uM=fi4(A+XdAX2gYE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbootstrap_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
