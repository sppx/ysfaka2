<?php

ini_set("display_errors","On");
error_reporting(E_ALL);

define('YS_ROOT',dirname(__FILE__));
ob_start();header('Content-Type:text/html;charset=utf8');
date_default_timezone_set('Asia/Shanghai');
//自动加载
require '/vendor/autoload.php';
require_once 'https://fk.ppxwo.net/app/common.php';
require_once 'https://fk.ppxwo.net/app/Config.php';
require_once 'https://fk.ppxwo.net/app/ysapp.php';

session_start();
?>
