<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Standing;
use App\Models\Club;
use App\Models\MatchModel;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    public function index()
    {
        $standings = Standing::with('club', 'match')->get();
        return view('admin.standing.index', compact('standings'));
    }

    public function create()
    {
        $clubs = Club::orderBy('name')->get();
        $matches = MatchModel::orderBy('match_date')->get();
        return view('admin.standing.create', compact('clubs', 'matches'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'match_id' => 'required|exists:matches,id',
            'club_id' => 'required|exists:clubs,id',
            'played' => 'nullable|integer|min:0',
            'win' => 'nullable|integer|min:0',
            'draw' => 'nullable|integer|min:0',
            'loss' => 'nullable|integer|min:0',
            'gf' => 'nullable|integer|min:0',
            'ga' => 'nullable|integer|min:0',
            'gd' => 'nullable|integer|min:0',
            'points' => 'required|integer|min:0',
        ]);

        Standing::create($data);

        return redirect()->route('admin.standing.index')->with('success', 'Standing added.');
    }

    public function edit(Standing $standing)
    {
        $clubs = Club::orderBy('name')->get();
        $matches = MatchModel::orderBy('match_date')->get();
        return view('admin.standing.edit', compact('standing', 'clubs', 'matches'));
    }

    public function update(Request $request, Standing $standing)
    {
        $data = $request->validate([
            'played' => 'nullable|integer|min:0',
            'win' => 'nullable|integer|min:0',
            'draw' => 'nullable|integer|min:0',
            'loss' => 'nullable|integer|min:0',
            'gf' => 'nullable|integer|min:0',
            'ga' => 'nullable|integer|min:0',
            'gd' => 'nullable|integer|min:0',
            'points' => 'required|integer|min:0',
        ]);

        $standing->update($data);

        return redirect()->route('standing.index')->with('success', 'Standing updated.');
    }

    public function destroy(Standing $standing)
    {
        $standing->delete();
        return redirect()->route('standing.index')->with('success', 'Standing deleted.');
    }
}
