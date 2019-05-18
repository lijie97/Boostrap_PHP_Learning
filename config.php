<?php
$debug = true;
if ($debug) {
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('display_errors', 1);
}
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '123456');
define('DB_NAME', 'task');
define('GB_TABLE_NUM', 'num');
/**end of file**/