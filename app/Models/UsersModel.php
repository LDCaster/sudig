<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    // protected $primaryKey = 'id';
    protected $useTimestamps = true;
    // protected $useSoftDeletes = true;
    protected $allowedFields = ['id', 'email', 'username', 'fullname', 'user_img', 'password_hash', 'active'];

    // public function getUser($id = false)
    // {
    //     return $this->select('user.id, email, username, fullname, user_img, password_hash, active')
    // }

}
