<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ItemShopController extends BaseController
{
    // Shows the list of products (all or by category when pressed in MainPage)
    public function index2()
    {
        $category = $this->request->getGet('category'); 
        $model = new ProductModel();

        if ($category) {
            $data['products'] = $model->where('prodCategory', $category)->findAll();
        } else {
            $data['products'] = $model->findAll();
        }

        return view('templates/header')
             . view('itemshop', $data)
             . view('templates/footer');
    }

    
    public function view()
    {
        $code = $this->request->getGet('code'); 
        $model = new ProductModel();
        $data['product'] = $model->where('prodCode', $code)->first();

        return view('templates/header')
             . view('productView', $data)
             . view('templates/footer');
    }
}
