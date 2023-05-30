<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'    => 'admin1@example.com',
                'username' => 'admin1',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
            ],
        ];

        // Insert data ke tabel 'Admin_tbl'
        $this->db->table('Admin_tbl')->insertBatch($data);
    }
}
