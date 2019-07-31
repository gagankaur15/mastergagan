 <?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Location of your WordPress configuration. */
require_once(ABSPATH . '../tglsecureconfig/secure-security-corporate-admin.php');