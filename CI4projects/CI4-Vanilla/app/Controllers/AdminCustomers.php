<?php namespace App\Controllers;

use App\Models\CustomerModel;

class AdminCustomers extends BaseController
{
    public function index2()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();

        $session = session();
        $data['adminFirstName'] = $session->get('adminFirstName');

        return view('templates/adminheader') 
                . view('admin/adminViewCustomers', $data);
    }


    public function edit($customerID)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($customerID);

        return view('templates/header')
               . view('admin/adminEditCustomer', $data);
    }


}