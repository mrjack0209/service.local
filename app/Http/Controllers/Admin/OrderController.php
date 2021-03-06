<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Customer;
use App\Order;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Sodium\add;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $statusess = Status::all();
        $orders = Order::all();
        return view('admin.pages.orders.index', compact('categories', 'statusess','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        Order::add($request->all());
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $categories = Category::all();
        $statuses = Status::all();
        $customer = Customer::find($order->user_id);
        return view('admin.pages.orders.edit', compact('customer','order', 'categories', 'statuses'));
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
        $order = Order::find($id);
        $customer = Customer::where('name', $request['username'])
                        ->where('phone', $request['phone'])
                        ->first();

        if (!$customer){
            Customer::create($request->all());
            $user_id = Customer::max('id');
        }else{
            $user_id = $customer->id;
        }

        $order->update($request->all());
        $order->user_id = $user_id;


        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('orders.index');
    }


}
