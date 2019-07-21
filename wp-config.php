<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'islandDreams');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's1AZh`&Ef*e6bGMB~?b0SfJXni8uqG_s~mYl7{!_/dDv^oFC/sCW&]Snxk?/0uUh');
define('SECURE_AUTH_KEY',  ']tHi//MKC~hhUrG cka}w9Kc/kB@Retom$j/ gk/Fv3{iA,}N(aMPL+% _0b0I2}');
define('LOGGED_IN_KEY',    '(z;mTfiaSSc@H%|E*.TQ7$ml2nbFG9^0JJBa;v5~!|}Wp_1K2:~|lG:{!%LU9djf');
define('NONCE_KEY',        'A JQ8M&l~;SU]my)C; SYGgj0--:sZJ:Az9*EeOdz_K:5<8|$u].7n>=dW2bHx1.');
define('AUTH_SALT',        'wz8|SG72K).I%g,C,JDf(5@|x<[P<=Ev-^%zvfJu8ApmAT]o pRCmSD6HfI`S+7F');
define('SECURE_AUTH_SALT', 'jM0uaM}O6wSQB,Y2;!6VjM,dp,`$bDp(N]sfqJn,]$SoLnU-B[<Pd[?yyW+{:Lw=');
define('LOGGED_IN_SALT',   ';<7DJy0Cy>`>QZq-^3-@JiC`x0f|wr*O.vaS*<BVv3x{+|#uf%X*8BhoB23ylbDD');
define('NONCE_SALT',       '5DHrr|dKsmO*j3QF.Yyh+i$5KI88idbLd)($QUiM>;ZqK|7d]cnU?ZDWyA[FF<fF');

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
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
