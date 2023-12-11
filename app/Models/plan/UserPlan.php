<?php

namespace App\Models\plan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->belongsTo("App\Models\payment\Order", "order_id");
    }

    public function mainPlan()
    {
        return $this->belongsTo("App\Models\plan\Plan", "plan_id");
    }
}
