<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ItemShopController extends BaseController
{
    // Shows the list of products (all or by category when pressed in MainPage)
    public function index2()
    {
        $category = $this->request->getGet('category'); 
        $page = $this->request->getGet('page') ?: 1; 
        $model = new ProductModel();

        if ($category) {
            $products = $model->where('prodCategory', $category)->findAll();
        } else {
            $products = $model->findAll();
        }

        
        $perPage = 12;
        $totalProducts = count($products);
        $totalPages = ceil($totalProducts / $perPage);
        
        
        $start = ($page - 1) * $perPage;
        $data['products'] = array_slice($products, $start, $perPage);
        $data['currentPage'] = (int)$page;
        $data['totalPages'] = $totalPages;
        $data['category'] = $category; 

        return view('templates/header')
             . view('itemshop', $data)
             . view('templates/footer');
    }

    
    public function view()
    {
        $code = $this->request->getGet('code'); 
        $model = new ProductModel();
        $data['product'] = $model->where('prodCode', $code)->first();

        if (!$data['product']) {
           
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('templates/header')
             . view('productView', $data)
             . view('templates/footer');
    }
}