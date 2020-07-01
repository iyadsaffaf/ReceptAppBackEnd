<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    //
    protected $table="favourite";
    //public $timestamps=false;
    protected $fillable=[
        'id',
        'created_at',
        'updated_at',

        'user_id',
        'recept_id',

    ];
}
