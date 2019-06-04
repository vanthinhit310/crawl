<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class CrCountry extends Model
{
    //
    protected $table = 'cr_countries';
    protected $fillable=[
        'name','slug'
    ];
}
