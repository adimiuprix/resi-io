<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function logout() {
        session()->remove([
            'id_admin',
            'email',
            'username',
            'logged_in'
        ]);

        return redirect()->to('login');
    }

}
