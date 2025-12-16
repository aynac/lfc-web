<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MatchModel;
use App\Models\Club;
use App\Models\Standing;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index() {
        $fixtures = MatchModel::with(['homeClub','awayClub'])
            ->orderBy('match_date')
            ->paginate(20);

        $standings = Standing::with('club')->orderByDesc('points')->get();

        $playedMatches = MatchModel::whereNotNull('home_score')
            ->whereNotNull('away_score')
            ->get();

        return view('admin.fixture.index', compact('fixtures', 'standings', 'playedMatches'));
    }

    public function create() {
        $clubs = Club::orderBy('name')->get();
        return view('admin.fixture.create', compact('clubs'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'home_club_id' => 'required|exists:clubs,id|different:away_club_id',
            'away_club_id' => 'required|exists:clubs,id',
            'match_date' => 'required|date',
            'match_time' => 'nullable',
            'competition' => 'nullable|string',
            'season' => 'nullable|string',
        ]);
        MatchModel::create($data);
        return redirect()->route('admin.fixture.index')->with('success','Fixture created.');
    }

    public function edit(MatchModel $fixture) {
        $clubs = Club::orderBy('name')->get();
        return view('admin.fixture.edit', ['match' => $fixture, 'clubs' => $clubs]);
    }


    public function update(Request $request, MatchModel $fixture) {
        $data = $request->validate([
            'home_club_id' => 'required|exists:clubs,id|different:away_club_id',
            'away_club_id' => 'required|exists:clubs,id',
            'match_date' => 'required|date',
            'match_time' => 'nullable',
            'competition' => 'nullable|string',
            'season' => 'nullable|string',
            'status' => 'in:scheduled,played,cancelled',
            'home_score' => 'nullable|integer|min:0',
            'away_score' => 'nullable|integer|min:0',
        ]);
        $fixture->update($data);

        // if ($fixture->status === 'played') {
        //     // call a service or logic to update standings (not shown here)
        // }

        return redirect()->route('admin.fixture.index')->with('success','Fixture updated.');
    }

    public function destroy($id)
    {
        $match = MatchModel::findOrFail($id);
        $match->delete();
        return redirect()->route('admin.fixture.index')
                        ->with('success', 'Fixture deleted successfully');
    }

    public function result()
    {
        $matches = MatchModel::with(['homeClub', 'awayClub'])->orderBy('match_date')->get();
        return view('admin.fixture.result', compact('matches'));
    }

    public function show(MatchModel $fixture)
    {
        return view('admin.fixture.show', compact('fixture'));
    }

    public function storeResult(Request $request)
    {

        MatchModel::find($request->match_id)->update([
            'home_score' => $request->home_score,
            'away_score' => $request->away_score,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);
        return redirect()->route('admin.fixture.index', ['tab' => 'results'])
                 ->with('success', 'Result saved!');
    }
}