<?php

namespace App\Models\plan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo("App\Models\plan\PlanCategory", "category_id");
    }
}
