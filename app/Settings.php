<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //

    protected $table = "settings";
    protected $fillable = [
            'logo',
            'alt',
            'location',
            'address',
            'location2',
            'address2',
            'location3',
            'address3',
        
            'phone',
            'fax',
            'email',
            
            'phone2',
            'email2',

            'phone3',
            'fax3',
            'email3',

            'facebook',
            'instagram',
            'linkedin',
            'pdf',

            'location4',
            'address4',
            'phone4',
            'email4',
             'logo_dark',
    ];
}
