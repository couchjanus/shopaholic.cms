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

$router->get('admin/orders', 'AdminOrderController@index');
$router->get('admin/orders/view/{id}', 'AdminOrderController@view');
$router->get('admin/orders/edit/{id}', 'AdminOrderController@edit');
$router->get('admin/orders/delete/{id}', 'AdminOrderController@delete');
$router->post('admin/orders/edit/{id}', 'AdminOrderController@edit');
$router->post('admin/orders/delete/{id}', 'AdminOrderController@delete');


$router->get('register', 'UsersController@signup');
$router->post('register', 'UsersController@signup');

$router->get('login', 'UsersController@login');
$router->post('login', 'UsersController@login');

$router->get('profile', 'ProfileController@index');

$router->get('profile/edit', 'ProfileController@edit');
$router->post('profile/edit', 'ProfileController@edit');

$router->get('profile/orders', 'ProfileController@ordersList');
$router->post('profile/orders', 'ProfileController@ordersList');

$router->get('logout', 'UsersController@logout');
$router->post('logout', 'UsersController@logout');

$router->get('catalog/page-{page}', 'CatalogController@index');
$router->get('catalog', 'CatalogController@index');

//оформление заказа
$router->post('cart', 'CartController@index');
$router->post('check', 'UsersController@actionCheck');

$router->get('admin/posts', 'AdminPostController@index');
$router->get('admin/posts/add', 'AdminPostController@add');
$router->get('admin/posts/edit/{id}', 'AdminPostController@edit');
$router->get('admin/posts/delete/{id}', 'AdminPostController@delete');
$router->post('admin/posts/add', 'AdminPostController@add');
$router->post('admin/posts/edit/{id}', 'AdminPostController@edit');
$router->post('admin/posts/delete/{id}', 'AdminPostController@delete');


$router->get('posts', 'PostsController@index');
$router->get('post/{id}', 'PostsController@view');
$router->post('search', 'PostsController@search');
