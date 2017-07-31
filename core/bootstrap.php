<?php

if (function_exists('date_default_timezone_set'))
date_default_timezone_set('Europe/Kiev');

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//Запускаем сессию
session_start();
require_once realpath(__DIR__).'/../config/app.php';
require_once ROOT.'/core/Connection.php';
require_once ROOT.'/core/Session.php';
require_once CONTROLLERS.'/View.php';
require_once CONTROLLERS.'/Controller.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Product.php';
require_once MODELS.'/Role.php';
require_once MODELS.'/User.php';

require_once realpath(__DIR__).'/Request.php';
require_once realpath(__DIR__).'/Router.php';
$routesFile = ROOT.'/config/routes.php';

Router::load($routesFile)
    ->direct(Request::uri(), REQUEST::method());
