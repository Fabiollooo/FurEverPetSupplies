<?php

namespace App\Controllers;
use App\Models\ProductModel;

class ItemShopController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll(); 
        return view('itemshop', $data);
    }
}
