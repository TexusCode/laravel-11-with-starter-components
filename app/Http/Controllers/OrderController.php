<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::orderBy("created_at", "desc")->paginate(100);
        return view('admin.pages.orders', compact('orders'));
    }
}
