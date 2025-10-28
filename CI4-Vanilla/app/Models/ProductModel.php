<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'prodCode';
    protected $returnType = 'array';
    protected $allowedFields = [
        'prodCode',
        'prodDescription',
        'prodCategory',
        'prodSupplier',
        'prodQtyInStock',
        'prodBuyCost',
        'prodSalePrice',
        'prodPhoto',
        'priceAlreadyDiscounted'
    ];
}
