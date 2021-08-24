<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurhomeController extends Controller
{
    public function index(){
        
        return view('our.ourhome');
    } 
}
