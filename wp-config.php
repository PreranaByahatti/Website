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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp3' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         'A! YVG%2[W;ILIha|#bCN3#g2IjYZqICl`c&.-c8/j&7}T=:9>]-eZzQB`d%%H1n' );
define( 'SECURE_AUTH_KEY',  'GGe ZnJ_3Q@u@|6Qxhq&h(u)p(Ru*?wRA^ImR$KU;Ppo#VIkB8O{5H)v$59BQw#d' );
define( 'LOGGED_IN_KEY',    'bmowNlbEFZaGxVrV1v1BYaEd7BK,)s!^j),l,qHCpd/4s7^QcF[jE^[<(PR[jwb(' );
define( 'NONCE_KEY',        'ToLQ`k3b#vBctc-<z/we|k=&@EjUQB#jeB5.&`|M>B$1;@g~!+]bJ#4Er[:@+a{K' );
define( 'AUTH_SALT',        '3u,nvBW3X_:Zkv9M5=,UE7m/~~ocGDhO*?Z.W?M$C7Q}@(;zISkRNtVvbSo4A.,(' );
define( 'SECURE_AUTH_SALT', '+c?po=04q<@JmVkyZPJ~w@jscObuS4_4]NWgzU7Df,iVvF]/JW5zG?}N723BDTz(' );
define( 'LOGGED_IN_SALT',   '%c{`[w,w.EPSA&yr]Jj?&y.}n_8!k=C<E?1%~Io,WXYgQ)7n#-&LMO%ut0},Twc-' );
define( 'NONCE_SALT',       '0:)n$=3BgQmF{;9W^jr32VSDnZ;u!j*8vm=phQ@(L(9xF@]nK/-|v^^@,=U_;3hK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
