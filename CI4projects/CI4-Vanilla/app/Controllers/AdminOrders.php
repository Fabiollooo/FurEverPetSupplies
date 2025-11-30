<?php namespace App\Controllers;

use App\Models\OrderModel;

class AdminOrders extends BaseController
{
    public function index2()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll();

        $session = session();
        $data['adminFirstName'] = $session->get('adminFirstName');

        return view('templates/adminheader') 
                . view('admin/adminViewOrders', $data);
    }
}