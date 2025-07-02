<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = ['participant_id', 'assessment_item_id', 'judge_id', 'score'];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function item()
    {
        return $this->belongsTo(AssessmentItem::class, 'assessment_item_id');
    }

    public function judge()
    {
        return $this->belongsTo(Judge::class);
    }
}
