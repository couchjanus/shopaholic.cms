<?php

define('ROUTES', [
	'' => 'HomeController@index',
	'about' => 'AboutController@index',
	'contact' => 'ContactController@index',
	'admin' => 'AdminController@index',
	'admin/products' => 'AdminProductsController@index',
	'admin/products/add' => 'AdminProductsController@add',
]);

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
try{
	 include_once($controllerFile);
	 $controller = new $controller;
	 if (!method_exists($controller, $action)) {
	  		throw New Exception(
	  			"{$controller} does not respond to the {$action} action"
	  		);
	 }
	 $controller->$action();
} catch (Exception $e){
	echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
