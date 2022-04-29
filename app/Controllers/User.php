<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db         = \config\Database::connect();
        $this->builder    =  $this->db->table('users');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Sudig'
        ];
        return view('user/index', $data);
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
            'title' => 'My Profile | Sudig'
        ];
        return view('user/profil', $data);
    }
}
