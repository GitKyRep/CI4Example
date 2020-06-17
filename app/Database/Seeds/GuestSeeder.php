<?php

namespace App\Database\Seeds;

class GuestSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'name'     => 'Adi',
            'email'     => 'adi@mail.com',
            'phone'     => '0897123123123',
            'address'     => 'jl. jawa 1',

        ];
        $data2 = [
            'name'     => 'Joni',
            'email'     => 'joni12@mail.com',
            'phone'     => '081623123123',
            'address'     => 'jl. kalimantan',

        ];
        $this->db->table('Guest')->insert($data1);
        $this->db->table('Guest')->insert($data2);
    }
}
