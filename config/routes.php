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

$router->post('admin/deleteimage', 'AdminFilesController@deleteimage');

$router->get('admin/products/delete/{id}', 'AdminProductsController@delete');
$router->post('admin/products/delete/{id}', 'AdminProductsController@delete');

$router->get('admin/categories', 'AdminCategoriesController@index');
$router->get('admin/category/add', 'AdminCategoriesController@add');
$router->post('admin/category/add', 'AdminCategoriesController@add');

$router->get('admin/category/edit/{id}', 'AdminCategoriesController@edit');
$router->post('admin/category/edit/{id}', 'AdminCategoriesController@edit');

$router->get('admin/category/delete/{id}', 'AdminCategoriesController@delete');
$router->post('admin/category/delete/{id}', 'AdminCategoriesController@delete');

$router->get('admin/roles', 'AdminRolesController@index');
$router->get('admin/roles/add', 'AdminRolesController@add');
$router->get('admin/roles/edit/{id}', 'AdminRolesController@edit');
$router->get('admin/roles/delete/{id}', 'AdminRolesController@delete');

$router->post('admin/roles/add', 'AdminRolesController@add');
$router->post('admin/roles/edit/{id}', 'AdminRolesController@edit');
$router->post('admin/roles/delete/{id}', 'AdminRolesController@delete');

$router->get('admin/users', 'AdminUsersController@index');
$router->get('admin/users/add', 'AdminUsersController@add');
$router->post('admin/users/add', 'AdminUsersController@add');

$router->get('admin/users/edit/{id}', 'AdminUsersController@edit');
$router->post('admin/users/edit/{id}', 'AdminUsersController@edit');

$router->get('admin/users/delete/{id}', 'AdminUsersController@delete');
$router->post('admin/users/delete/{id}', 'AdminUsersController@delete');

$router->get('register', 'UsersController@signup');
$router->post('register', 'UsersController@signup');

$router->get('login', 'UsersController@login');
$router->post('login', 'UsersController@login');

$router->get('profile', 'ProfileController@index');

$router->get('logout', 'UsersController@logout');
$router->post('logout', 'UsersController@logout');

$router->get('catalog/page-{page}', 'CatalogController@index');
$router->get('catalog', 'CatalogController@index');
