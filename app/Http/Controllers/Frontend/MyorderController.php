<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyorderController extends Controller
{
    //
    public function order()
    {
        if(Auth::check())
        {
            $user = Auth::user()->id;
            $order = OrderModel::orderBy('created_at', 'DESC')->where('id_customer', $user)->get();
            return view('frontend.modules.order', compact('order'));
        }
        else
        return view('frontend.modules.order');
    }
}
