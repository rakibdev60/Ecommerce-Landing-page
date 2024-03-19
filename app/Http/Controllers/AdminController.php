<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $total_order = Order::count();
        $deliveried_orders = Order::count();
        $pending_orders = Order::where('status', 'pending')->count();
        $confiremed_orders = Order::where('status', 'confiremed')->count();
        $canceled_orders = Order::where('status', 'canceled')->count();

        $total_product = Product::count();
        $total_page = Page::count();

        // dd($orders);

        return view('admin.dashboard', compact('total_page', 'total_product', 'total_order', 'pending_orders', 'deliveried_orders', 'confiremed_orders', 'canceled_orders'));
    }

    function welcome()
    {
        return view('admin.welcome');
    }
}
