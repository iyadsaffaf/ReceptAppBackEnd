<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    //
    //
    protected $table="recept";
    //public $timestamps=false;
    protected $fillable=[
        'id',
        'created_at',
        'updated_at',
        'description',
        'ingredients',
        'preparation_time',
        'tags',
        'user_id',
        'name',
        'url',
    ];
}
