<?php

namespace App\Http\Controllers\panel\user\plans;

use App\Http\Controllers\Controller;
use App\Models\plan\Plan;
use App\Models\plan\UserPlan;
use Illuminate\Http\Request;

class UserPlansController extends Controller
{

    public function activePlans()
    {
        $plans = UserPlan::where("expire_date", ">=", now())->get();
        return view("panels.user.accounts.actives", compact("plans"));
    }

    public function plans()
    {

        $plans = Plan::where("status", 1)->get();
        return view("panels.user.plans.all", compact("plans"));
    }
}
