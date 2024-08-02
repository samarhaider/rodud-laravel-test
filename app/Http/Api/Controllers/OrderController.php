<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OrderController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {  
        $data = Order::whereCustomer(Auth::id())
            ->oldest()
            ->paginate(10);
        return $data;

    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        
        $order = new Order();
        $order->fill( $request->all());
        $order->customer_id = Auth::id();
        $order->status = Order::PENDING;
        $order->save();
        $admins = User::whereAdmin()->get();
        Notification::send($admins, new OrderCreated($order));
        return $order;
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return $order;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return ['success' => true, 'message' => 'Updated Successfully'];   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }
}
