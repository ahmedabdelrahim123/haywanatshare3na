<?php

namespace App\Http\Controllers;

use App\Models\Ouranimals;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Support\Facades\DB;

class OursearchController extends Controller
{
    public function index()
    {
        $animals = Ouranimals::paginate(6);

        return view('our.oursearch',[

            'animals'=> $animals
        ]);
    }

    public function store(Request $request)
    {
        return back();
    }

    public function search(Request $request) 
    {
        
        $location = $request->location;
        $type = $request->animal_type;

        if ($location == null) {
            $animals = Ouranimals::where('AnimalType', $type)->paginate(6);
        }
        else {
            $animals = Ouranimals::where('location', $location)
                                 ->where('AnimalType', $type)->paginate(6);
        }

        return view('our.oursearch', [
            'animals'=> $animals
        ]);
    }

    public function destroy($id)
    {
        $obj = Ouranimals::findOrFail($id);
        DB::delete('DELETE FROM ouranimals WHERE id = ?', [$id]);
        return back();
    }

}
