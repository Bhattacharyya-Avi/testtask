<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
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
                'name' => 'dep1'
            ],
            [
                'name' => 'dep2'
            ],
        ];

        foreach ($data as $key => $value) {
            Department::create($value);
        }
    }
}
