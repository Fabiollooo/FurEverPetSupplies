<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index2()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('templates/header')
         . view('product/itemshop', $data)
         . view('templates/footer'); 
    }
}

