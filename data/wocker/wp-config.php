<?php



// ** MySQL settings ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'uLzWCyb`-VVH&4mCFGSWP&q)_O$h&U NKFfyV.6umod;k9.+fidzPY(*O?j]x374');
define('SECURE_AUTH_KEY',  ' W-X,Y-Qirc$zh]7Bi+LG/3m/cnAtM;H:0ZG/O/P>;j(@^gWRb0Rn+UD{Fzq*G03');
define('LOGGED_IN_KEY',    ')]z?!m1bkSV$|u8{#bCR;)w)*bjF|{_3Vv),.d~y>=-]f?]-7l$|L<m#Dq(,=FI/');
define('NONCE_KEY',        'SI|<83=m*i^KI/M,QkP_7T3-Cua/lfzGJs;2QuzM[wc5E)LA!Laoew J[Ubz^1-b');
define('AUTH_SALT',        'fW:VaD.S%ZI `fdUx4pU<ab][g15?MnjGBMlx>!^7J~Rb7YGTm+a%;`]yq*S1F06');
define('SECURE_AUTH_SALT', '#$-YeQ +Cw+M[34xP5Z8f|2Gz:OiyUPcAqK]NKVX5a&>s4~NE9|Jj8Thi^Wc6UsY');
define('LOGGED_IN_SALT',   'Go(*Ykq9;S1$)EA~/4/Io?}_*y[Y)~I?Q{lE[`DebeD4s-lAEy6}B8f5w^ERZp|V');
define('NONCE_SALT',       'Y|z4BFrez]BjP}Tnmg:ES5{CX@i9/A|dW;S:|]>J7+VVSWh}fYyxH?=!zO+)j(6M');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

