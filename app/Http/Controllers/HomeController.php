<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('product.home');

      
    }
    
    public function account()
    {
        return view('product.account');
    }

    public function option()
    {
        return view('product.setting');
    }

    
}
