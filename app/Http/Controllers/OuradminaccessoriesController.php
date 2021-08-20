<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ouradminaccessories;
use Symfony\Contracts\Service\Attribute\Required;

class OuradminaccessoriesController extends Controller
{
    public function index(){
        return view("our.ouradminaccessories");
    }
    public function store(Request $request){

        //validate
        $this->validate($request,[
            'name'=> 'required|max:255',
            'image'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
            'AnimalType'=>'required'
            ]); 

            //save image in folder

            $file_extension = $request -> image -> getClientOriginalExtension(); //3shan ye3raf enaha jpg
            $file_name = time().".".$file_extension;
            $path = 'images/offers';
            $request -> image -> move($path,$file_name);


            //create
            Ouradminaccessories::create([
                'name' => $request->name,
                'image' => $file_name,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'AnimalType' => $request->AnimalType
               ]);
               //dd('lol');
               //redirect
               return back();

    }
}
