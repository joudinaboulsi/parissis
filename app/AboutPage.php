<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    //
    protected $table="about_pages";
    protected $fillable = [
        'title_header',
        'subtitle_header',
        'image_header',


        'title_s1',
        'image_s1',
       'text_s1',
        'link_s1',
        'link_url',

        'img1_s1',
        'alt1',

        'img2_s1',
        'alt2',
        'img3_s1',
        'alt3',
        'img4_s1',
        'alt4',

        'img5_s1',
        'alt5',
        'btn',
        'btn2',
        'title_s2',
       'text_s2',
        'title_s3',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'icon5',
        'icon6',
        'alt1_s3',
        'alt2_s3',
        'alt3_s3',
        'alt4_s3',
        'alt5_s3',
        'alt6_s3',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        't1_s3',
        't2_s3',
        't3_s3',
        't4_s3',
        't5_s3',
        't6_s3',
       'text_s3',
        'image_s3',


        'title_s5',
       'text_s5',
        'img_s5',
        'alt_s5',
        'img2_s5',
        'alt2_s5',
        'img3_s5',
        'alt3_s5',
        'img4_s5',
        'alt4_s5',
        'img5_s5',
        'alt5_s5',
        'img6_s5',
        'alt6_s5',
    ];
}
