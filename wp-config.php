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
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'x?<DLn:7;> srhM7l.C:[J(M%[G,3d?>Q-j`yLwl[bn|[]d$T~X_Xy39hGb*:N+:' );
define( 'SECURE_AUTH_KEY',  'S9O;.0J/^4/syS>Y0D[?XiOQ?2am}IHI]@tOp|$?I]l*JauFk{};znd[VTj2J#[=' );
define( 'LOGGED_IN_KEY',    '|N_=qI_y)k1bs,:Ki$I Sy;7Qr5ZF@wWV:dn4Yv?N^LUO!]s>]/jq$Isi7g^2H}u' );
define( 'NONCE_KEY',        ']#{6$,KC!$IAq66TPXV2wl`/[]DP:@D`</k>^SW<YYm{<W^G+llJI:{LA>J|IES]' );
define( 'AUTH_SALT',        ':2o?RqrWs(:Ck{)x!#X!OcFd.zsTKUtW,0?5f:Zl=V[|P:zyLsFzI(PgO:-A^sHO' );
define( 'SECURE_AUTH_SALT', ',%Yr|}Mug<*WO$I=8<2GpEdQ=y7Dxac i,~nbku%X[nY=SX)fl||g]Qasi;Y>:[=' );
define( 'LOGGED_IN_SALT',   'g03[b*3Of1zjKGQTnFX>l3z9Ii>.V|l%XgBj.uK~G4%H!g2-o80B=$pN@sS[?n3q' );
define( 'NONCE_SALT',       '9E7:-C`pxk>)=Q0eFUR<^0)%K{lIy<MiL)OQ=|<7^-!ZI+=jM#`U/;};r=}Va{n?' );

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
