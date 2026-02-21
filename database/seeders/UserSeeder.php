<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
//- name
//- phone unique
//- cpf unique
//- email unique
//- password
//- deleted_at
//- city_id
//- role (admin, client, freelancer)

    public function run(): void
    {
        User::create([
            "name" => "admin",
            "cpf" => "01295312299",
            "email"=>"diamng@gmail.com",
            "password" => bcrypt("12345678"),
            "city_id" => 1,
            "role" => "admin",
        ]);
//        1|24z83uYzYqYG9ZOJJseAvZUdXGsPfcydYj0R5ihYf7c86d44
    }
}
