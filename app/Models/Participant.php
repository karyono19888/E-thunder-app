<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'level_id', 'participant_number', 'performance_time'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // Cek apakah melebihi waktu minimal dari level
    public function isOverTime(): bool
    {
        if (!$this->performance_time || !$this->level) return false;

        return strtotime($this->performance_time) > strtotime($this->level->min_performance_time);
    }

    public function getOverTimeInSeconds(): int
    {
        if (!$this->isOverTime()) return 0;

        return strtotime($this->performance_time) - strtotime($this->level->min_performance_time);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function finalScores()
    {
        return $this->hasMany(FinalScore::class);
    }

    public function notes()
    {
        return $this->hasOne(Note::class);
    }

    public function grandTotal()
    {
        return $this->hasOne(GrandTotal::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }
}
