<?php
namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function index()
    {
 
        $candidates = [
            'president' => [
                ['id' => 1, 'name' => 'Candidate 1', 'course' => 'Course 1', 'image' => '/images/candidate1.jpg'],
                ['id' => 2, 'name' => 'Candidate 2', 'course' => 'Course 2', 'image' => '/images/candidate2.jpg'],
            ],
            'vice_president' => [
                ['id' => 3, 'name' => 'Candidate 1', 'course' => 'Course 1', 'image' => '/images/candidate1.jpg'],
                ['id' => 4, 'name' => 'Candidate 2', 'course' => 'Course 2', 'image' => '/images/candidate2.jpg'],
            ],
            'secretary' => [
                ['id' => 5, 'name' => 'Candidate 1', 'course' => 'Course 1', 'image' => '/images/candidate1.jpg'],
                ['id' => 6, 'name' => 'Candidate 2', 'course' => 'Course 2', 'image' => '/images/candidate2.jpg'],
            ],
        ];

        return view('vote.index', compact('candidates'));
    }

    public function vote(Request $request)
    {
        // // Validate the votes (candidate ID and position for each one)
        $validated = $request->validate([
            'votes' => 'required|array',
            'votes.president' => 'required|exists:candidates,id',
            'votes.vice_president' => 'required|exists:candidates,id',
            'votes.secretary' => 'required|exists:candidates,id',
        ]);

         foreach ($validated['votes'] as $position => $candidateId) {
             Vote::create([
                 'candidate_id' => $candidateId,
                 'position' => $position,
                 'user_id' => auth()->id(),  
                 'created_at' => now(),
                 'updated_at' => now(),
             ]);
         }

        return redirect()->route('vote.index')->with('success', 'Your vote has been submitted!');
    }
}