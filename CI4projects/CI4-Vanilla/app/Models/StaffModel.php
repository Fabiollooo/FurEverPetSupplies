<?php namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'staffID';
    protected $returnType = 'array';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password', 'role'];
}
