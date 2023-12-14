<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
    //
    protected $table = "service_sections";

    protected $fillable = [

        'image1',
        'alt1',
        'title1',
        'p1',
        'text1',

        'image2',
        'alt2',
        'title2',
        'p2',
        'text2',

        'image3',
        'alt3',
        'title3',
        'p3',
        'text3',

        'image4',
        'alt4',
        'title4',
        'p4',
        'text4',

        'image5',
        'alt5',
        'title5',
        'p5',
        'text5',
    ];
}
