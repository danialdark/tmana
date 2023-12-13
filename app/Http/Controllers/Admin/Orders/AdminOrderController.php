<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Models\payment\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function all()
    {
        $orders = Order::all();
        return view('panels.admin.orders.all', compact("orders"));
    }

    public function status(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        $order->done = $order->done == 0 ? 1 : 0;
        $order->save();
        return redirect()->back()->with("success", "با موفقیت انجام شد!");
    }


    public function delete(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        $order->delete();
        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }
}
