<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'config' => config('Auth'),
        ];
        $data['title'] = "Login | Sudig";
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register | Sudig'
        ];
        return view('auth/register', $data);
    }
    public function forgot()
    {
        $data = [
            'title' => 'Lupa Password | Sudig'
        ];
        return view('auth/forgot', $data);
    }
}
