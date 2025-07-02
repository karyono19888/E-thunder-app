<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'min_performance_time'];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
