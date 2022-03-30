<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Sudig'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Sudig'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Sudig'
        ];
        return view('pages/contact', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | Sudig'
        ];
        return view('pages/login', $data);
    }
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | Sudig'
        ];
        return view('pages/dashboard', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | Sudig'
        ];
        return view('pages/register', $data);
    }
    // -----------------------------------------------------------------------
}
