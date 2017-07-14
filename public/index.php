<?php
echo "SERVER_NAME: ".$_SERVER['SERVER_NAME'].'<br />';
echo "PHP_SELF: ".$_SERVER['PHP_SELF'].'<br />';
echo "DOCUMENT_ROOT: ".$_SERVER['DOCUMENT_ROOT'].'<br />';
echo '$argv: ';
var_dump($argv).'<br />';
echo '<br />';
echo '$_GET: ';
var_dump($_GET);
echo '<br />';

// switch($_GET['action'])
// {
// 	case "about" :
// 		require_once("about.php"); // страница "О Нас"
// 		break;
// 	case "contacts" :
// 		require_once("contacts.php"); // страница "Контакты"
// 		break;
// 	case "feedback" :
// 		require_once("feedback.php"); // страница "Обратная связь"
// 		break;
// 	default :
// 		require_once("404.php"); // страница "404"
// 	break;
// }

echo "REQUEST_URI: ".$_SERVER['REQUEST_URI'].'<br />';
// Поключение файлов системы
// require_once realpath(__DIR__.'/../').'/core/'.'bootstrap.php';
