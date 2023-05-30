<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Login extends Controller
{
    public function __construct(){
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = "Halaman Login";
        return view('login', $data);
    }

    public function process()
    {
        $model = new AdminModel();
    
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $admin = $model->where('email', $email)->first();
    
        if ($admin) {
            // Verifikasi password
            if (password_verify($password, $admin['password'])) {
                return redirect()->to('dashboard')->with('success', 'Login successful!');
            }
        }
    
        return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
    }
    
}
