<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = [
       
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
    ];
}
