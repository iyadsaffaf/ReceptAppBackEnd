<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    public function userByID($id)
    {error_log('Some message here.');

        return response()->json(\App\User::find($id));
    }
}
