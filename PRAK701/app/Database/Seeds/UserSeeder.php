<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@mail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT)
        ];

        // Masukkan data ke tabel users
        $this->db->table('users')->insert($data);
    }
}
