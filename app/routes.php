<?php
// public views routes =========================================================
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('items', 'PagesController@products');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');

$router->post('items', 'PagesController@products');
$router->post('item', 'PagesController@product');


// routes adm ==================================================================
$router->get('admin/home', 'PagesController@homeAdm'); // MUST DO: add autentication


// products --------------------------------------------------------------------
$router->get('admin/products/list', 'ProductsController@index');
$router->post('admin/products/details', 'Products Controller@viewProduct');

// admin/categories -> database
$router->get('admin/products/add', 'ProductsController@createProduct'); // render view
$router->post('admin/products/create', 'ProductsController@create'); // create on database

$router->post('admin/products/edit', 'ProductsController@editProduct'); // render view
$router->post('admin/products/update', 'ProductsController@edit'); // edit on database

$router->post('admin/products/delete', 'ProductsController@delete'); // delete on database



// categories ------------------------------------------------------------------
$router->get('admin/categories/list', 'CategoriesController@index');
$router->post('admin/categories/details', 'CategoriesController@viewCategory');

// admin/categories -> database
$router->get('admin/categories/add', 'CategoriesController@createCategory'); // render view
$router->post('admin/categories/create', 'CategoriesController@create'); // create on database

$router->post('admin/categories/edit', 'CategoriesController@editCategory'); // render view 
$router->post('admin/categories/update', 'CategoriesController@edit'); // edit on database

$router->post('admin/categories/delete', 'CategoriesController@delete'); // delete on database



// users -----------------------------------------------------------------------
$router->get('admin/users/list', 'UsersController@index');
$router->post('admin/users/details', 'UsersController@show');

// admin/users -> database
$router->get('admin/users/create', 'UsersController@createUser'); // render view
$router->post('admin/users/list', 'UsersController@store'); // create on database

$router->post('admin/users/formEdit', 'UsersController@showEdit'); // render view
$router->post('admin/users/edit', 'UsersController@edit'); // edit on database

$router->post('admin/users/delete', "UsersController@delete");

$router->post('users', 'UsersController@store'); // ?





// login/logout routes =========================================================
$router->post('login', 'LoginController@makeLogin');
$router->post('logout', 'LoginController@logout');

// send email route ============================================================
$router->post('contact/send', 'ContactController@sendEmail');

?>
