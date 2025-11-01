<?php

namespace App\Controllers;

use App\Models\ProductModel;

class CartController extends BaseController
{
    public function add()
    {
        $session = session();
        $productId = $this->request->getPost('product_id');

        $cart = $session->get('cart') ?? [];

        if (!in_array($productId, $cart)) {
            $cart[] = $productId;
        }

        $session->set('cart', $cart);

        //This is important here !!!!!
        //Do not use "->back()" because it will instantly bring the user to the cart if the user presses the add to cart btn.
        return redirect()->to('/');
    }

    public function view()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $products = [];
        if (!empty($cart)) {
            $productModel = new ProductModel();
            $products = $productModel->whereIn('prodCode', $cart)->findAll(); 
        }

        return view('cart', [
            'cart' => $cart,
            'products' => $products
        ]);
    }

    public function remove()
    {
        $session = session();
        $productId = $this->request->getPost('product_id');

        $cart = $session->get('cart') ?? [];

        
        $key = array_search($productId, $cart);
        if ($key !== false) {
            unset($cart[$key]);
            $cart = array_values($cart); 
        }

        $session->set('cart', $cart);

        return redirect()->back();
    }
}
