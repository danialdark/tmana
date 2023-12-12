<?php

namespace App\Http\Controllers\Admin\Product\Category;

use App\Models\plan\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all()
    {
        $plans = Plan::all();
        return view("admin.products.all", compact("plans"));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plan = new Plan();
        $plan->category_id = $request->category_id;
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->dollar_price = $request->dollar_price;
        $plan->duration_per_day = $request->duration_per_day;
        $plan->save();

        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $productId)
    {
        $plan =  Plan::find($productId);
        $plan->category_id = $request->category_id;
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->dollar_price = $request->dollar_price;
        $plan->duration_per_day = $request->duration_per_day;
        $plan->save();

        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $productId)
    {
        $plan =  Plan::find($productId);
        $plan->delete();
        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }
}
