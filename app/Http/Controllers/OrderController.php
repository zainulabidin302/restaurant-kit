<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new \App\Order();
        $uid = \Uuid::generate();
        $order->uuid = $uid;
        $order->status = $this->STATUS['NEW'];
        $order->save();

        foreach($request->items as $row) {
            $orderItem = new \App\OrderItem();
            $orderItem->recipie()->associate($row['id']);
            $orderItem->quantity = $row['quantity'];
            $order->orderItems()->save($orderItem);
            
        }

        $redis = \LRedis::connection();
        $order->uuid = "$uid";
        $order_string = json_encode($order, true);
        $redis->publish('NotifyCook', $order_string);
        $d = ['uid' => "$uid", 'status' => 1];
        return response()->json($d);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = \App\Order::where(['uuid' => $id])->with('orderItems', 'orderItems.recipie' )->first();

        $total = 0;

        foreach($order->orderItems as $orderItem) {
            
            $total += $orderItem->recipie->price;
        }
        return view('menu.track_order', ['order' => $order, 'total' => $total]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function update_status(Request $request)
    {
      $order = \App\Order::find($request['id']);
      $order->status = $request['status'];
      $d = \Carbon\Carbon::now();
      $order->eta = $d->addMinutes($request['min']);
      $order->save();
    }
}
