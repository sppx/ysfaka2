<?php

ini_set("display_errors","On");
error_reporting(E_ALL);

define('YS_ROOT',dirname(__FILE__));
ob_start();header('Content-Type:text/html;charset=utf8');
date_default_timezone_set('Asia/Shanghai');
//自动加载
require '/app/htdocs/vendor/autoload.php';
require_once '/app/htdocs/app/common.php';
require_once '/app/htdocs/app/Config.php';
require_once '/app/htdocs/app/ysapp.php';

session_start();
?>
