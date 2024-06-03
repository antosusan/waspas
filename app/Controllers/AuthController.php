<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Tampilkan view login
        return view('login');
    }

    public function attemptLogin()
    {
        // Mulai session
        $session = session();

        // Buat instance model UserModel
        $model = new UserModel();

        // Ambil input username dan password dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Dapatkan data user berdasarkan username
        $user = $model->getUserByUsername($username);

        if ($user) {
            // Verifikasi password secara langsung
            if ($password === $user['password']) {
                // Siapkan data session
                $sessionData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => true,
                ];

                // Set data ke session
                $session->set($sessionData);

                // Redirect ke dashboard
                return redirect()->to('/dashboard');
            } else {
                // Set flashdata untuk error password
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            // Set flashdata untuk error username tidak ditemukan
            $session->setFlashdata('error', 'Username tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // Hancurkan session
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to('/login');
    }
}
