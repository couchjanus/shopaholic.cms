<?php

if (function_exists('date_default_timezone_set'))
date_default_timezone_set('Europe/Kiev');

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once realpath(__DIR__).'/../config/app.php';

// подключаем файлы ядра
function autoloadsystem($class) {
    $filename = ROOT . "/core/" . $class . ".php";
    if(file_exists($filename)){
       require $filename;
    }
    $filename = ROOT . "/app/models/" . $class . ".php";
    if(file_exists($filename)){
       require $filename;
    }
 }

spl_autoload_register("autoloadsystem");

$app = new App();
$app->init();

