<?php
$path = dirname(__FILE__);
define('LAYOUTPATH',$path.DIRECTORY_SEPARATOR."layout");
define('MODULESPATH',$path.DIRECTORY_SEPARATOR."modules");
define('CONFIGPATH',$path.DIRECTORY_SEPARATOR."config");
require CONFIGPATH.DIRECTORY_SEPARATOR."load.php";

// Phân tích URL để lấy phần path sau domain
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/JEWELRYWEB-PHP/JEWELRYWEB-PHP/';

// Xử lý URL
if (($_GET['controler'])) 