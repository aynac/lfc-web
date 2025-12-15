<?php

//  * For User 
namespace App\Http\Controllers;

use App\Models\MatchModel;
use App\Models\Standing;

class FixtureController extends Controller
{
    public function index()
    {
        $matches = MatchModel::with(['homeClub','awayClub'])
                    ->orderBy('match_date')->get();
        $standings = Standing::with('club')->orderByDesc('points')->get();

        return view('user.fixture', compact('matches', 'standings'));
    }

    public function show(MatchModel $match)
    {
        $match->load('homeClub','awayClub');
        return view('user.fixture', compact('matches', 'standings'));
    }

}
