<?php

if (function_exists('date_default_timezone_set'))
date_default_timezone_set('Europe/Kiev');

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//Запускаем сессию
session_start();
echo 'Hello bootstrap!';
// require_once realpath(__DIR__).'/../config/app.php';
// require_once realpath(__DIR__).'/route.php';
