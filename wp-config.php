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
define( 'DB_NAME', 'stories2motivate' );

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
define( 'AUTH_KEY',         ':R$XAFv_g0WB3?G|^eSVs^!QI!@d|hgy8gqN}S4Ug4O}}ohJ5?,I5<t:>f+N:9A$' );
define( 'SECURE_AUTH_KEY',  'W1Sx1LN_>vSg4fG[yoKdi5G9lmjunFPud#Q2wnnmTs8>qu)KOf[Un}BR`xalKXJU' );
define( 'LOGGED_IN_KEY',    'EbV>Ch*=wuDhBkrR%(*=5N)>;4BH!{D/ypaneFF|.K_fn:OQk+*ENeAG$W{5/j^E' );
define( 'NONCE_KEY',        ')<DCxx5kX;l_@C8[y6#YSPno]nlhupUQ2X,%]S7]4E]iLPAtyYTFZI 5v]jpAB[.' );
define( 'AUTH_SALT',        'rQAU awQ[X}<CKPGw 5z8-<H-E%Zfuwxn5H}-CRiPG!&D(.R9RFj|7{P$uWm}Zf9' );
define( 'SECURE_AUTH_SALT', '(Qda}i8^`Mtsp:B?U=3lNeMIAMz${)Z;p!3&Q0X7@{SEl@hy&$G!$@g.<x..g1+2' );
define( 'LOGGED_IN_SALT',   '9N*@cNN J`3tJ=0&F7~]9[xqae8lJnl$e0s<bXNrY/C)BES&]pwjQETq]z7|:qOx' );
define( 'NONCE_SALT',       'OW=$[rKL5}Yts1xg/3[}|:Mek|/.hWu~w(`w B<PDPCeG%~AemSLreXCnMtFIFM4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sm_';

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
