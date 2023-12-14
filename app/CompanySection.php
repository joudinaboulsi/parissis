<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanySection extends Model
{
    //
    protected $table="company_sections";
    protected $fillable = [
        'title',
        'subtitle',
        'img1',
        'alt1',
        'p1',
        'img2',
        'alt2',
        'p2',
        'img3',
        'alt3',
        'p3',
        'title_tab1',
        'title_tab2',
        'title_tab3',
        'title_tab4',
        'title_tab5',
        'subtitle_tab1',
        'text_tab1',
        'image_tab1',
        'alt1_tab1',
     
        'subtitle_tab2',
        'text_tab2',
        'image_tab2',
        'alt1_tab2',

        'subtitle_tab3',
        'text_tab3',
        'image_tab3',
        'alt1_tab3',

        'subtitle_tab4',
        'text_tab4',
        'image_tab4',
        'alt1_tab4',

        'subtitle_tab5',
        'text_tab5',
        'image_tab5',
        'alt1_tab5',

        'sub1',
        'sub2',
        'sub3',
    ];

}
