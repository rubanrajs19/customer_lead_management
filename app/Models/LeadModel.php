<?php
namespace App\Models;

use CodeIgniter\Model;

class LeadModel extends Model
{
    protected $table = 'leads';
     protected $primaryKey = 'id';
    protected $allowedFields = ['customer_id', 'status', 'description'];
}
