<?php

namespace App\Models;

use CodeIgniter\Model;

class SignatureModel extends Model
{
    protected $table = "signature";
    protected $primaryKey = 'id_signature';

    protected $allowedFields = ['nama'];
}
