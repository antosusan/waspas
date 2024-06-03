<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('login');
    }
    // public function testConnection()
    // {
    //     $db = \Config\Database::connect();
    //     if ($db->connID) {
    //         echo "Koneksi berhasil!";
    //     } else {
    //         echo "Koneksi gagal!";
    //     }
    // }
}
