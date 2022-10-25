<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = "surat";
    protected $primaryKey = 'id_surat';
    protected $useTimestamps = true;

    protected $allowedFields = ['id_jenis', 'id', 'idformat', 'created_at', 'updated_at'];
}
