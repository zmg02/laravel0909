<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class OrderController extends Controller
{
    public function index()
    {
        $map = [];

        $orderObj = new Order();
        $orderData =  $orderObj->where($map)->paginate(10);
        
        //order status
        $status = Config::get('order');


        return view('admin/order/index',compact('orderData','status'));
    }

    public function goods($orderId)
    {
        echo $orderId;
        return view('admin/order/goods');
    }

    public function preview($orderId)
    {
        
    }

    public function setStatus($orderId)
    {

    }

    public function exportCsv()
    {

    }
}
