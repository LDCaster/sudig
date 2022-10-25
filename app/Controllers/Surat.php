<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;
use App\Models\M_KelolaSurat;
use App\Models\SuratModel;
use App\Models\FormatModel;
use App\Models\SignatureModel;
// reference the Dompdf namespace
use Dompdf\Dompdf;


class Surat extends BaseController
{
    protected $M_KelolaSurat;
    protected $SuratModel;
    protected $FormatModel;
    protected $SignatureModel;

    public function __construct()
    {
        $this->M_KelolaSurat = new M_KelolaSurat();
        $this->suratModel = new SuratModel();
        $this->formatModel = new FormatModel();
        $this->signatureModel = new SignatureModel();
    }

    public function daftar_surat()
    {
        $data = [
            'title' => 'Daftar Surat | Sudig',
        ];
        return view('user/daftar_surat', $data);
    }


    public function kelola_surat()
    {
        // $surat = $this->kelola_surat->findAll();
        $data = [
            'title' => 'Data Surat | Sudig',
            'datasurat' => $this->M_KelolaSurat->getSurat()
            // 'datasurat' => $surat
        ];

        return view('user/kelola_surat', $data);
    }
    public function tanda_tangan()
    {
        // $surat = $this->kelola_surat->findAll();
        $data = [
            'title' => 'Tanda Tangan | Sudig',
            // 'datasurat' => $this->M_KelolaSurat->getSurat()
            // 'datasurat' => $surat
        ];

        return view('user/digital_signature', $data);
    }
    public function fungsi_tanda_tangan()
    {
        $sig_string = $this->request->getVar('signature');;
        $nama_file = "signature_" . date("his") . ".png";
        file_put_contents($nama_file, file_get_contents($sig_string));
        if (file_exists($nama_file)) {
            return $this->response->download($nama_file, null)->setFileName('signature.png');
        }
    }

    // menampilkan riwayat surat
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Sudig',
            'riwayatsurat' => $this->M_KelolaSurat->riwayatsurat()
        ];
        return view('user/index', $data);
    }
    // end menampilkan riwayat surat

    // method ke halaman surat
    public function suratpernyataandiri()
    {
        $data = [
            'title' => 'Surat Pernyataan Diri | Sudig',
        ];
        return view('surat/surat_pernyataan_diri', $data);
    }

    public function suratkematian()
    {
        $data = [
            'title' => 'Surat Kematian | Sudig'
        ];
        return view('surat/surat_kematian', $data);
    }
    public function suratketeranganusaha()
    {
        $data = [
            'title' => 'Surat Keterangan Usaha | Sudig'
        ];
        return view('surat/surat_keterangan_usaha', $data);
    }
    // end method ke halaman surat


    public function hapus($id)
    {
        // cari gambar berdasarkan id
        $formatModel = $this->formatModel->find($id);
        $suratModel = $this->suratModel->find($id);

        // jika surat bukan 1 maka akan menghapus logo
        if ($suratModel['id_jenis'] != '1') {
            // cek jika file gambar adalah default
            if ($formatModel['kop_img'] != 'default.png') {
                // hapus file
                unlink('assets/img/logo/' . $formatModel['kop_img']);
            }
            $this->suratModel->delete($id);
            $this->formatModel->delete($id);
        }

        $this->suratModel->delete($id);
        $this->formatModel->delete($id);

        session()->setFlashdata('pesan', 'Surat Berhasil dihapus.');

        return redirect()->to('dashboard');
    }

    public function lihat($id)
    {

        $data = [
            'title' => 'Tampil Surat Kematian | Sudig',
            'datasurat' => $this->M_KelolaSurat->joinmodel()
        ];

        return view('lihat/' . $id, $data);
    }
    public function cetak($id = null)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();


        $data = [
            'title' => 'Tampil Surat Kematian | Sudig',
            'datasurat' => $this->M_KelolaSurat->joinmodel()
        ];

        $html = view('lihat/' . $id, $data);
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream("$id.pdf", array("Attachment" => false));
    }
}
