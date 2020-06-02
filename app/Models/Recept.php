<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    //
    //
    protected $table="recept";
    protected $fillable=[
        'id',
        'created_at',
        'updated_at',
        'description',
        'ingredients',
        'pteparationtime',
        'tags',
    ];
}
