<?php
// HTTP
define('HTTP_SERVER', 'http://mydryfood.com/');

// HTTPS
define('HTTPS_SERVER', 'http://mydryfood.com/');

// DIR
define('BASE_DIR','/var/www/html/mdf1/');
define('DIR_APPLICATION', BASE_DIR.'catalog/');
define('DIR_SYSTEM', BASE_DIR.'system/');
define('DIR_IMAGE', 'https://s3.ap-south-1.amazonaws.com/mdf-images/image/');
define('DIR_LANGUAGE', BASE_DIR.'catalog/language/');
define('DIR_TEMPLATE', BASE_DIR.'mdf1/catalog/view/theme/');
define('DIR_CONFIG', BASE_DIR.'mdf1/system/config/');
define('DIR_CACHE', BASE_DIR.'system/storage/cache/');
define('DIR_DOWNLOAD', BASE_DIR.'system/storage/download/');
define('DIR_LOGS', BASE_DIR.'system/storage/logs/');
define('DIR_MODIFICATION', BASE_DIR.'system/storage/modification/');
define('DIR_UPLOAD', 'https://s3.ap-south-1.amazonaws.com/mdf-images/images/');

// DB
define('DB_DRIVER', '');
define('DB_HOSTNAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mdf');
define('DB_PORT', '3306');
define('DB_PREFIX', 'm_');
