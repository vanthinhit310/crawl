<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrCity extends Model
{
    //

    protected $table = 'cr_cities';
    protected $fillable=[
        'name','country_id','slug'
    ];
}
