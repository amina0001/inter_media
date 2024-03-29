<?php

namespace App\Http\Controllers;

use App\Order;
use App\Client;
use App\Technician;
use Illuminate\Http\Request;
use App\Promotion;

class WelcomeConntroller extends Controller
{
    public function welcome()
    {
        $clientsCount = Client::all()->count();
        $techsCount = Technician::all()->count() ;
        $ordersCount = Order::all()->count();
        $verifiedOrdersCount = Order::where('verified', 1)->count();
        $promotions = Promotion::paginate(9);
        // $promotions = Promotion::all()->sortByDesc('created_at')->take(9);
        return view('welcome')->with([
            'clientsCount'=>$clientsCount,
            'techsCount'=>$techsCount,
            'ordersCount'=>$ordersCount,
            'verifiedOrdersCount'=>$verifiedOrdersCount,
            'promotions' => $promotions
            ]);
    }
}
