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
                ->orderBy('match_date', 'asc')
                ->get();

        $standings = Standing::with('club')
                    ->orderByDesc('points')
                    ->orderByDesc('gd')
                    ->get();

        return view('user.fixture', compact('matches', 'standings'));
    }
}
