<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'orderNumber';
    protected $returnType = 'array';
    protected $allowedFields = [
        'orderDate',
        'requiredDate', 
        'shippedDate',
        'status',
        'comments',
        'customerNumber'
    ];
}