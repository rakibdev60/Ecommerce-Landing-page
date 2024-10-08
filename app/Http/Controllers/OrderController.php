<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Order $order, Request $request)
    {
        $orders = $order;

        if ($request->query('status') && $request->query('status') != "All") {
            $orders =  $orders->where('status', $request->query('status'));
        }

        if ($request->query('limit') && $request->query('limit') != "All") {
            $orders =  $orders->limit($request->query('limit'));
        }

        $orders =  $orders->latest()->get();

        // dd($orders);

        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {

        $sub_total = 0;
        $products = $request->products;

        foreach ($request->products as $product) {
            $sub_total +=  $product['price'] * $product['quantity'];
        }

        $total = $sub_total + $request->delivery_charge;

        $order =  Order::create([
            'billing_details' => $request->billing_details,
            'products' => $request->products,
            'data' => [
                'sub_total' => $sub_total,
                'shipping_charge' => $request->delivery_charge,
                'total' => $total,
            ]
        ]);

        return redirect()->route('successfullorder')
            ->with('order_id', $order->id)
            ->with('order_created_at', $order->created_at->format('d/m/Y'))
            ->with('sub_total', $sub_total)
            ->with('total', $total)
            ->with('products', json_encode($products));
        // return view('successfullorder', compact('order', 'sub_total', 'products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function bulkDelete(Request $request, Order $order)
    {
        $order->destroy($request->ids);
        return redirect()->back();
    }

    public function bulkStatusChange(Request $request, Order $order)
    {
        $order->whereIn('id', $request->ids)->update([
            'status' => $request->status
        ]);

        return redirect()->route('admin.orders.index');
    }

    public function export(Order $order, Request $request) 
    {
        $orders = $order;

        if ($request->query('status') && $request->query('status') != "All") {
            $orders =  $orders->where('status', $request->query('status'));
        }

        if ($request->query('limit') && $request->query('limit') != "All") {
            $orders =  $orders->limit($request->query('limit'));
        }

        $orders =  $orders->latest()->get();

        return Excel::download(new OrdersExport($orders), 'orders.xlsx');
    }
}
