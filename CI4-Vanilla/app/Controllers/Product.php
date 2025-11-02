<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('product/index', $data);
    }
}
