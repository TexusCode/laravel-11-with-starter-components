<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ReturnProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::orderBy("created_at", "desc")->paginate(100);
        return view('admin.pages.orders', compact('orders'));
    }
    public function order_returns()
    {
        $returns = ReturnProduct::orderBy("created_at", "desc")->paginate(100);
        return view('admin.pages.product-returns', compact('returns'));
    }
}
