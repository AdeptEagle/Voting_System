<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Vote;
class CandidatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('parties')->insert([
            [
                'name' => 'Candidate 1',
                'position' => 'president',
                'course' => 'Course 1',
                'image' => '/images/candidate1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate 2',
                'position' => 'president',
                'course' => 'Course 2',
                'image' => '/images/candidate2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate 1',
                'position' => 'vice_president',
                'course' => 'Course 1',
                'image' => '/images/candidate1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate 2',
                'position' => 'vice_president',
                'course' => 'Course 2',
                'image' => '/images/candidate2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate 1',
                'position' => 'secretary',
                'course' => 'Course 1',
                'image' => '/images/candidate1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate 2',
                'position' => 'secretary',
                'course' => 'Course 2',
                'image' => '/images/candidate2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}