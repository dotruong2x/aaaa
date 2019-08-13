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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thangbomay' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'W59.C+0.e IIh}M}DjBgM,1~dWlgGJFR#1|n75Ign1ffe#XNYpbQO[#PAiXg>m7E' );
define( 'SECURE_AUTH_KEY',  '5&mSlJY1Q*$woO;8:XG_mgK.q&:BzkH(vwH0JX%G_=Ct0dCag0=w6VKwy%Cww3B<' );
define( 'LOGGED_IN_KEY',    'A]fPKKS&Z+ qSp#$={O .+!LUe#].@[4m>^PxBL;|mQQT2U Z%w&_A_iVAFrdAl8' );
define( 'NONCE_KEY',        'FYv2dln5L20i3u#p!DCL|&$ovd 7p<8l}SCt%;yIZr*Y2ZwV#_H[hw=m{0[sTxsn' );
define( 'AUTH_SALT',        'YZz*qC@}SOz.4=8U-n*No;v1Oku$+R.Sw8P*+kmWZ%QNX^na8^e;6,-GH$4RZb8~' );
define( 'SECURE_AUTH_SALT', 'i:(8v<0$@|9z1qI{`9SV0WJvgS(w5iY}HqaEdIVP:=`o7w]~l;:5HYc.p`^KN,MD' );
define( 'LOGGED_IN_SALT',   'qfQ>.fv9ONliEx2*l1)nOm{4;%5dMCYK^MFG G.Rj;AK}Q;ZTz;|0q5G[#gg0f<%' );
define( 'NONCE_SALT',       'Q# ^TRGTqVIyD7|=f1w}4Wq--Ina}wa<]ihqRexl{4qQ,g%w{$8z j|2w<a5g`Up' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
