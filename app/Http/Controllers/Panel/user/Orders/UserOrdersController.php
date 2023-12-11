<?php

namespace App\Http\Controllers\panel\user\Orders;

use App\Http\Controllers\Controller;
use App\Models\payment\Order;
use Illuminate\Http\Request;

class UserOrdersController extends Controller
{
    public function orders()
    {
        $orders = Order::where("user_id", auth()->user()->id)->get();

        return view("panels.user.orders.all", compact("orders"));
    }
}
