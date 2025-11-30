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


    public function edit($oOrderNumber)  
    {
        $model = new OrderModel();
        $data['order'] = $model->find($oOrderNumber);

        return view('templates/adminheader')
            . view('admin/adminEditOrder', $data);
    }

    public function update($oOrderNumber)
    {
        $model = new OrderModel();

        $updateData = [
            'oStatus' => $this->request->getPost('oStatus'),
            'oComments' => $this->request->getPost('oComments'),
            'oShippedDate' => $this->request->getPost('oShippedDate'),
            'oOrderDate' => $this->request->getPost('oOrderDate'),
            'oRequiredDate' => $this->request->getPost('oRequiredDate'),
            'oCustomerNumber' => $this->request->getPost('oCustomerNumber')
        ];

        $model->update($oOrderNumber, $updateData);

        return redirect()->to('/adminViewOrders')->with('success', 'Order updated successfully.');
    }
}