<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    //
    protected $table = "service_pages";

    protected $fillable = [
   
        'title_header',
        'subtitle_header',
        'image_header',
        'title_section1',
        'text_section1',
        'image1',
        'alt1',
        'video',
        'bg',
        
        'title_section2',
        'text_section2',
        'title_section3',
        'link',
        'link_url',
        
    ];
}
