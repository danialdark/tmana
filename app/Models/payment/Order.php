<?php

namespace App\Models\payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function plan()
    {
        return  $this->belongsTo("App\Models\plan\Plan", "plan_id");
    }

    public function buyer()
    {
        return  $this->belongsTo("App\Models\User", "user_id");
    }
}
