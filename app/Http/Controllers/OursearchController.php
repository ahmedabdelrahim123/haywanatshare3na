<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OursearchController extends Controller
{
    public function index(){
        
        return view('our.oursearch');
    } 
}
