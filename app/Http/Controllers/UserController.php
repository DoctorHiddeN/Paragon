<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('userpannel');
    }
    public function order(Request $request)
    {
        $order=new Order();
        $order->type=$request->type;
        $order->client_number=Auth::user()->number;
        $order->user_id=Auth::user()->id;
        $order->save();
        $msg=("سفارش شما ثبت شد");
        return redirect(route('us-pannel'))->with('success',$msg);
    }

}
