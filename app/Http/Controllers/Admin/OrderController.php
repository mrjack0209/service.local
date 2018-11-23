<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Customer;
use App\Order;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function create()
    {
        $data = $this->request->all();
        $customer = new Customer();

        if (!$customer->NotExistsCustomer($data['phone'])){
            $customer->fill([
                'name' => $data['username'],
                'phone' => $data['phone'],
            ]);
            $customer->save();
            $user_id = Customer::max('id');
        }else{
            $user_id = $customer->NotExistsCustomer($data['phone']);
        }

        $order = new Order();
        $order->fill([
            'device_name' => $data['device_name'],
            'device_id' => $data['device_id'],
            'category_id' => $data['category'],
            'user_id' => $user_id,
            //'foto_id' => $data['fo'],
            'status_id' => 1,
            'price' => $data['price'],
            'description' => $data['description']
        ]);
        $order->save();

        return redirect()->route('orders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Test
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


}
