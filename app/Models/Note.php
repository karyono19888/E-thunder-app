<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['participant_id', 'content'];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
