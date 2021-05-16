<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    // public function Test(Request $request)
    // {
    //     if($request ->isMethod('get')){
    //         return view('test');
    //     }else if($request->isMethod('post')){
    //         $name = $request->color;
    //         dd($name);
    //         die();
    //     }
    // }
    public function ABC()
    {
        return view('test');
    }
}
