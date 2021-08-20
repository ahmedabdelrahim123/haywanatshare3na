<?php

namespace App\Http\Controllers;

use App\Models\Ourusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\models\User;


class OurregisterController extends Controller
{
    public function index(){
        return view('our.ourregister');

    }
    public function store(Request $request){
        //validate
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|max:255',
         ]);
        //store
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
         ]);
        //sign in
        auth()->attempt($request->only('email','password'));
        //redirect
        return redirect()->route('ourhome');
    }
    
}
