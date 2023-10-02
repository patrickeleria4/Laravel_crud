<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   public function register()
   {
    return view('register');
   }

   public function registerPost(Request $request)
   {
      $user = new User();

      $user->name = $request->name;
      $user->email =$request->email;
      $user->password = Hash::make($request->password);


      $user->save();

      return back()->with('success', 'Register succesfully');
   }


   public function login()
   {
      return view ('login');
   }

   public function loginPost(Request $request)
   {
      $credentials =[
         'email'=>$request->email,  // email from input form
         'password'=>$request->password,   // password from input form
      ];

      if(Auth::attempt($credentials)){
         return redirect('/home')->with('success', 'Login Successfully');
      }

      return back()->with('error','Email or Password incorrect');
   }

   public function logout()
   {
      Auth::logout(); // Log out the currently authenticated user

      return redirect()->route('login');
   }
}
