<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    //

    protected $table = "home_pages";

    protected $fillable = [
        'title_s1',
        'text_s1',
        'image',
        'alt',
        'img1',
        'alt1',
        'img2',
        'alt2',
        'img3',
        'alt3',
        'title_s2',
        'text_s2',
        'subtitle_s2',
        'image_s2',
        'counter1',
        'subtitle_counter1',
        'counter2',
        'subtitle_counter2',
        'counter3',
        'subtitle_counter3',
        'link1',
        'link2',
        'title_project',
        'title_client',
        'title_news',
        't1',
        't2',
        't3',
        'p1',
        'p2',
        'p3',
    ];

}
