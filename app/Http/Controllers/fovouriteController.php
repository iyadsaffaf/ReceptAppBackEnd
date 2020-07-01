<?php

namespace App\Http\Controllers;

use App\Favourite;
use App\Models\Recept;
use Illuminate\Http\Request;

class fovouriteController extends Controller
{
    //
    public function save(Request $request){
        $favourite=Favourite::create($request->all());
        return response()->json($favourite,200);

    }


        public function delete(Request $request,Favourite $favourite){
            $favourite->delete();
            return response()->json(null,204);


        }
    public function getAll(){



        return response()->json(Favourite::get(),200);

    }



}
