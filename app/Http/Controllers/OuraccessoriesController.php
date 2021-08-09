<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ouradminaccessories;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class OuraccessoriesController extends Controller
{
    public function index(){
        $accessories = Ouradminaccessories::paginate(6);

        return view('our.ouraccessories',[

            'accessories'=> $accessories
        ]);
    }
    public function store(Request $request){
    // for search
    // $this->validate($request,[
    //     'body' => 'required',
    //  ]);

    

    return back();
   }

   public function destroy($id){
    $obj = Ouradminaccessories::findOrFail($id);
    // dd($obj->quantity);
    $obj->quantity=$obj->quantity-1;
    $obj->update(array('quantity' => $obj->quantity));

    if($obj->quantity==0){
        DB::delete('DELETE FROM ouradminaccessories WHERE id = ?', [$id]);
    }
    return back();
   }
}
