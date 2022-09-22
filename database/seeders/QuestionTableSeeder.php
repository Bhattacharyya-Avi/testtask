<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
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
                'question'=> 'Sample Question type 1 MCQ'
            ],
            [
                'question'=> 'Sample Question type 2 (Multiple selection)'
            ],
            [
                'question'=> 'Sample Question type 3'
            ],
        ];

        foreach ($data as $key => $value) {
            Question::create($value);
        }
    }
}
