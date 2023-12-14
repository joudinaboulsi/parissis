<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = "contacts";
    protected $fillable = [
        'title_header',
        'subtitle_header',
        'image_header',
        'title_main',

        'title_team',
        'link',
        'link_url',
    ];
}
