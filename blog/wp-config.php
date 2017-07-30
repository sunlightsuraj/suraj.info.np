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
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'suraj_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link 
https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key 
service}
 * You can change these at any point in time to invalidate all existing 
cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '43vw.YSjPH]?U8Pr<N_JBin[XfD~> 
}Y#%B+yYl}.`TzW]:}mK^hUt~TQHIyAc!N');
define('SECURE_AUTH_KEY',  '~1f*f}0pZiIm Kg)o6JJ]:0aG@rln/w(YKf9d~ugT4S 
vI8O.3S2:<z{Lp/aT [`');
define('LOGGED_IN_KEY',    
'2+{eWfG<G,g^#>UvPp61gRRRQN>u1?2|P*73G{{MhneaXZbSlut+)/0aaPchVa~t');
define('NONCE_KEY',        '7bkW3;!-`Kg8+E@~fUk;cSXE2COB RMO 73wo7HU7 
nzM4@LEWeZKs~wh0ngB:;?');
define('AUTH_SALT',        'ROpTy=.qSwlM#X 
-v|sSjb,`xQ$SiIwn1<O>C@Z3m_Kq!lXQ}FPB@-Z?^[~3Fo,z');
define('SECURE_AUTH_SALT', 
'/ahZ`!O?cB;=ndLlRf}Ma>W5r&dw|!$SD,).aga;;{?LY1$ 5n^mZoj6Dpm7fE2;');
define('LOGGED_IN_SALT',   'ykN_}k!0l*W>!Fs9qg_G,2-sq 
>E>K`cv%K$>1XJwYwZRRhLQ]<Cr4C>+^(.%$0.');
define('NONCE_SALT',       ':z&zSjXDxNA 
vTlEU,+^FXLCSKYa%pH~h9C7#Rbel/jZs0fE~p@k`MGS1[.KJdu:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during 
development.
 * It is strongly recommended that plugin and theme developers use 
WP_DEBUG
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

