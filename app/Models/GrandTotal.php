<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandTotal extends Model
{
    use HasFactory;
    protected $fillable = ['participant_id', 'total_score', 'point_deduction', 'final_score', 'main_score'];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function championshipTitle()
    {
        return $this->belongsTo(ChampionshipTitle::class);
    }
}
