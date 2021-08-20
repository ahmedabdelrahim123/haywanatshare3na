<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurloginController extends Controller
{
    
    public function index(){
        
        return view('our.ourlogin');
    } 
    public function store(Request $request){
        //validate
        
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
         ]);
        //sign in
        if (!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','invalid login details');
        }
        //redirect
        return redirect("ourhome");
    }
}
