<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseTestController extends Controller
{
    public function testConnection()
    {
        // Dapatkan instance database
        $db = \Config\Database::connect();

        // Uji koneksi
        if ($db) {
            return "Koneksi berhasil!";
        } else {
            return "Koneksi gagal!";
        }
    }
}
