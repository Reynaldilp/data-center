<?php namespace App\Database\Seeds;
  
class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nip'  => '111',
                'name'  => '111reza',
                'email'  => '111@gmail.com',
                'password'  =>  password_hash('123456', PASSWORD_DEFAULT),
                'role'  => 'Admin',
                'status'  => 'Active',
            ],
        ];
        $this->db->table('user')->insertBatch($data);
    }
} 