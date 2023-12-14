<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Helpers\FileUploadHelper;
class PartnerController extends Controller
{
    //
    public function index(){
        $partner = Partner::find(1);
        return view('cms.partner',compact('partner'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $partner = Partner::find(1);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'partner/');
        if ($image_header != null)
            $partner->update(['image_header' => $image_header ]);

        $image= FileUploadHelper::uploadFile($request, 'image', 'partner/');
        if ($image!= null)
            $partner->update(['image' => $image]);


        $bg = FileUploadHelper::uploadFile($request, 'bg', 'partner/');
        if ($bg != null)
            $partner->update(['bg' => $bg ]);
         // Define an array to store file input names and corresponding database fields
         $fileFields = [
         
            'image1' => 'image1',
            'image2' => 'image2',
            'image3' => 'image3',
            'image4' => 'image4',
            'image5' => 'image5',
            'image6' => 'image6',
           
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'partner/');
            if($image!=null)
                $partner->update([$dbField => $image]);
        }


        // Define an array to store other fields that are not files
        $otherFields = [
            'title_header',
            'title_header',
            'subtitle_header',
          
            'alt',
            'title_s1',
            'text_s1',
            'title_s2',
            'text_s2',
            'title_s3',
    
            'small_title1_s3',
            'small_subtitle1_s3',        
            'alt1',
            'p1_s3',
            'link1_s3',   
            'small_title2_s3',
            'small_subtitle2_s3',          
            'alt2',
            'link2_s3',
            'p2_s3',    
            'small_title3_s3',
            'small_subtitle3_s3',         
            'alt3',
            'link3_s3',
            'p3_s3',
            'title_s4',
            'small_title4_s4',
            'small_subtitle4_s4',
            'link4_s4',
            'p4_s4',
           
            'alt4',
    
            'small_title5_s4',
            'small_subtitle5_s4',
            'link5_s4',
            'p5_s4',     
            'alt5',
            'small_title6_s4',
            'small_subtitle6_s4',
            'link6_s4',
            'p6_s4',
         
            'alt6',
        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $partner->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }
        return redirect()->back();
    }
}
