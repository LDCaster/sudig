<?php

namespace App\Models;

use CodeIgniter\Model;

class FormatModel extends Model
{
    protected $table = "format_surat";
    protected $primaryKey = 'idformat';

    protected $allowedFields = ['idformat', 'kop_img', 'kop_img2', 'kop_judul', 'kop_judul2', 'kop_alamat', 'kop_telp', 'kop_email', 'kop_website', 'tempat', 'tanggal', 'nosurat', 'hal', 'pembuka', 'isinama', 'isilahir', 'isijenis', 'isiktp', 'isipekerjaan', 'isiagama', 'isialamat', 'isitanggal', 'isitempat', 'isiparagraf2', 'isiket', 'isiket2', 'isiket3', 'isiket4', 'penutup', 'nmpengesah', 'ttdpengesah'];
}
