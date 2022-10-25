<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;
use App\Models\UsersModel;

class User extends BaseController
{
    protected $db, $builder;
    protected $UsersModel;

    public function __construct()
    {
        $this->db         = \Config\Database::connect();
        $this->builder    =  $this->db->table('users');
        $this->userModel = new UsersModel();
    }

    public function user_list()
    {
        $data = [
            'title' => 'User List'
        ];

        $this->builder->select('users.id as userid, username, email, user_img, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('user/user_list', $data);
    }

    public function tambah_akun()
    {
        $data = [
            'title' => 'Tambah Akun'
        ];

        return view('user/tambah_akun', $data);
    }

    public function buat()
    {

        $user_myth = new UserModel();
        $user_myth->withGroup($this->request->getVar('role'))->save([

            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('namalengkap'),
            'password_hash' => Password::hash($this->request->getVar('password')),
            'active' => 1
        ]);

        session()->setFlashdata('success', 'Berhasil menambahkan user');
        return redirect()->to('user_list');
    }
    public function hapus($id)
    {
        $this->userModel->delete($id);

        // dd('userModel');
        session()->setFlashdata('success', 'Akun Berhasil dihapus');
        return redirect()->to('user_list');
    }

    public function detail($id = 0)
    {
        $data = [
            'title' => 'User Detail'
        ];

        $this->builder->select('users.id as userid, username, email, fullname, user_img, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/user/user_list');
        }

        return view('user/detail', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profile | Sudig'
        ];
        return view('user/profil', $data);
    }

    // ke halaman ubah profil
    public function edit_profil($id)
    {
        $data_user = $this->userModel->find(user_id());
        $data = [
            "title" => 'Ubah Profi | Sudig',
            "userdata" => $data_user
        ];
        return view('user/ubah_profil', $data);
    }
    public function edit_detail($id)
    {
        $data_user = $this->userModel->find($id);
        $data = [
            "title" => 'Ubah Profi | Sudig',
            "userdata" => $data_user
        ];
        return view('user/ubah_profil_detail', $data);
    }
    // end ke halaman ubah profil

    // fungsi ubah profil
    public function ubah_profil($id)
    {
        $fileLogo = $this->request->getFile('logo');
        // cek apakah ada gambar yang di upload
        if ($fileLogo->getError() == 4) {
            $namaLogo = 'default.png';
        } else {
            // pindahkan file ke folder image logo
            $fileLogo->move('assets/img/avatar');
            // ambil nama file logo
            $namaLogo = $fileLogo->getName();
        }

        $this->userModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('namalengkap'),
            'user_img' => $namaLogo
        ]);

        session()->setFlashdata('success', 'Berhasil mengubah profil');
        return redirect()->to('ubah_profil/' . $id);
    }
    public function ubah_profil_detail($id)
    {
        $fileLogo = $this->request->getFile('logo');
        // cek apakah ada gambar yang di upload
        if ($fileLogo->getError() == 4) {
            $namaLogo = 'default.png';
        } else {
            // pindahkan file ke folder image logo
            $fileLogo->move('assets/img/avatar');
            // ambil nama file logo
            $namaLogo = $fileLogo->getName();
        }

        $this->userModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('namalengkap'),
            'user_img' => $namaLogo
        ]);

        session()->setFlashdata('success', 'Berhasil mengubah profil');
        return redirect()->to('edit_detail/' . $id);
    }
    // end fungsi ubah profil

    // ke halaman ubah password
    public function edit_password($id)
    {
        $data = [
            'title' => 'Ubah Password',
            'validation' => \Config\Services::validation()
        ];

        return view('user/ubah_password', $data);
    }
    public function edit_password_detail($id)
    {
        $data_user = $this->userModel->find($id);
        $data = [
            'title' => 'Ubah Password',
            'validation' => \Config\Services::validation(),
            "userdata" => $data_user
        ];

        return view('user/ubah_password_detail', $data);
    }
    // end ke halaman ubah password

    // fungsi ubah password
    public function ubah_password_detail($id)
    {
        // validasi
        if (!$this->validate([
            'password_baru' => 'required|strong_password',
            'v_password_baru' => 'required|matches[password_baru]'
        ])) {
            return redirect()->to('edit_password_detail/' . $id)->withInput();
        }

        $this->userModel->save([
            'id' => $id,
            'password_hash' => Password::hash($this->request->getVar('password_baru')),
        ]);

        session()->setFlashdata('success', 'Berhasil mengubah password');
        return redirect()->to('edit_password_detail/' . $id);
    }

    public function ubah_password($id)
    {
        // validasi
        if (!$this->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|strong_password',
            'v_password_baru' => 'required|matches[password_baru]'
        ])) {
            return redirect()->to('edit_password/' . $id)->withInput();
        }

        // dd($this->userModel);
        $this->userModel->save([
            'id' => $id,
            'password_hash' => Password::hash($this->request->getVar('password_baru')),
        ]);

        session()->setFlashdata('success', 'Berhasil mengubah password');
        return redirect()->to('edit_password/' . $id);
    }
    // end fungsi ubah password
}
