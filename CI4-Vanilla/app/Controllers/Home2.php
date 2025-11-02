<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home2 extends BaseController
{
    public function index2(): string
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('templates/header')
         . view('MainPage', $data)
         . view('templates/footer');
    }
}

//THIS IS THE HOME USED CONTROLLER !!!!!