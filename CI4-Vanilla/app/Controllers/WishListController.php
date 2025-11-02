<?php

namespace App\Controllers;

use App\Models\ProductModel;

class WishlistController extends BaseController
{
    public function add()
    {
        $session = session();
        $productId = $this->request->getPost('product_id');

        $wishlist = $session->get('wishlist') ?? [];
        if(!in_array($productId, $wishlist)) {
            $wishlist[] = $productId;
        }

        $session->set('wishlist', $wishlist);

        return redirect()->to('/');
    }

    public function view()
    {
        $session = session();
        $wishlist = $session->get('wishlist') ?? [];

        $products = [];
        if(!empty($wishlist)) {
            $productModel = new ProductModel();
            $products = $productModel->whereIn('prodCode', $wishlist)->findAll();
        }

        return view('wishlist', [
            'wishlist' => $wishlist,
            'products' => $products
        ]);
    }

    public function remove()
    {
        $session = session();
        $productId = $this->request->getPost('product_id');

        $wishlist = $session->get('wishlist') ?? [];
        if(($key = array_search($productId, $wishlist)) !== false) {
            unset($wishlist[$key]);
            $wishlist = array_values($wishlist);
        }

        $session->set('wishlist', $wishlist);

        return redirect()->back();
    }
}
