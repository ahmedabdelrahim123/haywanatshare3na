<?php

namespace App\Http\Controllers;

use App\Models\Ouranimals;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class OuranimalsController extends Controller
{
    public function index()
    {
        return view("our.ouranimals");
    }

    public function store(Request $request)
    {

        //validate
        $this->validate($request,[
            
            'image'=> 'required',
            'color'=> 'required',
            'breed'=> 'required',
            'AnimalType'=>'required',
            'location'=>'required'
        ]); 
        // dd('validated data');
        //save image in folder

        $file_extension = $request -> image -> getClientOriginalExtension(); //3shan ye3raf enaha jpg
        $file_name = time().".".$file_extension;
        $path = 'images/animals';
        $request -> image -> move($path,$file_name);

        // dd('image saved');
        //create
        Ouranimals::create([
            
            'image' => $file_name,
            'color' => $request->color,
            'breed' => $request->breed,
            'AnimalType' => $request->AnimalType,
            'location' => $request->location
        ]);
        // dd('uploaded image and added animal');
        //redirect
        return back();

    }
}
