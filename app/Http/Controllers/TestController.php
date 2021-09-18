<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo route('test.index',['id'=>1],false);
        //跳转
        // return redirect()->route('name');
    }
}
