<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaltyRule extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'is_dynamic',
        'point_per_unit',
        'unit_label',
        'default_description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }
}
