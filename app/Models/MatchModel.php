<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchModel extends Model
{
    //
    protected $table = 'matches';
    protected $fillable = [
        'home_club_id','away_club_id','match_date','match_time',
        'competition','season','venue','status','home_score','away_score'
    ];
    protected $casts = [
        'match_date' => 'datetime', // <<< add this
    ];

    public function homeClub(): BelongsTo {
        return $this->belongsTo(Club::class, 'home_club_id');
    }

    public function awayClub(): BelongsTo {
        return $this->belongsTo(Club::class, 'away_club_id');
    }

    public function isPlayed(): bool {
        return $this->status === 'played';
    }
    public function standings() {
        return $this->hasMany(Standing::class, 'match_id');
    }
}
