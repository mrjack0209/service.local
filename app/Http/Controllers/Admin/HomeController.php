<?php

namespace App\Http\Controllers\Admin;

use App\Dashboard;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showIndex()
    {
        $customers = Dashboard::totalCustomer();
        $orders = Dashboard::totalOrders();
        return view('admin.index', ['customers' => $customers, 'orders' => $orders]);
    }

}
