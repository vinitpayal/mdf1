<?php
// Version
define('VERSION', '2.3.0.2');
ini_set('memory_limit', '-1');

set_time_limit(600);
// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('admin');
