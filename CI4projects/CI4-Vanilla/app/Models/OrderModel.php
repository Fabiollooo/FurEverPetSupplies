<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'oOrderNumber';  
    protected $returnType = 'array';
    protected $allowedFields = [
        'oOrderDate',
        'oRequiredDate', 
        'oShippedDate',
        'oStatus',
        'oComments',
        'oCustomerNumber'
    ];
}