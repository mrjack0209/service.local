<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusCheckController extends Controller
{
    public function __invoke(Request $request, $phone)
    {
        return response()->json(['success' => Order::status($phone)]);
    }


}
