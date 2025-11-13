<?php

namespace App\Controllers;
use App\Models\ProductModel;

class ItemShopController extends BaseController
{
    public function index2()
    {
        $category = $this->request->getGet('category'); 
        $model = new ProductModel();

        if ($category) {
            $data['products'] = $model->where('prodCategory', $category)->findAll();
        } else {
            $data['products'] = $model->findAll();
        }

        return view('templates/header')
             . view('itemshop', $data)
             . view('templates/footer');
    }
}