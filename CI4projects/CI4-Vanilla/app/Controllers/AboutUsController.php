<?php

namespace App\Controllers;

use App\Models\ProductModel;

class AboutUsController extends BaseController
{
    public function index2()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        
        return view('templates/header')
         . view('aboutUs', $data)
         . view('templates/footer');
    }
}