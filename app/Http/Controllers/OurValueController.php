<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurValue;
use App\Helpers\FileUploadHelper;
class OurValueController extends Controller
{
    //
    public function index(){
        $our_value = OurValue::find(1);
        return view("cms.our_values",compact('our_value'));
    }

    public function store(Request $request){
        // dd($request);
        $value = OurValue::find(1);

        
        // Define an array to store file input names and corresponding database fields
        $fileFields = [
         
            'img_v' => 'img_v',
            'img_v2' => 'img_v2',
            'img_v3' => 'img_v3',
          
            'img_v4' => 'img_v4',
            'img_v5' => 'img_v5',
            'bg' => 'bg',
            'data_img' => 'data_img',
            'data_img1' => 'data_img1',
            'data_img2' => 'data_img2',
            'data_img3' => 'data_img3',
            'data_img4' => 'data_img4',
            'data_img5' => 'data_img5',
            'data_img6' => 'data_img6',
            'data_img7' => 'data_img7',
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'team/');
            if($image!=null)
                $value->update([$dbField => $image]);
        }

        // Define an array to store other fields that are not files
        $otherFields = [
    
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

        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $value->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }

        return redirect()->back();
    }
}
