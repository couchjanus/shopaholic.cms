<?php

$router->get('', 'HomeController@index');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('admin', 'AdminController@index');

$router->get('admin/products', 'AdminProductsController@index');

$router->get('admin/products/add', 'AdminProductsController@add');
$router->post('admin/products/add', 'AdminProductsController@add');

$router->get('admin/products/edit/{id}', 'AdminProductsController@edit');
$router->post('admin/products/edit/{id}', 'AdminProductsController@edit');

$router->get('admin/products/delete/{id}', 'AdminProductsController@delete');
$router->post('admin/products/delete/{id}', 'AdminProductsController@delete');
