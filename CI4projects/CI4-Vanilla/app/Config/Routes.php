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

