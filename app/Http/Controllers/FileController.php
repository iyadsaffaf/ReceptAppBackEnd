<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function photo(){
     return response()->download(public_path('test.png'),'patatospicture');

    }
    public function photoByName($name){
        return response()->download(public_path($name+'.png'),'patatospicture');

    }

}
