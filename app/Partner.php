<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //

    protected $table = "partners";
    protected $fillable = [
        'title_header',
        'subtitle_header',
        'image_header',
        'image',
        'alt',
        'title_s1',
        'text_s1',

        'bg',
        'title_s2',
        'text_s2',
        'title_s3',

        'small_title1_s3',
        'small_subtitle1_s3',
        'image1',
        'alt1',
        'p1_s3',
        'link1_s3',

        'small_title2_s3',
        'small_subtitle2_s3',
        'image2',
        'alt2',
        'link2_s3',
        'p2_s3',

        'small_title3_s3',
        'small_subtitle3_s3',
        'image3',
        'alt3',
        'link3_s3',
        'p3_s3',
        
       
        'title_s4',
        'small_title4_s4',
        'small_subtitle4_s4',
        'link4_s4',
        'p4_s4',
        'image4',
        'alt4',

        'small_title5_s4',
        'small_subtitle5_s4',
        'link5_s4',
        'p5_s4',
        'image5',
        'alt5',
        'small_title6_s4',
        'small_subtitle6_s4',
        'link6_s4',
        'p6_s4',
        'image6',
        'alt6',
    ];
}
