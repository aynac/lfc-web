<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    //
    protected $fillable = ['name','logo'];

    public function homeMatches(): HasMany {
        return $this->hasMany(MatchModel::class, 'home_club_id');
    }

    public function awayMatches(): HasMany {
        return $this->hasMany(MatchModel::class, 'away_club_id');
    }

    public function standings() {
        return $this->hasMany(Standing::class);
    }
}
