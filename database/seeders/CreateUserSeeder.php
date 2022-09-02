<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Naeem Noor',
                'email' => 'admin@admin.com',
                'role' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@admin.com',
                'role' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Naeem',
                'email' => 'naeem@csr.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Miller',
                'email' => 'miller@csr.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tom',
                'email' => 'tom@csr.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Smith',
                'email' => 'smith@csr.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Robert',
                'email' => 'robert@csr.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
