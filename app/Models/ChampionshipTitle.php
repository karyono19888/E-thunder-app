<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampionshipTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'group',
        'rank',
        'level_id',
        'category_id',
        'min_rank',
        'max_rank',
        'type',
        'description',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function grandTotals()
    {
        return $this->hasMany(GrandTotal::class);
    }
}
