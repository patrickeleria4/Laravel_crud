<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $totalUsers = User::count(); // Calculate the total number of users
    return view('product.home', ['totalUsers' => $totalUsers]);
}
}
