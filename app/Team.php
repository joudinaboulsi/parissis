<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    protected $table = "teams";
    protected $fillable = [
        'title_header',
        'subtitle_header',
        'image_header',
        'title_section1',
        'name',
        'position',
        'specialty',
        'profile',
        'alt',
        'name2',
        'position2',
        'specialty2',
        'profile2',
        'alt2',
        'name3',
        'position3',
        'specialty3',
        'profile3',
        'alt3',
        'name4',
        'position4',
        'specialty4',
        'profile4',
        'alt4',
        'title_section3',
        'organigram',
    ];
}
