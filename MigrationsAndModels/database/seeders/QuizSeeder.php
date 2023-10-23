<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [
            [
                'name' => 'Quizz 1',
                'description' => 'Quizz 1',
            ],
            [
                'name' => 'Quizz 2',
                'description' => 'Quizz 2',
            ],
            [
                'name' => 'Quizz 3',
                'description' => 'Quizz 3',
            ],
            [
                'name' => 'Quizz 4',
                'description' => 'Quizz 4',
            ],
            [
                'name' => 'Quizz 5',
                'description' => 'Quizz 5',
            ],
        ];

        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
