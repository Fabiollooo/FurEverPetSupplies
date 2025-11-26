<?php

namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customerID';
    protected $returnType = 'array';
    protected $allowedFields = [
        'custFirstName',
        'custLastName',
        'custEmail',
        'custCity',
        'custCountry',
        'custPhone',
        'custAddressLine1',
        'custPostalCode',
        'custPassword'
    ];
}
