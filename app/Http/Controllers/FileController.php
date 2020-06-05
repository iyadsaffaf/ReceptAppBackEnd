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
    public function photoSave(Request $request){
        error_log($request);
          $ee=strval(rand(1,100000));
         $fileName=$ee."user.png";
         $request->file('photo');
         $path=$request->file('photo')->move(public_path("/"),$fileName);
         $photoURL=url('/'.$fileName);
         return response()->json(['url'=>$photoURL],200);


    }

}
