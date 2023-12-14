<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table = "careers";
    protected $fillable = [
        'title_header',
        'subtitle_header',
        'image_header',
        'title_main',
    ];
}
