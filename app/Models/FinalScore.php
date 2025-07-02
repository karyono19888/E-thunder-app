<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalScore extends Model
{
    use HasFactory;
    protected $fillable = ['participant_id', 'category_id', 'score'];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
