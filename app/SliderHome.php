<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderHome extends Model
{
    //
    protected $table = "slider_homes";
    protected $fillable = [
        'image',
        'title',
        'text'
    ];
}
