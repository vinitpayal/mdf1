<?php
// HTTP
// /home/vinit/personal-stuff
define('HTTP_SERVER', 'http://mydryfood.com/');
define('HTTP_CATALOG', 'http://mydryfood.com/');

// HTTPS
define('HTTPS_SERVER', 'http://mydryfood.com/');
define('HTTPS_CATALOG', 'http://mydryfood.com/');

// DIR
define('BASE_DIR','/var/www/html/mdf1/');
define('DIR_APPLICATION', BASE_DIR.'admin/');
define('DIR_SYSTEM', BASE_DIR.'system/');
define('DIR_IMAGE', 'image/');
define('DIR_LANGUAGE', BASE_DIR.'admin/language/');
define('DIR_TEMPLATE', BASE_DIR.'admin/view/template/');
define('DIR_CONFIG', BASE_DIR.'system/config/');
define('DIR_CACHE', BASE_DIR.'system/storage/cache/');
define('DIR_DOWNLOAD', BASE_DIR.'system/storage/download/');
define('DIR_LOGS', BASE_DIR.'system/storage/logs/');
define('DIR_MODIFICATION', BASE_DIR.'system/storage/modification/');
define('DIR_UPLOAD', 'https://s3.ap-south-1.amazonaws.com/mdf-images/images/');
define('DIR_CATALOG',BASE_DIR. 'catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mdf');
define('DB_PORT', '3306');
define('DB_PREFIX', 'm_');
