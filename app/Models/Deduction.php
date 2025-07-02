<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $fillable = [
        'participant_id',
        'penalty_rule_id',
        'points',
        'unit_count',
        'description'
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function penaltyRule()
    {
        return $this->belongsTo(PenaltyRule::class);
    }
}
