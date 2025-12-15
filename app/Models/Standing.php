<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    //
    protected $fillable = ['club_id','match_id','played','win','draw','loss','gf','ga','gd','points','competition','season'];

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id'); 
    }
    public function match() {
        return $this->belongsTo(MatchModel::class, 'match_id');
    }
}
