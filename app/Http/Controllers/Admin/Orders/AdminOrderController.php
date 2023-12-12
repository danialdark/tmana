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
        return view('admin.orders.all', compact("orders"));
    }

    public function status(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        $order->status = $order->status == 1 ? 2 : 1;
        $order->save();
        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }


    public function delete(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        $order->delete();
        return response()->redirect()->with("success", "با موفقیت انجام شد!");
    }
}
