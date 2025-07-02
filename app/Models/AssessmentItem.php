<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentItem extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id', 'name'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
