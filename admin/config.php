<?php
// HTTP
// /home/vinit/personal-stuff
define('HTTP_SERVER', 'http://mydryfood.com/admin/');
define('HTTP_CATALOG', 'http://mydryfood.com/admin/');

// HTTPS
define('HTTPS_SERVER', 'http://mydryfood.com/admin/');
define('HTTPS_CATALOG', 'http://mydryfood.com/admin/');

// DIR
define('BASE_S3_URL','https://mdf-images.s3.amazonaws.com/');
define('BASE_DIR','/home/vinit/personal-stuff/mdf1/');
define('DIR_APPLICATION', BASE_DIR.'admin/');
define('DIR_SYSTEM', BASE_DIR.'system/');
define('DIR_IMAGE', BASE_S3_URL.'image/');
define('RELATIVE_IMG_DIR','image/');
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
define('DB_HOSTNAME', 'mydf-after-restore.cug9bmmmot7v.ap-south-1.rds.amazonaws.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootmaster123');
define('DB_DATABASE', 'mdf');
define('DB_PORT', '3306');
define('DB_PREFIX', 'm_');
