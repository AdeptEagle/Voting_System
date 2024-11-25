<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'course' => 'Computer Science',
            'partylist' => 'Tech Party',
            'position' => 'President',
        ]);

    }
}