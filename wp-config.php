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
define( 'DB_NAME', 'badanhuk_wp887' );

/** MySQL database username */
define( 'DB_USER', 'badanhuk_wp887' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S]pMi.B858' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'cq28mdnwszt0iembooe4qknbhk5fvp27bcgw7tjtavplbts6jqhrgvvggynbfpd9' );
define( 'SECURE_AUTH_KEY',  'vjobq31xmmbmetbhvwvwz7sn7r297e01opgc5uawopwjm94zkrruchsvkkbnfu6r' );
define( 'LOGGED_IN_KEY',    'xkvtq3bgauzgm1tnp01aynfyzu09k2ecu96jezz199qnhfbvnsmhfjqieeh6wk6h' );
define( 'NONCE_KEY',        'y8sfl9egwyonudxkmn5n15gzjjzxkhweuzgsd1m0sfwhek7iq1e1uk7cklvxfsau' );
define( 'AUTH_SALT',        'q1pmfbfg4ecofe8bhusqft82h5xtaupbxwdhg0mbq1emf74l4rmlkqj04pvzqyq7' );
define( 'SECURE_AUTH_SALT', 'hr2jxxgbhdbtcqildl637lqvwkum2qc9ol0sbnvozuaepaogp2a2eg3yexyav3n9' );
define( 'LOGGED_IN_SALT',   'ittjbh7dpwd8dx5cuhmqt05h6cscyso8pu56ivpvi56mu1r6ztmkxbrciuc1jid7' );
define( 'NONCE_SALT',       'dhfjnfrczcu3hwjgjbqfvfyu52mh6j6uwgm6xw2t7we0jobxlbaik5lgwa7e39yo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvu_';

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
