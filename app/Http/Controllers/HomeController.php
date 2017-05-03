<?php

namespace App\Http\Controllers;


use Illuminate\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = \App\Order::whereIn(
                'status', [$this->STATUS['NEW'], $this->STATUS['READY'], $this->STATUS['COOKING']])->get();
        
        return view('home', ['orders' => $orders]);
    }


}
