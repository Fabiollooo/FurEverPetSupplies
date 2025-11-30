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
                . view('admin/adminProducts', $data); 
    }

    public function edit($prodCode)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($prodCode);

        return view('templates/header')
               . view('admin/adminEditProduct', $data);
    }

    public function update($prodCode)
    {
        $model = new ProductModel();

        $updateData = [
            'prodDescription' => $this->request->getPost('prodDescription'),
            'prodCategory'    => $this->request->getPost('prodCategory'),
            'prodSupplier'    => $this->request->getPost('prodSupplier'),
            'prodQtyInStock'  => $this->request->getPost('prodQtyInStock'),
            'prodBuyCost'     => $this->request->getPost('prodBuyCost'),
            'prodSalePrice'   => $this->request->getPost('prodSalePrice')
        ];

        $model->update($prodCode, $updateData);

        return redirect()->to('/adminProducts')->with('message', 'Product updated.');
    }

        public function sale($prodCode)
    {
        $model = new ProductModel();
        $product = $model->find($prodCode);
        
        if (!$product) {
            return redirect()->to('/adminProducts')->with('error', 'Product not found!');
        }

        
        $discount = 0.20; 
        $newPrice = $product['prodSalePrice'] * (1 - $discount);
        
        $model->update($prodCode, ['prodSalePrice' => $newPrice]);
        
        return redirect()->to('/adminProducts')->with('success', '20% discount applied to ' . $product['prodDescription'] . '! New price: €' . number_format($newPrice, 2));
    }

    public function delete($prodCode)
    {
        $db = \Config\Database::connect();
        $db->table('orderdetail')->where('odProductCode', $prodCode)->delete();
    

        $model = new ProductModel();
        $model->delete($prodCode);

        return redirect()->to('/adminProducts')->with('message', 'Product deleted.');
    }


}
