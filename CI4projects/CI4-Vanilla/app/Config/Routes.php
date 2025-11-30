<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home2::index2');
$routes->get('product', 'Product::index2');

//NavBar 
$routes->get('itemshop', 'ItemShopController::index2');
$routes->get('MainPage', 'Home2::index2');

//AboutUs
$routes->get('aboutUs', 'AboutUsController::index2');

//DrillDown
$routes->get('itemshop/view', 'ItemShopController::view');

//Cart
$routes->post('cart/add', 'CartController::add');
$routes->get('cart', 'CartController::view');
$routes->post('cart/remove', 'CartController::remove');


//Wish list 
$routes->post('wishlist/add', 'WishListController::add');
$routes->get('wishlist', 'WishListController::view');
$routes->post('wishlist/remove', 'WishListController::remove');

//Login form
$routes->get('loginform', 'LoginController::index2');
$routes->get('login', 'LoginController::index2');         
$routes->post('register/create', 'RegisterController::create'); 
$routes->post('login/authenticate', 'LoginController::authenticate'); 





//ADMIN STUFF
//Products
$routes->get('adminProducts', 'AdminProducts::index2');
$routes->get('adminProducts/edit/(:any)', 'AdminProducts::edit/$1');
$routes->post('adminProducts/update/(:any)', 'AdminProducts::update/$1');
$routes->get('adminProducts/sale/(:any)', 'AdminProducts::sale/$1');
$routes->get('adminProducts/delete/(:any)', 'AdminProducts::delete/$1');

$routes->get('login', 'LoginController::index2');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('logout', 'LoginController::logout');
