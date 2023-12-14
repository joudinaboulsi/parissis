<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Helpers\FileUploadHelper;

class TeamController extends Controller
{
    //

    public function index(){
        $team = Team::find(1);
        return view("cms.team",compact('team'));
    }

    public function storeTeam(Request $request){
        $team = Team::find(1);

        
        // Define an array to store file input names and corresponding database fields
        $fileFields = [
            'image_header' => 'image_header',
            'profile' => 'profile',
            'profile2' => 'profile2',
            'profile3' => 'profile3',
            'profile4' => 'profile4',
            'img_v' => 'img_v',
            'img_v2' => 'img_v2',
            'img_v3' => 'img_v3',
            'img_v4' => 'img_v4',
            'img_v5' => 'img_v5',
            'data_img' => 'data_img',
            'data_img1' => 'data_img1',
            'data_img2' => 'data_img2',
            'data_img3' => 'data_img3',
            'data_img4' => 'data_img4',
            'data_img5' => 'data_img5',
            'data_img6' => 'data_img6',
            'data_img7' => 'data_img7',
            'organigram' => 'organigram',
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'team/');
            if($image!=null)
                $team->update([$dbField => $image]);
        }

        // Define an array to store other fields that are not files
        $otherFields = [
        'title_header',
        'subtitle_header',
        'title_section1',
        'name',
        'position',
        'specialty',
        'alt',
        'name2',
        'position2',
        'specialty2',
        'alt2',
        'name3',
        'position3',
        'specialty3',
        'alt3',
        'name4',
        'position4',
        'specialty4',
        'alt4',
        'title_section2',
        'alt_v',
        'value',

        'alt_v2',
        'value2',

        'alt_v3',
        'value3',

        'alt_v4',
        'value4',

        'alt_v5',
        'value5',

   
        'data_alt',
        'data_to',
        'data',

       
        'data_alt2',
        'data_to2',
        'data2',

      
        'data_alt3',
        'data_to3',
        'data3',
        'data_alt4',
        'data_to4',
        'data4',

        'data_alt5',
        'data_to5',
        'data5',

        'data_alt6',
        'data_to6',
        'data6',

        'data_alt7',
        'data_to7',
        'data7',

        'title_section3',
        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $team->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }

        return redirect()->back();
    }
    
}
