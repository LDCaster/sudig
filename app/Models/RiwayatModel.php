<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{

    public function getRiwayat()
    {
        return $this->db->table('surat')
            ->join('jenis_surat', 'jenis_surat.id_jenis = surat.id_jenis')
            ->join('users', 'users.id = surat.id')
            ->get()->getResultArray();
    }



    protected $table = "surat";
    protected $primaryKey = 'id_surat';
    protected $useTimestamps = true;
}
