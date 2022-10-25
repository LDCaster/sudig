<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;
use App\Models\M_KelolaSurat;
use App\Models\SuratModel;
use App\Models\FormatModel;
use CodeIgniter\Validation\Rules;

class UbahSurat extends BaseController
{
    protected $M_KelolaSurat;
    protected $suratModel;
    protected $FormatModel;

    public function __construct()
    {
        $this->M_KelolaSurat = new M_KelolaSurat();
        $this->suratModel = new SuratModel();
        $this->formatModel = new FormatModel();
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Ubah Surat | Sudig',
            'ubahsurat' => $this->M_KelolaSurat->ubahsurat(),
            'aksisurat' => $this->M_KelolaSurat->aksisurat()
        ];
        // dd($data);
        return view('ubah/' . $id, $data);
    }

    public function u_suratpernyataandiri($id)
    {
        // dd($this->request->getVar());
        $this->formatModel->save([
            'idformat'      => $id,
            'tempat'        => $this->request->getVar('tempat'),
            'tanggal'       => $this->request->getVar('tanggal'),
            'pembuka'       => $this->request->getVar('pembuka'),
            'isinama'       => $this->request->getVar('isi_nama'),
            'isilahir'      => $this->request->getVar('lahir'),
            'isijenis'      => $this->request->getVar('isi_jensikelamin'),
            'isipekerjaan'  => $this->request->getVar('isi_pekerjaan'),
            'isiagama'      => $this->request->getVar('isi_agama'),
            'isialamat'     => $this->request->getVar('isi_alamat'),
            'isiparagraf2'  => $this->request->getVar('isi_paragrafkedua'),
            'isiket'        => $this->request->getVar('keterangan_satu'),
            'isiket2'       => $this->request->getVar('keterangan_dua'),
            'isiket3'       => $this->request->getVar('keterangan_tiga'),
            'isiket4'       => $this->request->getVar('keterangan_empat'),
            'penutup'       => $this->request->getVar('penutup'),
            'nmpengesah' => $this->request->getVar('nama_pengesah')
        ]);

        session()->setFlashdata('pesan', 'Surat Berhasil diubah');

        return redirect()->to('dashboard');
    }

    public function u_suratkematian($id)
    {
        $this->formatModel->save([
            'idformat'      => $id,
            'kop_img'       => $this->request->getVar('logo'),
            'kop_judul'       => $this->request->getVar('nama_instansi'),
            'kop_judul2'       => $this->request->getVar('jenis_instansi'),
            'kop_alamat'       => $this->request->getVar('kop_alamat'),
            'kop_telp'       => $this->request->getVar('telp'),
            'kop_website'       => $this->request->getVar('website'),
            'tempat'        => $this->request->getVar('tempat'),
            'tanggal'       => $this->request->getVar('tanggal'),
            'nosurat'       => $this->request->getVar('nomor'),
            'pembuka'       => $this->request->getVar('pembuka'),
            'isinama'       => $this->request->getVar('isi_nama'),
            'isijenis'      => $this->request->getVar('isi_jensikelamin'),
            'isiktp'      => $this->request->getVar('isi_ktp'),
            'isipekerjaan'  => $this->request->getVar('isi_pekerjaan'),
            'isiagama'      => $this->request->getVar('isi_agama'),
            'isialamat'     => $this->request->getVar('isi_alamat'),
            'isiparagraf2'  => $this->request->getVar('isi_paragrafkedua'),
            'isitanggal'       => $this->request->getVar('isi_tanggal'),
            'isitempat'        => $this->request->getVar('isi_tempat'),
            'isiket'       => $this->request->getVar('isi_sebab'),
            'penutup'       => $this->request->getVar('penutup'),
            'nmpengesah'    => $this->request->getVar('nama_pengesah')
        ]);

        session()->setFlashdata('pesan', 'Surat Berhasil dibuat');

        return redirect()->to('dashboard');
    }
}
