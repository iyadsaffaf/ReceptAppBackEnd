<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class user extends Controller
{
    //
    public function userByID($id)
    {error_log('Some message here.');

        return response()->json(\App\User::find($id));
    }
    public function update(Request $request,\App\User $user){
        $user->update($request->all());
        return response()->json($user,200);


    }

}
