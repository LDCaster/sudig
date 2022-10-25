<?php

namespace App\Models;

use CodeIgniter\Model;

class M_KelolaSurat extends Model
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db         = \Config\Database::connect();
        // $this->builder    =  $this->db->table('surat');
    }

    public function getSurat()
    {
        return $this->db->table('surat')
            ->join('jenis_surat', 'jenis_surat.id_jenis = surat.id_jenis')
            ->join('users', 'users.id = surat.id')
            ->join('format_surat', 'format_Surat.idformat = surat.idformat')
            ->get()->getResultArray();
    }
    protected $table = "surat";
    protected $primaryKey = 'id_surat';
    protected $useTimestamps = true;

    function riwayatsurat()
    {
        $builder = $this->db->table("surat");
        $builder->select("*");
        $builder->join("jenis_surat", "jenis_surat.id_jenis = surat.id_jenis");
        $builder->join("users", "users.id = surat.id");
        $builder->where("surat.id", user_id());

        $data = $builder->get()->getResultArray();
        return $data;
    }
    function aksisurat()
    {
        $builder = $this->db->table("surat");
        $builder->select("*");
        $builder->join("jenis_surat", "jenis_surat.id_jenis = surat.id_jenis");
        $builder->join("users", "users.id = surat.id");
        $builder->join("format_surat", "format_surat.idformat = surat.idformat");
        $builder->where("format_surat.idformat", "surat.idformat");

        $data = $builder->get()->getResultArray();
        return $data;
    }

    function ubahsurat()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('surat');
        $builder->join("jenis_surat", "jenis_surat.id_jenis = surat.id_jenis");
        $builder->join("users", "users.id = surat.id");
        $builder->join("format_surat", "format_surat.idformat = surat.idformat");


        $query = $builder->get()->getRowArray();
        return $query;
    }

    public function joinmodel()
    {
        $builder = $this->db->table("surat");
        $builder->select("*");
        $builder->join("jenis_surat", "jenis_surat.id_jenis = surat.id_jenis");
        $builder->join("format_surat", "format_surat.idformat = surat.idformat");

        $data = $builder->get()->getRowArray();
        return $data;
    }
    // function editsurat()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('format_surat');
    //     $builder->join("kop_surat", "kop_surat.idkop = format_surat.idkop");
    //     $builder->join("isi_surat", "isi_surat.idisi = format_surat.idisi");

    //     $query = $builder->get()->getRowArray();
    //     return $query;
    // }
}
