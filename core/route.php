<?php

// define('ROUTES', [
// 	'' => 'HomeController.php',
// 	'about' => 'AboutController.php',
// 	'contact' => 'ContactController.php'
// ]);

define('ROUTES', [
	'' => 'HomeController@index',
	'about' => 'AboutController@index',
	'contact' => 'ContactController@index'
]);
// $router->get('', 'IndexController@index');
// $router->get('posts', 'PostsController@index');
// $router->get('post/{id}', 'PostsController@view');

function uri()
    {
      if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/');
    }

function direct($uri)
    {
        if (array_key_exists($uri, ROUTES)) {
            return ROUTES[$uri];
        }
        echo('No route defined for this URI.');
    }

$uri = uri();

$direct = direct($uri);

list($controller, $action) = explode('@', $direct);

$controllerFile = CONTROLLERS.'/'.$controller.'.php';

// if(file_exists($controllerFile)){
try{
	 include_once($controllerFile);
	 $controller = new $controller;
	 if (!method_exists($controller, $action)) {
	  		throw New Exception(
	  			"{$controller} does not respond to the {$action} action"
	  		);
	 }
	 $controller->$action();
	$result = true;
} catch (Exception $e){
	$result = false;
	echo 'Выброшено исключение: ',  $e->getMessage(), "\n";

} finally{
	return  $result;
}

//   }
// else echo 'No controller defined for this path';
