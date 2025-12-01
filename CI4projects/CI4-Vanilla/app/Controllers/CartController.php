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
            $session->set('cart', $cart);
        
            return redirect()->to('/')->with('success', 'Product added to cart!');
        } else {
           
            return redirect()->to('/')->with('info', 'Product already in cart');
        }
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

        $data = [
            'cart' => $cart,
            'products' => $products
        ];

        return view('templates/header')
             . view('cart', $data)
             . view('templates/footer');
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
            $session->set('cart', $cart);
          
            return redirect()->back()->with('success', 'Product removed from cart');
        }
        
        return redirect()->back();
    }
}
