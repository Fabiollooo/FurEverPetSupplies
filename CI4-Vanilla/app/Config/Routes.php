<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home2::index2');
$routes->get('product', 'Product::index');

//Cart
$routes->post('cart/add', 'CartController::add');
$routes->get('cart', 'CartController::view');
$routes->post('cart/remove', 'CartController::remove');


//Wish list 
$routes->post('wishlist/add', 'WishListController::add');
$routes->get('wishlist', 'WishListController::view');
$routes->post('wishlist/remove', 'WishListController::remove');
