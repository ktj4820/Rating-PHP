<?php
/**
 * This page contains the configuration settings for the application.
 *
 * @author  Stephen P Vickers <stephen@spvsoftwareproducts.com>
 * @copyright  SPV Software Products
 * @version   4.0.0
 * @license  http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */
###
###  Application settings
###
define('APP_NAME', 'Rating');
define('SESSION_NAME', 'php-rating');
define('VERSION', '4.0.0');

###
###  Database connection settings
###
define('DB_NAME', '');  // e.g. 'mysql:dbname=MyDb;host=localhost' or 'sqlite:php-rating.sqlitedb'
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_TABLENAME_PREFIX', '');

###
###  Security settings
###
define('SIGNATURE_METHOD', 'RS256');
define('KID', '');  // A random string to identify the key value
define('PRIVATE_KEY', <<< EOD
-----BEGIN RSA PRIVATE KEY-----
Insert private key here
-----END RSA PRIVATE KEY-----
EOD
);
?>
