<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 1
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 1
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 1
            ],
            [
                'name' => 'user4',
                'email' => 'user4@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 2
            ],
            [
                'name' => 'user5',
                'email' => 'user5@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 2
            ],
            [
                'name' => 'user6',
                'email' => 'user6@gmail.com',
                'password' => bcrypt('12345'),
                'department_id' => 2
            ],
        ];
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
