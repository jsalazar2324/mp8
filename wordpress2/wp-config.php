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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8/3~f,y<sPVB^bD.4j&D0Iw:%gaGjXMRfEuBlHJV9Y_rI@!%oZz}<!auf?ywc;XV' );
define( 'SECURE_AUTH_KEY',  'A|O)TP$$G/?.1)9nORZI%r(X%r}<ug..,:Ct|4$SE2&0e:?j<%yio^>WO.rNK!D ' );
define( 'LOGGED_IN_KEY',    'X3`t4=>]$Cm2?p29[}6uA&#Yo&Goi5T15I9hJ3V|uH|VJ:a3+$Iz%ezuD`:MG% Z' );
define( 'NONCE_KEY',        '|#`vBwb,K8PK~4d&+D4PMngQ8S{mzfdnC_!v~&a.x-`=R`VbQL6mpVGeb^ ]6*;}' );
define( 'AUTH_SALT',        'aUTF4F WX_jC4dW|J7%qM( Q7+o1uef0vV{(QWrb:bHq/,_9h]X4:|lF=?1_wY[:' );
define( 'SECURE_AUTH_SALT', ',QfH~QI%h(:h3vd(9tc(#GEQWStg|Y-,&kJI1yWLrUG4iFdxD`/7=.`z^@;~X0Pt' );
define( 'LOGGED_IN_SALT',   'usR,!JM+;,d),ZzEns`IBYx.?yP9Qt&DSFtUcj1Rb]9VoL&3fW$6B79Z;Bac!i}A' );
define( 'NONCE_SALT',       'm:_^3%)3j6!+%)VTETG6.<T]MChw;Sk_o|i227zDW8:=>(! y2/t;QAfQQW|?CD|' );

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
