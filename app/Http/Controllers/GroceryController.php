<?php

namespace App\Http\Controllers;
use App\Grocery;
use http\Env\Response;
use Illuminate\Support\Facades\Request as RequestFacade;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    public function store(Request $request)
    {
        if (RequestFacade::ajax()){
            c::create($request->all());
        }

        return response()->json(['success' => 'Данные успешно добавлены']);
    }

    public function show(Request $request, $name)
    {

        $gr = Grocery::where('name', $name)->first();
        return response()->json(['success' => $gr]);
    }


}
