<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidates.index', compact('candidates'));
    }

    public function create()
    {
        return view('candidates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'course' => 'required',
            'partylist' => 'nullable',
            'position' => 'required',
        ]);

        Candidate::create($request->all());

        return redirect()->route('candidates.index')->with('success', 'Candidate created successfully!');
    }

    public function show(Candidate $candidate)
    {
        return view('candidates.show', compact('candidate'));
    }

    public function edit(Candidate $candidate)
    {
        return view('candidates.edit', compact('candidate'));
    }

    public function update(Request $request, Candidate $candidate)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'course' => 'required',
            'partylist' => 'nullable',
            'position' => 'required',
        ]);

        $candidate->update($request->all());

        return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully!');
    }

    public function destroy(Candidate $candidate)
{
    $candidate->delete(); 
    return redirect()->route('candidates.index')->with('success', 'Candidate deleted successfully!');
}

}