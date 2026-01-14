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
                ->orderBy('match_date', 'desc')
                ->get();

        $results = MatchModel::with(['homeClub','awayClub'])
                ->where('status', 'played')
                ->orderBy('match_date', 'desc')
                ->get();

        $standings = Standing::with('club')
                    ->orderByDesc('points')
                    ->orderByDesc('gd')
                    ->get();

        return view('user.fixture', compact('matches','results', 'standings'));
    }
}
