<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;
use App\Http\Controllers\Controller;


class ReceptController extends Controller
{
    //
    public function recepts(){



     return response()->json(Recept::get(),200);

    }
}
