<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurValue extends Model
{
    //

    protected $table = "our_values";
    protected $fillable = [
        'title_section2',
        'img_v',
        'alt_v',
        'value',

        'img_v2',
        'alt_v2',
        'value2',

        'img_v3',
        'alt_v3',
        'value3',

        'img_v4',
        'alt_v4',
        'value4',

        'img_v5',
        'alt_v5',
        'value5',

        'bg',
        'data_img',
        'data_alt',
        'data_to',
        'data',

        'data_img2',
        'data_alt2',
        'data_to2',
        'data2',

        'data_img3',
        'data_alt3',
        'data_to3',
        'data3',

        'data_img4',
        'data_alt4',
        'data_to4',
        'data4',

        'data_img5',
        'data_alt5',
        'data_to5',
        'data5',

        'data_img6',
        'data_alt6',
        'data_to6',
        'data6',

        'data_img7',
        'data_alt7',
        'data_to7',
        'data7',
    ];
}
