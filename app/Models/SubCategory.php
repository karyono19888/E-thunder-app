<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'code', 'name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function assessmentItems()
    {
        return $this->hasMany(AssessmentItem::class);
    }
}
