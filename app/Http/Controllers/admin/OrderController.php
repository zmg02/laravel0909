<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $map = [];

        $orderObj = new Order();
        $orderData =  $orderObj->where($map)->paginate(10);
        
        return view('admin/order/index',compact('orderData'));
    }
}