<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'question_id' => 1,
                'option_name' => 'Option 1',
                'point' => '0.25',
                'correct_answer' => 1,
            ],

            [
                'question_id' => 1,
                'option_name' => 'Option 2',
                'point' => '0.25',
            ],

            [
                'question_id' => 1,
                'option_name' => 'Option 3',
                'point' => '0.25',
            ],

            [
                'question_id' => 1,
                'option_name' => 'Option 4',
                'point' => '0.25',
            ],
// question 2
            [
                'question_id' => 2,
                'option_name' => 'Option 1',
                'point' => '0.25',
                'correct_answer' => 1,
            ],

            [
                'question_id' => 2,
                'option_name' => 'Option 2',
                'point' => '0.25',
                'correct_answer' => 1,
            ],

            [
                'question_id' => 2,
                'option_name' => 'Option 3',
                'point' => '0.25',
            ],

            [
                'question_id' => 2,
                'option_name' => 'Option 4',
                'point' => '0.25',
            ],

            // question 3
            [
                'question_id' => 3,
                'option_name' => 'Option 1',
                'point' => '0.25',
                'correct_answer' => 1,
            ],

            [
                'question_id' => 3,
                'option_name' => 'Option 2',
                'point' => '0.25',
            ],

            [
                'question_id' => 3,
                'option_name' => 'Option 3',
                'point' => '0.25',
            ],

            [
                'question_id' => 3,
                'option_name' => 'Option 4',
                'point' => '0.25',
            ],
        ];

        foreach ($data as $key => $value) {
            Option::create($value);
        }
    }
}
