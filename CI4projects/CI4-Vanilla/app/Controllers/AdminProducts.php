<?php namespace App\Controllers;

use App\Models\ProductModel;

class AdminProducts extends BaseController
{
    public function index2()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        $session = session();
        $data['adminFirstName'] = $session->get('adminFirstName');

        return view('templates/header') 
                .view('admin/adminProducts', $data); 
    }
}
