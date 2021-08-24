<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurlogoutController extends Controller
{
    public function store()
    { 
        auth()->logout();

        return redirect()->route('ourlogin');
    }
}
